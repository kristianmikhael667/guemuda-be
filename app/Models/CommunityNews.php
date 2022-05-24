<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CommunityNews extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ['user', 'communitygroup'];
    public $incrementing = false;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        });

        $query->when($filters['user'] ?? false, function ($query, $user) {
            return $query->whereHas('user', function ($query) use ($user) {
                $query->where('username', $user);
            });
        });

        $query->when($filters['communitygroup'] ?? false, function ($query, $communitygroup) {
            return $query->whereHas('communitygroup', function ($query) use ($communitygroup) {
                $query->where('slug', $communitygroup);
            });
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'uid_user');
    }

    public function communitygroup()
    {
        return $this->belongsTo(CommunityGroup::class, 'category_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
