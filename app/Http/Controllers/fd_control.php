<?php

namespace App\Http\Controllers;

use App\Models\fd_subform;

use Illuminate\Http\Request;
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
    
    function showquiz()
    {
        $data = question::all();
        return view('beginner', ['questions'=>$data]);
    }
}
