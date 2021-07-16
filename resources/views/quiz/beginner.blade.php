

@extends('template')
@section('content')
<style>
    input[type="radio"]{
        height:18px;
        width:18px;
    }
</style>
<form action="check.php" method="post">
<div class="col-lg-8 m-auto d-block">
    <div class="card">
        @foreach($questions as $key => $question)
        <h3 class="card-header">
            {{$key+1}} )
            {{$question->questions}}
        </h3>
            <br>
                @foreach($question->answers as $answer)
                    <h5 class="card-body">
                        <input type="radio" name="quizcheck[]" value="answer['aid']">
                        {{$answer->answers}}
                    </h5>
                @endforeach
        @endforeach
    </div>
</div>
</form>
<div class="footer_space"></div>
@stop