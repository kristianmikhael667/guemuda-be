<?php

namespace App\Exports;

use App\Models\SurveyAnswers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisterWebinarExport implements FromCollection, WithHeadings
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function __construct(string $webinar_slug)
    {
        $this->webinar_slug = $webinar_slug;
    }
    public function collection()
    {
        $surveys = SurveyAnswers::where('webinar_slug', $this->webinar_slug)->get();

        $surveyor = $surveys->map(function ($item) {
            return [
                'Name Webinar' => $item->Webinar,
                'Name' => $item->nama,
                'Email' => $item->email,
                'Place of Birth' =>  $item->tempat_lahir,
                'Date of Birth' => $item->tanggal_lahir,
                'Gender' => $item->jenis_kelamin,
                'Hobby' => $item->hobby,
                'Jobs' => $item->pekerjaan,
                'Province' => $item->provinsi,
                'City' => $item->kota,
                'Districts' => $item->kecamatan,
                'Ward' => $item->kelurahan,
                'Address' => $item->alamat,
                $item->survey_question1 ? $item->survey_question1 : '-'  => $item->survey_answers1,
                $item->survey_question2 ? $item->survey_question2 : '-'  => $item->survey_answers2,
                $item->survey_question3 => $item->survey_answers3,
                $item->survey_question4 => $item->survey_answers4,
                $item->survey_question5 => $item->survey_answers5,
                $item->survey_question6 => $item->survey_answers6,
                $item->survey_question7 => $item->survey_answers7,
                $item->survey_question8 => $item->survey_answers8,
                $item->survey_question9 => $item->survey_answers9,
                $item->survey_question10 => $item->survey_answers10,
                $item->survey_question11 => $item->survey_answers11,
                $item->survey_question12 => $item->survey_answers12,
                $item->survey_question13 => $item->survey_answers13,
                $item->survey_question14 => $item->survey_answers14,
                $item->survey_question15 => $item->survey_answers15,
            ];
        });

        return collect($surveyor->all());
    }

    public function headings(): array
    {
        $surveys = SurveyAnswers::where('webinar_slug', $this->webinar_slug)->get();

        $surveyor = $surveys->map(function ($item) {
            return [
                'Name Webinar',
                'Name',
                'Email',
                'Place of Birth',
                'Date of Birth',
                'Gender',
                'Hobby',
                'Jobs',
                'Province',
                'City',
                'Districts',
                'Ward',
                'Address',
                $item->survey_question1 ? $item->survey_question1 : '-',
                $item->survey_question2 ? $item->survey_question2 : '-',
                $item->survey_question3 ? $item->survey_question3 : '-',
                $item->survey_question4 ? $item->survey_question4 : '-',
                $item->survey_question5 ? $item->survey_question5 : '-',
                $item->survey_question6 ? $item->survey_question6 : '-',
                $item->survey_question7 ? $item->survey_question7 : '-',
                $item->survey_question8 ? $item->survey_question8 : '-',
                $item->survey_question9 ? $item->survey_question9 : '-',
                $item->survey_question10 ? $item->survey_question10 : '-',
                $item->survey_question11 ? $item->survey_question11 : '-',
                $item->survey_question12 ? $item->survey_question12 : '-',
                $item->survey_question13 ? $item->survey_question13 : '-',
                $item->survey_question14 ? $item->survey_question14 : '-',
                $item->survey_question15 ? $item->survey_question15 : '-',
            ];
        });

        return $surveyor[0];
    }
}
