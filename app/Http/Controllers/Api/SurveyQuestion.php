<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\ResponseFormatter;

use App\Models\SurveyQuestion as Survey;

class SurveyQuestion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $question = Survey::select('id', 'title', 'survey_question1', 'survey_question2', 'survey_question3', 'survey_question4', 'survey_question5', 'survey_question6', 'survey_question7', 'survey_question8', 'survey_question9', 'survey_question10', 'survey_question11', 'survey_question12', 'survey_question13', 'survey_question14', 'survey_question15')
            ->get();
        if ($question) {
            return response()->json([
                'message' => 'success',
                'status' => '200',
                'result' => ['data' => $question]
            ], 200);
        } else {
            return response()->json([
                'message' => 'No data Webinar successfully fetched',
                'status' => '400',
            ], 400);
        }
    }

    public function question($id)
    {
        $question = Survey::select('survey_question1', 'survey_question2', 'survey_question3', 'survey_question4', 'survey_question5', 'survey_question6', 'survey_question7', 'survey_question8', 'survey_question9', 'survey_question10', 'survey_question11', 'survey_question12', 'survey_question13', 'survey_question14', 'survey_question15')
            ->where('id', $id)
            ->first();
        if ($question) {
            return response()->json([
                'message' => 'success',
                'status' => '200',
                'result' => ['data' => $question]
            ], 200);
        } else {
            return response()->json([
                'message' => 'No data Webinar successfully fetched',
                'status' => '400',
            ], 400);
        }
    }
}
