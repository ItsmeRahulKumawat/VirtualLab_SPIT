
@extends('template')
@section('content')


<!DOCTYPE html>
<html lang="en">
<title>Mp Neuron</title>
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
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:290px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"></h3>
  </div>
  <div class="w3-bar-block" style="margin-top:-30px;">
  <a style="color:black" onclick="w3_close(); confirmLeave('mp')" class="w3-bar-item w3-button w3-hover-white">MP Neuron</a> 
    <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
    <a href="#procedure" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Procedure</a> 
    <a href="#simulation" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Simulation</a> 
    <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">MpNeuron Problems</a> 
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

  <!-- Prolog -->
  <div class="w3-container" style="margin-top:40px" id="intro">
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>XOR</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <b style="color:#CC0F0F">Problem Statement</b>

  <!-- procedure -->
  <div class="w3-container" id="procedure" style="margin-top:75px">
  <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
  <hr style="width:50px;border:5px solid #A00202" class="w3-round">

  </div>
  <!-- simulation -->
  <div class="w3-container" id="simulation" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Simulation.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
  </div>
  <!-- Prolog experiment -->
  <div class="w3-container" id="prologExp" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Mp Neuron Problem Statements.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
   <!--Controls-->
          <!-- setteled in comments because there are only 2 program in mp neuron if need in future remove this ,thats it

   <div class="controls-top" align="center" style="margin-bottom: 20px;">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><button class="arrow-left"><img class="icon_left" src="/images/arrow-left-solid.svg"></button></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><button class="arrow-right"><img class="icon_right" src="/images/arrow-right-solid.svg"></button></a>
   </div>
        -->
   <!--/.Controls-->
   <!--Indicators-->
       <!-- setteled in comments because there are only 2 program in mp neuron if need in future remove this ,thats it
   <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
   </ol>
   -->
   <!--/.Indicators-->
   <!--Slides-->
    <div class="space"></div>
   <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
      <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/mp-sub/activation.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Activation Function</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('mp-sub.activate')}}'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/mp-sub/alphabet.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Alphabet Identification</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('mp-sub.alphabet')}}'">Let's GO</button>
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
  </div>

  @include('feedback-section.feedback')
<!-- End page content -->
</div>
<div class="footer_space"></div>
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