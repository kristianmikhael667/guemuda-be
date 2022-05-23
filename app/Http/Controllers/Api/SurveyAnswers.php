<?php

namespace App\Http\Controllers\api;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Actions\Fortify\PasswordValidationRules;
use Carbon\Carbon;
use App\Models\SurveyAnswers as RegisterWebinar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
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
                'survey_answers1' => 'nullable',
                'survey_answers2' => 'nullable',
                'survey_answers3' => 'nullable',
                'survey_answers4' => 'nullable',
                'survey_answers5' => 'nullable',
                'survey_answers6' => 'nullable',
                'survey_answers7' => 'nullable',
                'survey_answers8' => 'nullable',
                'survey_answers9' => 'nullable',
                'survey_answers10' => 'nullable',
            ]);

            RegisterWebinar::create([
                'webinar' =>$request->webinar,
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
                'survey_answers1' => $request->survey_answers1 ? $request->survey_answers1 : "-",
                'survey_answers2' => $request->survey_answers2 ? $request->survey_answers2 : "-",
                'survey_answers3' => $request->survey_answers3 ? $request->survey_answers3 : "-",
                'survey_answers4' => $request->survey_answers4 ? $request->survey_answers4 : "-",
                'survey_answers5' => $request->survey_answers5 ? $request->survey_answers5 : "-",
                'survey_answers6' => $request->survey_answers6 ? $request->survey_answers6 : "-",
                'survey_answers7' => $request->survey_answers7 ? $request->survey_answers7 : "-",
                'survey_answers8' => $request->survey_answers8 ? $request->survey_answers8 : "-",
                'survey_answers9' => $request->survey_answers9 ? $request->survey_answers9 : "-",
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
