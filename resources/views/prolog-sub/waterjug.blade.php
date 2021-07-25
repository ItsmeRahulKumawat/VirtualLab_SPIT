
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
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:240px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"></h3>
  </div>
  <div class="w3-bar-block" style="margin-top:-30px;">
  <a style="color:black" onclick="w3_close(); confirmLeave('prolog')" class="w3-bar-item w3-button w3-hover-white">Prolog</a> 
    <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
    <a href="#procedure" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Procedure</a> 
    <a href="#simulation" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Simulation</a> 
    <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Prolog Problems</a> 
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
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Water Jug</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <b style="color:#CC0F0F">Problem Statement</b>
    <p>We are given 2 jugs, a 4-liter one and a 3-liter one. Neither has any measuring markers on it. There is a 
pump that can be used to fill the jugs with water. How can we get exactly 2 liters of water in to the 4-liter jug?</p><br>
<img src="/images/monkey-banana/waterjug.jpg">
<p>To solve this problem we have to make some assumptions not mentioned in the problem.</p>
<p>They are as follows:</p>
<ul>
	<li>We can fill a jug from the pump. </li>
	<li>We can pour water out of a jug to the ground.</li>
	<li>We can pour water from one jug to another.</li>
	<li>There is no measuring device available.</li>
</ul>

  <!-- procedure -->
  <div class="w3-container" id="procedure" style="margin-top:75px">
  <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
  <hr style="width:50px;border:5px solid #A00202" class="w3-round">
  <p>We will represent the state of the problem as a tuple(x,y) where x represents the amount of water in the 
4-liter jug and y represents the amount of water in the 3-liter jug.</p>
<ul>
	<li>Note: 0≤x≤4 , 0≤y≤3</li>
	<li>Our initial state: (0,0)</li>
	<li>Goal predicate state: (2,y) where 0≤y≤3</li>
	<li>We can use DFS algorithm to acheive the predicate solution.</li>
</ul>
<p>The operations you can perform are: </p>
<ul>
	<li>Empty a Jug x, (X, Y)->(0, Y) Empty Jug y</li>
	<li>Fill a Jug x, (0, 0)->(X, 0) Fill Jug y</li>
	<li>Pour water from one jug to the other until one of the jugs is either empty or full, (X, Y) -> (X-d, Y+d)</li>
</ul>

<p>Note: </p>
<ul>
	<li>(X, Y) corresponds to a state where X refers to amount of water in Jug1 and Y refers to amount of water in Jug2 </li>
	<li>Determine the path from initial state (xi, yi) to final state (xf, yf), where (xi, yi) is (0, 0) which indicates 
	both Jugs are initially empty and (xf, yf) indicates a state which could be (0, d) or (d, 0).</li>
</ul>
  </div>
  <!-- simulation -->
  <div class="w3-container" id="simulation" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Simulation.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <iframe src="https://trinket.io/embed/python/edd948bf08" width="100%" height="400" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
  </div>

  <!-- Prolog experiment -->
  <div class="w3-container" id="prologExp" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Prolog Problem Statements.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
   <!--Controls-->
   <div class="controls-top" align="center" style="margin-bottom: 20px;">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><button class="arrow-left"><img class="icon_left" src="/images/arrow-left-solid.svg"></button></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><button class="arrow-right"><img class="icon_right" src="/images/arrow-right-solid.svg"></button></a>
   </div>
   <!--/.Controls-->
   <!--Indicators-->
   <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
   </ol>
   <!--/.Indicators-->
   <!--Slides-->

   <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
      <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/monkey.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Monkey Banana</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.monkey')}}'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/hanoi.jpg" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Tower of Hanoi</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.hanoi')}}'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/puzzle.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">8 Puzzle</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.puzzle')}}'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/qeen.jpg" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Eight Queens</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.queens')}}'">Let's GO</button>
               </div>
            </div>
         </div>
      </div>
      <!--/.First slide-->
      <!--Second slide-->
      <div class="carousel-item">
      <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/list.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">List Basic</h4>
                  <p class="card-text">
                  </p>  
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.list')}}'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/sudoku.jpg" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Sudoku</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.sudoku')}}'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/tictac.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Tic Tac Toe</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.tictactoe')}}'">Let's GO</button>
               </div>
            </div>
         </div>
      </div>
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