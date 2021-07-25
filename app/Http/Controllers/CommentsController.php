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
        Mail::to("virtuallabfeed@gmail.com")->send(new FeedbackMail($details));

        return back();

    }
    public function index($Page,$SubPage)
    {
        $comments = Comment::with(['comments'])->where('Page', $Page)->where('SubPage', $SubPage)->get();
        $comments = DB::select('select * from comments where SubPage=? and approve=?',[$Page,1]);
        return view('feedback', compact('comments'));
    }
    // public function index_list()
    // {
    //     $comments = DB::select('select * from comments where SubPage=? and approve=?',["list",1]);
    //     return view('prolog-sub.list', compact('comments'));
    // }
    // public function index_monkey()
    // {
    //     $comments = DB::select('select * from comments where SubPage=? and approve=?',["monkey",1]);
    //     return view('prolog-sub.monkey', compact('comments'));
    // }
    // public function index_puzzle()
    // {
    //     $comments = DB::select('select * from comments where SubPage=? and approve=?',["puzzle",1]);
    //     return view('prolog-sub.puzzle', compact('comments'));
    // }
    // public function index_queens()
    // {
    //     $comments = DB::select('select * from comments where SubPage=? and approve=?',["list",1]);
    //     return view('prolog-sub.queens', compact('comments'));
    // }



    // public function index($Page, $SubPage) {
        // first we have to do validation of pages and subpages need to check wetaher the pages and subpages exist or not 
        //then we have t oset the varaible of pages and subpages based on fixed conditon
        //on the base of pages and sunpages parameters will be called
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
