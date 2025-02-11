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
    protected $with = ['user', 'category', 'comments'];
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

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'uid_user');
    }

    public function category()
    {
        return $this->belongsTo(CommunityGroup::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(CommentCom::class, 'post_id')->whereNull('parent_id')->where('status', 'accept')->orderBy('created_at', 'DESC');
        // return $this->morphMany(Comment::class, 'post')->whereNull('parent_id');
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
