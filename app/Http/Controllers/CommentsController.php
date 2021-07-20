<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function store (Request $request)
    {
        $comment= new Comment();
        $comment->Name=$request->Name;
        $comment->Email=$request->Email;
        $comment->Page=$request->Page;
        $comment->SubPage=$request->SubPage;
        $comment->comment=$request->comment;

        $comment->save();

        $body = $comment->Name.' just gave the feedback from ['.$comment->Page. '->' .$comment->SubPage.']';
        $feed = $comment->comment;
        $details = [
            'title'=>'Mail From Virtual Lab SPIT.',
            'name'=>$body,
            'feedback' => $feed
        ];
        // $hanoi = Comment::where('SubPage', hanoi)->get();
        Mail::to("virtuallabfeed@gmail.com")->send(new FeedbackMail($details));

        return back();

    }
    public function index()
    {
        // $comments=Comment::where('approve', 1)->get();
        $comments = DB::select('select * from comments where SubPage=? and approve=?',["hanoi",1]);
        return view('prolog-sub.hanoi', compact('comments'));
    }



    // public function index($Page, $SubPage) {
    //     $comments = DB::select('select * from comments where SubPage=? and approve=?',["hanoi",1]);
    //     $comments = Comment::with(['comments'])->where('Page', $Page)->where('SubPage', $SubPage)->get();
    //     return view('quiz.beginner',compact('questions'));
    // }

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

      // mail

      public function sendEmail()
        {
            $body = $comment->Name.' just gave the feedback from'.$comment->Page.'->'.$comment->SubPage.'\r\n'.$comment->comment;
            $details = [
                'title'=>'Mail From Virtual Lab SPIT.',
                'body'=>$body
            ];
            // $hanoi = Comment::where('SubPage', hanoi)->get();
            Mail::to("virtuallabfeed@gmail.com")->send(new FeedbackMail($details));
            return back();
        }
}
