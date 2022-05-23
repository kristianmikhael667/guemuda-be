<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class SurveyAnswers extends Model
{
    use HasFactory;
    use HasApiTokens;
    use SoftDeletes;
    use HasApiTokens;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    protected $table = 'survey_answers';
    protected $fillable = ['webinar','nama', 'email', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'hobby', 'pekerjaan', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'alamat', 'survey_answers2', 'survey_answers3', 'survey_answers4', 'survey_answers1', 'survey_answers5', 'survey_answers6', 'survey_answers7', 'survey_answers8', 'survey_answers9', 'survey_answers10'];
}
