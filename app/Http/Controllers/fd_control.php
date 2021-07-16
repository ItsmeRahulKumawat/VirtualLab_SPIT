<?php

namespace App\Http\Controllers;

use App\Models\fd_subform;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\question;

class fd_control extends Controller
{
    public function fd_subform_fn(request $request){

        $data= new fd_subform();

        $data->page_id=$request->fd_page_id;
        $data->name=$request->Name;
        $data->email=$request->Email;
        $data->message=$request->Message;

        $data->save();
        

    }
    
    // public function showquiz()
    // {
    //     $var = 'prolog.easy';
    //     $num = 0;
    //     $i =1;

    //     $quest = DB::select('select * from questions where page_id=?',[$var]);
    //     $ans = DB::select('select * from answers where ans_id=?',[$i]);
    
        
    //     return view('quiz.beginner',compact('quest','ans','i'));
    // }
}
