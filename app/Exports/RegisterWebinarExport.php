<?php

namespace App\Exports;

use App\Models\SurveyAnswers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class RegisterWebinarExport implements FromQuery
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(string $webinar_slug)
    {
        $this->webinar_slug = $webinar_slug;
    }
    public function query()
    {
        return SurveyAnswers::query()->where('webinar_slug', $this->webinar_slug);
    }

    
}
