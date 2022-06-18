<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Notification extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['userfrom', 'userto'];

    public $incrementing = false;

    public function userfrom()
    {
        return $this->belongsTo(User::class, 'id_user_from');
    }

    public function userto()
    {
        return $this->belongsTo(User::class, 'id_user_to');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uid = Str::uuid();
        });
    }
}
