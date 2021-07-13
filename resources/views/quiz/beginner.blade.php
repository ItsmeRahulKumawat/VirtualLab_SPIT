

@extends('template')
@section('content')

$con = mysqli_connect('localhost','root');
if($con){
    echo " success";
}
mysqli_select_db($con, 'quiz_db')



@stop