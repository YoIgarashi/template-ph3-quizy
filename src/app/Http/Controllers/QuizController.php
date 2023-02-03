<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


// use Illuminate\Http\Request;

// class QuizController extends Controller
// {
//     public function quiz($id){
//             $name = DB::table('big_questions')->get();
//             dd($name);
//             $choices = DB::table('choices')->get();
//             $questions = DB::table('big_questions')->get();
        
//         return view('quiz.index',compact('name','choices','questions'));
//     }
//     }
class QuizController extends Controller
{
    public function quiz(Request $request)
    {
        $id = $request->id;
        $name =DB::table('big_questions')->find($id);
        $questions =DB::table('questions')->where('big_question_id', '=','1')->get();
        
        dd($questions);
        return view('quiz.index', compact('id','name','questions'));
    }
    }


    // @section('content')
    // <div class="wrapper" id="wrapper">
    //   @foreach($name as $n)
    //   <h1 class="content">ガチで{{$n->prefecture_name}} の人しか解けない！ #{{$n->prefecture_name}} の難読地名クイズ</h1>
    //   @endforeach
    //   <div class="content">
    //     <!-- 問題 -->
    //     <h2 class="h2">この地名は何て読む？：</h2>
    //     <ul class="list-of-choices">
    //       @foreach($choices as $choice)
    //       {{$loop->iteration}}
    //       <li class="choice">
    //       {{$choice->name}}
    //       </li>
    //     </ul>
    //     @endforeach
    //   </div>
    // </div>

//     public function quiz()
//     {
//         $choices = DB::table('choices')->get();
//             // dd($choices);
//             return view('quiz.index',[]);
//         }
// }



















