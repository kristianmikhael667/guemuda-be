<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class ProgramCat extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
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

    // Set Categori ID
    public function setCatAttribute($value)
    {
        $this->attributes['tags_id'] = json_encode($value);
    }

    //    Get Categori ID
    public function getCatAttribute($value)
    {
        return $this->attributes['tags_id'] = json_decode($value);
    }
}
