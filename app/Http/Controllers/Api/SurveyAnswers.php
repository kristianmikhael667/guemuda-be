<?php

namespace App\Http\Controllers\Api;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\Fortify\PasswordValidationRules;
use App\Models\SurveyAnswers as RegisterWebinar;;
class SurveyAnswers extends Controller
{
    use PasswordValidationRules;
    public function index(Request $request)
    {
        $register = RegisterWebinar::get();
        if ($register){
            return response()->json([
                'message' => 'success fetched data',
                'status' => '200',
                'result' => ['data' => $register]
            ], 200);
        }
        else{
            return response()->json([
                'message' => 'No data Register successfully fetched',
                'status' => '400',
            ], 400);    
        }
    }

    public function registerWebinar(Request $request){
        try {
            $request->validate([
                'webinar' => 'required',
                'webinar_slug' => 'required',
                'nama' => 'required',
                'email' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'hobby' => 'required',
                'pekerjaan' => 'required',
                'provinsi' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'alamat' => 'required',
                'survey_question1' => 'nullable',
                'survey_answers1' => 'nullable',
                'survey_question2' => 'nullable',
                'survey_answers2' => 'nullable',
                'survey_question3' => 'nullable',
                'survey_answers3' => 'nullable',
                'survey_question4' => 'nullable',
                'survey_answers4' => 'nullable',
                'survey_question5' => 'nullable',
                'survey_answers5' => 'nullable',
                'survey_question6' => 'nullable',
                'survey_answers6' => 'nullable',
                'survey_question7' => 'nullable',
                'survey_answers7' => 'nullable',
                'survey_question8' => 'nullable',
                'survey_answers8' => 'nullable',
                'survey_question9' => 'nullable',
                'survey_answers9' => 'nullable',
                'survey_question10' => 'nullable',
                'survey_answers10' => 'nullable',
            ]);

            RegisterWebinar::create([
                'webinar' =>$request->webinar,
                'webinar_slug' =>$request->webinar_slug,
                'nama' => $request->nama,
                'email' => $request->email,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'hobby' => $request->hobby,
                'pekerjaan' => $request->pekerjaan,
                'provinsi' => $request->provinsi,
                'kota' => $request->kota,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'alamat' => $request->alamat,
                'survey_question1' => $request->survey_question1 ? $request->survey_question1 : "-",
                'survey_answers1' => $request->survey_answers1 ? $request->survey_answers1 : "-",
                'survey_question2' => $request->survey_question2 ? $request->survey_question2 : "-",
                'survey_answers2' => $request->survey_answers2 ? $request->survey_answers2 : "-",
                'survey_question3' => $request->survey_question3 ? $request->survey_question3 : "-",
                'survey_answers3' => $request->survey_answers3 ? $request->survey_answers3 : "-",
                'survey_question4' => $request->survey_question4 ? $request->survey_question4 : "-",
                'survey_answers4' => $request->survey_answers4 ? $request->survey_answers4 : "-",
                'survey_question5' => $request->survey_question5 ? $request->survey_question5 : "-",
                'survey_answers5' => $request->survey_answers5 ? $request->survey_answers5 : "-",
                'survey_question6' => $request->survey_question6 ? $request->survey_question6 : "-",
                'survey_answers6' => $request->survey_answers6 ? $request->survey_answers6 : "-",
                'survey_question7' => $request->survey_question7 ? $request->survey_question7 : "-",
                'survey_answers7' => $request->survey_answers7 ? $request->survey_answers7 : "-",
                'survey_question8' => $request->survey_question8 ? $request->survey_question8 : "-",
                'survey_answers8' => $request->survey_answers8 ? $request->survey_answers8 : "-",
                'survey_question9' => $request->survey_question9 ? $request->survey_question9 : "-",
                'survey_answers9' => $request->survey_answers9 ? $request->survey_answers9 : "-",
                'survey_question10' => $request->survey_question10 ? $request->survey_question10 : "-",
                'survey_answers10' => $request->survey_answers10 ? $request->survey_answers10 : "-",
            ]);

            $regist = RegisterWebinar::where('email', $request->email)->first();

            return response()->json([
                'message' => 'success created',
                'status' => '201',
                'result' => ['data' => $regist]   
            ], 201);
        } catch (Exception $error) {
            return response()->json([
                'message' => 'Somethings variable wrong (Authentication Failed)',
                'status' => '402',
                'error' => $error   
            ], 402);
        }
    } 
}
