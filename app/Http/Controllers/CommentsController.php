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
        $comments=Comment::where('approve', 1)->get();
        return view('prolog-sub.hanoi', compact('comments'));
    }

    public function dash()
    {
        $comments=Comment::orderBy('created_at','desc')->get();
        return view('admindash', compact('comments'));
    }
    public function approval(Request $request)
    {

    	$comment= Comment::find($request->commentId);
    	$approveVal=$request->approve;
    	if($approveVal=='on'){
    		$approveVal=1;
    	}else{
    		$approveVal=0;
    	}

    	$comment->approve=$approveVal;
    	$comment->save();

    	return back();
    }
    public function destroy($delete){
        $comment=Comment::where('id', $delete)->delete();

        return back();
      }
}
