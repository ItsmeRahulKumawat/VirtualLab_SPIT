@extends('template')
@section('content')

<link rel="stylesheet" href="/css/about_us.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

<style>

</style>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="/images/about_us/arti.jpeg">
                </div>
                <h3 class="title">Dr.Aarti Karande</h3>
                <span class="post">Project Manager</span>
                <ul class="social">
                <li><a href="https://aartimkarande.in/" target="_blank" class="fa fa-user"></a></li>
                    <li><a href="aartikarande@spit.ac.in" target="_blank" class="fa fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/aartimkarande/" target="_blank" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="/images/about_us/rahul2.jpg">
                </div>
                <h3 class="title">Rahul Kumawat</h3>
                <span class="post">DevOps</span>
                <ul class="social">
                    <li><a href="https://github.com/ItsmeRahulKumawat" target="_blank" class="fab fa-github"></a></li>
                    <li><a href="mailto: rahulkumawat20000.com" target="_blank" class="fa fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/rahul-kumawat-016b61201/" target="_blank" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="/images/about_us/rutika.jpg">
                </div>
                <h3 class="title">Rutika Sonawane</h3>
                <span class="post">DevOps</span>
                <ul class="social">
                <li><a href="" target="_blank" class="fab fa-github"></a></li>
                    <li><a href="" target="_blank" class="fa fa-envelope"></a></li>
                    <li><a href="" target="_blank" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer_space"></div>
@stop