<?php

namespace App\Models;

use hisorange\BrowserDetect\Parser as Browser;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ContentViews extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'content_views';

    public static function createViewLog($post)
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        // echo json_encode(define('LARAVEL_START', microtime(true)));
        // die;
        $browsers = Browser::browserName();
        $browsers_name = preg_replace('/[0-9]+/', '', $browsers);
        $browsers_names = str_replace(".", "", $browsers_name);

        $platforms = Browser::platformName();
        $platforms_name = preg_replace('/[0-9]+/', '', $platforms);
        $platforms_names = str_replace(".", "", $platforms_name);

        $postsViews = new ContentViews();
        $postsViews->id_post = $post->id;
        $postsViews->titleslug = $post->slug;
        $postsViews->url = request()->url() . '?slug=' . $post->slug;
        $postsViews->session_id = '-';
        $postsViews->user_id = Auth::check() == false ? '-' : Auth::id();
        $postsViews->ip = request()->ip();
        $postsViews->agent = $browsers_names;
        $postsViews->platform = $platforms_names;
        $postsViews->device = Browser::deviceFamily();
        $postsViews->save();
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['posts'] ?? false, function ($query, $posts) {
            return $query->whereHas('posts', function ($query) use ($posts) {
                $query->where('id_post', $posts);
            });
        });
    }

    public function posts()
    {
        return $this->belongsTo(Content::class, 'id_post');
    }
}
