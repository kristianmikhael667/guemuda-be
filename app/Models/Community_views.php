<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community_views extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'community_views';

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['communities'] ?? false, function ($query, $communities) {
            return $query->whereHas('communities', function ($query) use ($communities) {
                $query->where('id_community', $communities);
            });
        });
    }

    public function communities()
    {
        return $this->belongsTo(CommunityNews::class, 'id_community');
    }
}
