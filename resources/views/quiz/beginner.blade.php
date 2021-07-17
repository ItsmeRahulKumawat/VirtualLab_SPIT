

@extends('template')
@section('content')
<link rel="stylesheet" href="/css/quiz.css">

<form action="{{route('CheckControl')}}" method="post">
<div class="col-lg-8 m-auto d-block">
    <div class="card">
        @foreach($questions as $key => $question)
        <h3 class="card-header">
            {{$key+1}} )
            {{$question->question}}
        </h3>
            <br>
                @foreach($question->answers as $answer)
                    <h5 class="card-body">
                        <input type="radio" name="quizcheck[{{$answer->question_id}}]" value= '{{$question->answer_id}}'>
                        {{$answer->answer}}
                    </h5>
                @endforeach
        @endforeach
        
    </div>
    <div class="space"></div>
        <div class="wrap">
            <button class="button">Submit</button>
        </div>
     <div class="space"></div>
</div>
</form>

<div class="footer_space"></div>
@stop