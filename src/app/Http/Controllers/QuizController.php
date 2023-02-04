<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BigQuestion;


class QuizController extends Controller
{
    public function quiz(Request $request)
    {
        $id = $request->id;
        $issue = BigQuestion::where('id', $id)->with('questions.choices')->get();
        return view('quiz.index', compact('id','issue'));
    }
    }





















