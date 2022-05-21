<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeContent extends Model
{
    use HasFactory;

    protected $table = 'like_contents';
    protected $fillable = ['id_post', 'id_users'];
    public $timestamps = false;
}
