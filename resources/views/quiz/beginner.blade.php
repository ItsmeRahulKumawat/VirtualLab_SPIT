

@extends('template')
@section('content')

@foreach($questions as $question)
    {{$question['page_id']}}
@endforeach

@stop