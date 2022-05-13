<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
// https://www.youtube.com/watch?v=JU4hQILRKog