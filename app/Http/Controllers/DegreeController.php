<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Quiz;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DegreeController extends Controller
{
    use ResponseTrait;

    public $score = 0;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Degree $degree
     * @return \Illuminate\Http\Response
     */
    public function show(Degree $degree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Degree $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Degree $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        //
    }


    public function nextQuestion($doctor_id, $quiz_id, Request $request)
    {

        $answers = Quiz::findOrFail($quiz_id);


        $doctor_answers = implode(',', $request->doctor_answer);

        if (strpos($answers->correct_answers, $doctor_answers) !== false) {


            $degree = new Degree();
            $degree->doctor_id = $doctor_id;
            $degree->quiz_id = $request->quiz_id;
            $degree->deg = $this->score + $answers->score;
            $degree->doctor_answers = $doctor_answers;
            $degree->save();
            return $this->successResponse($degree, Response::HTTP_CREATED);

        } else {
            return 'Dakatra b el Awanta ';
        }


//        if (strcmp(trim($answers->correct_answers), trim($request->doctor_answer)) === 0) {
//
//            return 'weeeeee';
//
//        }else{
//            return 'noooooo';
//        }


    }
}
