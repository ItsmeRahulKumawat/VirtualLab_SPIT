<?php

namespace App\Http\Controllers;

use App\Models\Question;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function viewQuiz($subject, $difficulty_level) {
        $questions = Question::with(['answers'])->where('subject', $subject)->where('difficulty_level', $difficulty_level)->get();
        return view('quiz.beginner',compact('questions'));
    }

}