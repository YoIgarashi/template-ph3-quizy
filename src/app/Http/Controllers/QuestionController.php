<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\BigQuestion;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $questions = Question::where('big_question_id', $id)->get();
        return view('admin.question.index', compact('questions','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.question.create',compact('id'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id , Request $request)
    {
        $questions = new Question;
        $questions->local_name = $request->input('local_name');
        $questions->big_question_id = $id;
        $questions->save();
        return redirect()->route('question.index',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($question_id, $id)
    {
        $questions = Question::find($question_id);

        return view('admin.question.edit', compact('questions','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $questions = Question::find($id);
        // dd($questions);
        $questions->local_name = $request->input('local_name');
        $questions->save();
        return redirect()->route('question.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$question_id)
    {
        
    $questions = Question::with('choices')->find($question_id);
        $questions->delete();
        return redirect()->route('question.index',$id);
    }
}
