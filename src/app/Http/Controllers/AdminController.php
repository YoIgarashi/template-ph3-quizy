<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BigQuestion;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $big_questions = BigQuestion::get();
        return view('admin.index', compact('big_questions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $big_questions = new BigQuestion;
        $big_questions->prefecture_name = $request->input('prefecture_name');
        $big_questions->save();
        return redirect('admin');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $big_question = BigQuestion::find('id');
        return view('admin/show', compact('big_question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $big_question=BigQuestion::find($id);
        return view('admin/edit', compact('big_question'));
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
        $big_question=BigQuestion::find($id);

        $big_question->prefecture_name=$request->prefecture_name;
    
        //DBに保存
        $big_question->save();
    
        //処理が終わったらmember/indexにリダイレクト
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $big_question=BigQuestion::find($id);

        $big_question->delete();
    
        return redirect('admin');
    }
}
