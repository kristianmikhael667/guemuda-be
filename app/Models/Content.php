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
    protected $with = ['user'];


    public function user()
    {
        return $this->belongsTo(User::class, 'uid_user');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
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
