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

        $postsViews = new ContentViews();
        $postsViews->id_post = $post->id;
        $postsViews->titleslug = $post->slug;
        $postsViews->url = request()->url() . '?slug=' . $post->slug;
        $postsViews->session_id = '-';
        $postsViews->user_id = Auth::check() == false ? '-' : Auth::id();
        $postsViews->ip = $ip;
        $postsViews->agent = Browser::browserName();
        $postsViews->platform = Browser::platformName();
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
