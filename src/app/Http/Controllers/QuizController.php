<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


// use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz($id){
        if($id == 1){
            $name = DB::table('big_questions')->get();
            dd($name);
            $choices = DB::table('choices')->get();
            $questions = DB::table('big_questions')->get();
        }else{
            $name =DB::table('big_questions')->get();
            $choices = [0];
            $questions = [0];
        }
        
        return view('quiz.index',compact('name','choices','questions'));
    }
    }



//     public function quiz()
//     {
//         $choices = DB::table('choices')->get();
//             // dd($choices);
//             return view('quiz.index',[]);
//         }
// }



















