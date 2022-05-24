<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Content extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['user', 'category', 'comments', 'subcat'];

    // protected $primaryKey = 'uuid';
    public $incrementing = false;
    // protected $casts = [
    //     'tags_id' => 'integer',
    // ];

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
                $query->where('uuid', $category);
            });
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'uid_user');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcat()
    {
        return $this->hasMany(Category::class, 'parent', 'id');
    }

    // public function tags_id()
    // {
    //     return $this->belongsTo(Tags::class, 'tags_id');
    // }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id')->whereNull('parent_id')->orderBy('id', 'DESC');
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



    public function categoryuid()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function views()
    {
        return $this->hasMany(ContentViews::class);
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

// https://class.buildwithangga.com/course_playing/full-stack-laravel-react-native-foodmarket-apps/14
// https://medium.com/geekculture/how-to-upload-a-video-in-laravel-1dc07bde3839
// https://www.youtube.com/watch?v=q8FmWY5y0qI&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=11 16:13
