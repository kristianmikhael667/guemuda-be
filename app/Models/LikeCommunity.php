<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeCommunity extends Model
{
    use HasFactory;

    protected $table = 'like_communities';
    protected $fillable = ['id_community', 'id_users'];
    public $timestamps = false;
}
