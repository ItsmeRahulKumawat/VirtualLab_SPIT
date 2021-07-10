
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
    <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Anifs Problems</a> 
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
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>ANFIS</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>An adaptive neuro-fuzzy inference system or adaptive network-based fuzzy inference system (ANFIS) is a kind of 
        artificial neural network that is based on Takagi–Sugeno fuzzy inference system.</p>
        <p>Its inference system corresponds to a set of fuzzy IF–THEN rules that have learning capability to approximate 
        nonlinear functions. Hence, ANFIS is considered to be a universal estimator.</p>
        <div class="space"></div>
            <img src="/images/anfis-sub/mainpage.png" alt="image">
        <div class="space"></div>
        <b style="color:#cc0f0f">ANFIS architecture:</b>
        <div class="space"></div>
        The architecture is composed by five layers</p>
        <ul>
            <li>The first layer takes the input values and determines the membership functions belonging to them. 
            It is commonly called fuzzification layer. </li>
            <li>The second layer is responsible of generating the firing strengths for the rules. Due to its task, 
            the second layer is denoted as "rule layer".</li>
            <li>The role of the third layer is to normalize the computed firing strengths, by dividing each value 
            for the total firing strength.</li>
            <li>The fourth layer takes as input the normalized values and the consequence parameter set {p,q,r}.</li>
            <li>The values returned by this layer are the defuzzificated ones and those values are passed to the last 
            layer to return the final output.</li>
        </ul>
  </div>

  <div class="w3-container" id="prologExp" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b></b></h1>
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
                        src="/images/anfis-sub/matlab.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Anifs with Matlab</h4>
                        <p class="card-text">
                        </p>
                        <button type="button" class="button" onclick="location.href='{{route('anfis-sub.impl_anfis')}}'">Let's GO</button>
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
  </div>
  
  <!-- feedback -->
  <div class="w3-container" id="feedback" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>Do you want us to improve something, Let us know we will try our best to improve it :) HAPPY LEARNING!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-margin-bottom">Send Message</button>
    </form>  
  </div>

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