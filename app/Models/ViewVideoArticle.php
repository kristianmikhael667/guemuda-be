<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewVideoArticle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'view_video_articles';

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['videoarticles'] ?? false, function ($query, $communities) {
            return $query->whereHas('videoarticles', function ($query) use ($communities) {
                $query->where('id_community', $communities);
            });
        });
    }

    public function videoarticles()
    {
        return $this->belongsTo(ViewVideoArticle::class, 'id_article');
    }
}
