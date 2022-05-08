<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class VideoCommunity extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];
    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'uid_user');
    }

    public function category()
    {
        return $this->belongsTo(CategoryCommunity::class, 'category_id');
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
