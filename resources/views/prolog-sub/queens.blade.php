
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
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>8 Queens</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <b  style="color:#CC0F0F">Problem Statement</b>
    <p>Eight queens problem is a constraint satisfaction problem. The task 
is to place eight queens in the 64 available squares in such a way that no queen attacks each other.</p><br>
<img src="/images/monkey-banana/queens.jpg" alt="8 queens image">
<div class="space"></div>
<p>8 QUEENS place 8 queens on an 8 X 8 chessboard so that:</p>
<ul>
	<li>none of the queens is under attack. </li>
	<li>No two queens share the same row, column or diagonal.</li>
</ul>

  </div>

  <!-- procedure -->
  <div class="w3-container" id="procedure" style="margin-top:75px">
  <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
  <hr style="width:50px;border:5px solid #A00202" class="w3-round">
  <p>The problem can be formulated with variables x1,x2,x3,x4,x5,x6,x7,x8 and y1,y2,y3,y4,y5,y6, y7,y8; 
the xs represent the rows and ys the column. Now a solution for this problem is to assign values for x and for y such that the constraint is satisfied.</p>
<ul>
	<li>Each queen will be represented by X and Y (row and column)</li>
	<li>We will “think” about this problem in terms of placing N queens not just 8. Recursive relation between N queens and (N – 1) queens</li>
	<li>If the list of queens is not empty, then it can be written [X1:Y1 | Others] where X1:Y1 represents the first queen (head) and Others the other queens (tail)</li>
</ul>
<p>Note: <br>List of N queens</p>
<ul>
	<li>Base case: list of queens is empty</li>
	<li>General case: list of queens looks like [X:Y | Others] </li>
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

  <!-- feedback -->
  <div class="w3-container" id="feedback" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>Do you want us to improve something, Let us know we will try our best to improve it :) HAPPY LEARNING!</p>
    <form action="{{route('fd_subform')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="w3-section">
      <input type="hidden" id="fd_page_id" name="fd_page_id" value="prolog->queens">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <input type="submit" style="width:200px;" value="Send Message" class="w3-block btn btn-outline-secondary w3-padding-large w3-margin-bottom">
    </form>  
  </div>

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