
@extends('template')
@section('content')


<!DOCTYPE html>
<html lang="en">
<title>Prolog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" src="/css/prolog.css">
<style>
body {font-size:16px;}
.w3-bar-item:hover {
    text-decoration:none;
    /* border-right:5px solid #CC0F0F; */
    background-image: linear-gradient(to left,white,white,white,white,white,#CC0F0F);
    border-radius:5px;
  }
.w3-bar-item {
  color:black;
}
.arrow-left{
  margin-right:400px;
}
.arrow-right{
  margin-left:400px;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:270px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"></h3>
  </div>
  <div class="w3-bar-block" style="margin-top:30px;">
    <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
    <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Fuzzyset Problems</a> 
    <a href="#assignment" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Assignment</a> 
    <a href="#feedback" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Feedback</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">&#9776;</a>
  <span>options</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px;margin-right:50px">

  <!-- bnn -->
  <div class="w3-container" style="margin-top:40px" id="intro">
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>FUZZY SETS</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p> A fuzzy set A on universe (domain) X is defined by the membership function μ(x) which is a mapping from the universe X into the 
        unit interval: ... If it equals zero, x does not belong to the set. If the membership degree is between 0 and 1, x is a partial member 
        of the fuzzy set.<br>
        In fuzzy sets, each elements is mapped to [0,1]
        by membership function.
        μ : X->[0, 1]
        Where [0,1] means real numbers between 0 and 1 (including 0 and 1).
        F(X) denotes the set of all fuzzy sets on X. </p>
        <!-- <div class="space"></div>
            <img src="/images/fuzzysets-sub/mainpage.png" alt="image">
        <div class="space"></div> -->

        <ul>
        <li>The a-cut Au of a fuzzy set A is the crisp subset of the
        universe of discourse X whose elements all have membership degrees greater than or
        equal to α</li>
        <li>An α-cut Aα is strict if μ(x) != α for each x E Aα</li>
        <li>A fuzzy set defined in IR n is convex if each of its α-cuts is a convex set. </li>
        <li>The support of a fuzzy set A is the crisp subset of X whose
        elements all have nonzero membership grades.</li>
        <li>The core of a fuzzy set A is a crisp subset of X consisting of
        all elements with membership grades equal to one.</li>
        <li>Cardinality of a fuzzy set A = {μA (Xi)/Xi
        1, 2, ... , n} is defined as the sum of the membership degrees</li>
        <li>The height of a fuzzy set A is the supremum of the membership grades of elements in A.</li>
        <li>A fuzzy set A is normal if 3x E X such that
        μA(X) = 1. The operator norm(A) denotes normalization of a fuzzy set, i.e., A' =
        norm(A) ¢:> μA' (x) = μA(X)/ hgt(A), Vx. </li>
        </ul>

        <p>Fuzzy Logic (FL) is a method of reasoning that resembles human reasoning. This approach is similar to how humans perform decision
        making. And it involves all intermediate possibilities between YES and NO.</p>
  </div>

  <div class="w3-container" id="prologExp" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Fuzzy Sets Problems</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <div class="space"></div>
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
   <!--Controls-->
   <!-- 
   <div class="controls-top" align="center" style="margin-bottom: 20px;">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><button class="arrow-left"><img class="icon_left" src="/images/arrow-left-solid.svg"></button></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><button class="arrow-right"><img class="icon_right" src="/images/arrow-right-solid.svg"></button></a>
   </div>
    -->
   <!--/.Controls-->
   <!--Indicators-->
   <!-- 
   <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
   </ol>
    -->
   <!--/.Indicators-->
   <!--Slides-->

   <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
      <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                        src="/images/fuzzysets-sub/fuzzyoperations/fuzzy.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Fuzzy Operations(U,I,C)</h4>
                        <p class="card-text">
                        </p>
                        <button type="button" class="button" onclick="location.href='{{route('fuzzyset-sub.fuzzy')}}'">Let's GO</button>
                    </div>
                </div>
            </div>
      </div>
      <!--/.First slide-->
      <!--Second slide-->
      <!-- WE can add here more problems in future if we needed to and just we have to make the main div which is there is in first slider exactly and then just copy paste the blocks of cards and sliders are automatically given if we add somthing in second or third it will slide according to that -->
      <!--/.Second slide-->
    </div>
  </div>

  <!-- Assignment -->
  <div class="w3-container" id="assignment" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Assignment.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    
    <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
         <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/assignment/easy.jpg" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Beginner</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['fuzzysets', 'easy'])}}'">Ezzzzz</button>
               </div>
            </div>
         </div>
         <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/assignment/medium.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Intermediate</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['fuzzysets', 'intermediate'])}}'">Not Bad</button>
               </div>
            </div>
         </div>
         <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/assignment/hard.jpg" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Advanced</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['fuzzysets', 'advanced'])}}'">Seriously!</button>
               </div>
            </div>
         </div>
</div>
</div>
  </div>
  
  @include('feedback-section.feedback')
<!-- End page content -->
</div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

</script>

</body>
</html>

@stop