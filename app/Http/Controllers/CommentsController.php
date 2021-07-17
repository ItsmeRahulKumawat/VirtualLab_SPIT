<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function store (Request $request)
    {
        $comment= new Comment();
        $comment->Name=$request->Name;
        $comment->Email=$request->Email;
        $comment->comment=$request->comment;
        $comment->save();

        return back();

    }
    public function index()
    {
        $comments=Comment::all();
        return view('prolog-sub.hanoi', compact('comments'));
    }
}
