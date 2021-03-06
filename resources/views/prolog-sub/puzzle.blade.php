
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
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>8 Puzzle</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <b style="color:#CC0F0F">Problem Statement</b>
    <p>The??8 Puzzle Problem??is a puzzle invented and popularized by Noyes Palmer Chapman in the 1870s.
 The aim of the puzzle is to achieve a given configuration of tiles from a given (different) configuration by sliding the individual tiles around the grid as described below.</p><br>
<img src="/images/monkey-banana/puzzle.jpg">
<p>Instead of moving the tiles in the empty space, we can visualize moving the empty space 
in place of the tile, basically swapping the tile with the empty space. The empty space can only move in four directions </p>
<ul>
	<li>Up</li>
	<li>Down</li>
	<li>Right</li>
	<li>Left</li>
</ul>
<p>The empty space cannot move diagonally and move the empty space one position at a time.</p>

  <!-- procedure -->
  <div class="w3-container" id="procedure" style="margin-top:75px">
  <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
  <hr style="width:50px;border:5px solid #A00202" class="w3-round">
  <p>The problem can be formulated with variables x1,x2,x3,x4,x5,x6,x7,x8 and y1,y2,y3,y4,y5,y6, y7,y8; 
the xs represent the rows and ys the column. Now a solution for this problem is to assign values for x and for y such that the constraint is satisfied.</p>
<ul>
	<li>To search for a solution, first select a search strategy. Next, there are some configuration options for the search process.</li>
	<li>We can perform a depth-first search on state-space (Set of all configurations of a given problem i.e. all states that can be reached from the initial state) tree. </li>
	<li>We can perform a Breadth-first search on the state space tree. </li>
	<li>The search for an answer node can often be speeded by using an ???intelligent??? ranking function, also called an approximate cost function to avoid 
	searching in sub-trees that do not contain an answer node.</li>
	<li>We can assume that moving one tile in any direction will have a 1 unit cost. Keeping that in mind, we can define a cost function for the 8-puzzle algorithm.</li>
</ul>
<p>Note:</p>
<ul>
	<li> If we solve this problem with depth first search, then it will go to depth instead of exploring layer wise nodes.</li>
	<li>N-puzzle that consists of N tiles (N+1 titles with an empty tile) where N can be 8, 15, 24 and so on.</li>
	<li>if we have N = 15, 24 in this way, then they have Row and columns as follow (square root of (N+1) rows  and square root of (N+1) columns).</li>
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
                  src="/images/Prolog-sub/qeen.jpg" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Eight Queens</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.queens')}}'">Let's GO</button>
               </div>
            </div>
         </div>
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
      </div>
      <!--/.First slide-->
      <!--Second slide-->
      <div class="carousel-item">
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
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/Prolog-sub/waterjug.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">Water Jug</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('prolog-sub.waterjug')}}'">Let's GO</button>
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