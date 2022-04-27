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
