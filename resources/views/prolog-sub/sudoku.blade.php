
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
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Sudoku</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <b  style="color:#CC0F0F">Problem Statement</b>
    <p>A sudoku puzzle is a 9x9 table. In the final solution for the puzzle, each of the 81 cells in the table should contain an integer number from 1 to 9 such that:</p><br>
<ul>
	<li>no row contains the same number twice (or more)</li>
	<li>no column contains the same number twice</li>
	<li>no block contains the same number twice</li>
</ul>
<img src="/images/monkey-banana/sudoku.jpg" alt="sudoku_img">
<div class="space"></div>
<p>In the initial puzzle, some of the numbers in the cells are given. To solve the puzzle, you have to find all the remaining numbers.</p>

  </div>

  <!-- procedure -->
  <div class="w3-container" id="procedure" style="margin-top:75px">
  <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
  <hr style="width:50px;border:5px solid #A00202" class="w3-round">
  <p>  | ?- sudoku(X, Y).
This is called the most general query, since all arguments are fresh variables. Declaratively, we are asking Prolog: "Are there any solutions 
whatsoever?" In this case, the system answers with:
    X = [_#3(1..4),_#24(1..4),...etc.]
    Y = [_#3(1..4),_#24(1..4),...etc.]</p>
<ul>
	<li> you have to apply a concrete enumeration of remaining variables. In Constraint Logic Programming 
	over Integers, this search is called labeling and provided by predicates like fd_labeling/2 or similar, depending on your Prolog system</li>
	<li>A partial instantiation of the rows turns this into a completion task, which is what we commonly understand as a Sudoku puzzle.</li>
	<li>a list of 9 rows that are to be completed to a Sudoku Latin square. Each row is a list of 9 variables, which can also be already instantiated to integers to fill in initial elements.</li>	
</ul>
<p>Note: </p>
<ul>
	<li>We can use constraint logic programming over integers, also known as CLP(FD), which is available in many Prolog systems. This is one of the most important and 
	most prominent applications of constraint logic programming and even of logic programming in general.</li>
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