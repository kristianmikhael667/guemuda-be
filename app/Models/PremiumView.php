<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumView extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'premium_views';

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['posts'] ?? false, function ($query, $posts) {
            return $query->whereHas('posts', function ($query) use ($posts) {
                $query->where('id_post', $posts);
            });
        });
    }

    public function premiumcontent()
    {
        return $this->belongsTo(PremiumContent::class, 'id_post');
    }
}
