
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
    <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">CNN Problems</a> 
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
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>CNN(Convolutional Neural Network)</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>A Convolutional Neural Network (ConvNet/CNN) is a Deep Learning algorithm which can take in an input image, 
        assign importance (learnable weights and biases) to various aspects/objects in the image and be able to differentiate 
        one from the other. The pre-processing required in a ConvNet is much lower as compared to other classification 
        algorithms. While in primitive methods filters are hand-engineered, with enough training, ConvNets have the ability to 
        learn these filters/characteristics.</p>
        <div class="space"></div>
        <img src="/images/cnn-sub/cnn1.jpeg">
        <div class="space"></div>
        <p>A convolutional neural network consists of an input layer, hidden layers and an output 
        layer. In any feed-forward neural network, any middle layers are called 
        hidden because their inputs and outputs are masked by the activation function and final convolution.</p>
        <ul>
        <li>Convolutional filters/kernels defined by a width and height (hyper-parameters).</li>
        <li>The number of input channels and output channels (hyper-parameters). One layer's input 
        channels must equal the number of output channels (also called depth) of its input.</li>
        <li>Additional hyperparameters of the convolution operation, such as: padding, stride, and dilation.</li>
        </ul>
        <div class="space"></div>
        <b style="color:#CC0F0F"> CNNs have the following distinguishing features:</b>
        <div class="space"></div>
        <ul>
        <li>3D volumes of neurons. The layers of a CNN have neurons arranged in 3 dimensions: width, height and depth.</li>
        <li>Local connectivity: following the concept of receptive fields, CNNs exploit spatial locality by 
        enforcing a local connectivity pattern between neurons of adjacent layers.</li>
        <li>Shared weights: In CNNs, each filter is replicated across the entire visual field. </li>
        <li>Pooling: In a CNN's pooling layers, feature maps are divided into rectangular sub-regions, and the 
        features in each rectangle are independently down-sampled 
        to a single value, commonly by taking their average or maximum value.</li>
        <li>ReLU is the abbreviation of rectified linear unit, which applies the non-saturating activation function {f(x)=max(0,x)}.</li>
        </ul>
  </div>

  <div class="w3-container" id="prologExp" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>CNN Problems.</b></h1>
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
                        src="/images/cnn-sub/face.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Face Recognition</h4>
                        <p class="card-text">
                        </p>
                        <button type="button" class="button" onclick="location.href='{{route('cnn-sub.face_recog')}}'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['cnn', 'easy'])}}'">Ezzzzz</button>
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
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['cnn', 'intermediate'])}}'">Not Bad</button>
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
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['cnn', 'advanced'])}}'">Seriously!</button>
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