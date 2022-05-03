<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ["sub_categories"];

    public function posts()
    {
        return $this->hasMany(Content::class);
    }

    public function videoarticle()
    {
        return $this->hasMany(VideoArticle::class);
    }

    public function sub_categories()
    {
        return $this->hasMany(Category::class, "parent", "id");
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, "parent", "id");
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
