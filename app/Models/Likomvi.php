<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Likomvi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uid_content', 'uid_user', 'total_like', 'total_view', 'total_comment', 'comment', 'like'
    ];
}
