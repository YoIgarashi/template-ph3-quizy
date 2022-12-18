<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz($id){
        if($id == 1){
            $name =['name'=>'東京'];
        }else{
            $name =['name'=>'広島'];
        }
        return view('quiz.index', $name);
    }
}
















