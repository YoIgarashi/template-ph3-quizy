<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;
use App\Models\Question;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $choices = Question::with('choices')->find($id);
        return view('admin.question.choice.index', compact('choices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $choices = Question::all();
        return view('admin.question.choice.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $choices = new Choice;
        $choices->name = $request->input('name');
        $choices->valid =$request->input('valid');
        $choices->question_id= $id;
        $choices->save();
        return redirect()->route('choice.index', compact('id','choices'));
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
    public function edit($choice_id)
    {
        $choices = Choice::find($choice_id);
        return view('admin.question.choice.edit', compact('choices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $choice_id)
    {
        $choices = Choice::find($choice_id);
        $choices->name = $request->input('name');
        $choices->valid = $request->input('valid');
        $choices->save();
        $id = $choices->question_id;
        return redirect()->route('choice.index', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($choice_id)
    {
        
        $choices = Choice::find($choice_id);
        $choices->delete();
        $id = $choices->question_id;
        return redirect()->route('choice.index',compact('id'));
    }
}
