
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
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:280px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"></h3>
  </div>
  <div class="w3-bar-block" style="margin-top:30px;">
    <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
    <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">MpNeuron Problems</a> 
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

  <!-- mp-neuron -->
  <div class="w3-container" style="margin-top:40px" id="intro">
    <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>MP NEURON</b></h1>
    <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    
    <div class="space"></div>
	<img src="/images/mp-sub/mainpage.png" alt="mainimage"></img>
  <div class="space"></div>
  <b style="color:#CC0F0F">Motivation: Biological Neurons</b>
  <div class="space"></div>
        <ul>
        <li>Dendrite: Receives signals from other neurons</li>
	<li>Soma: Processes the information</li>
	<li>Axon: Transmits the output of this neuron</li>
	<li>Synapse: Point of connection to other neurons</li>
        </ul><br>
	<p>Basically, a neuron takes an input signal (dendrite), processes 
	it like the CPU (soma), passes the output through a cable like structure to other 
	connected neurons (axon to synapse to other neuron’s dendrite). This is what is going 
	on with a neuron in our brain — takes an input, processes it, throws out an output.</p>
        <b style="color:#CC0F0F; font-size:25px">McCulloch-Pitts Neuron</b>
        <div class="space"></div>
	<p>MP Neuron Model introduced by Warren McCulloch and Walter Pitts in 1943. 
	MP neuron model is also known as linear threshold gate model.</p>
	<img src="/images/mp-sub/mainpage_circle.png" alt="image">
  <div class="space"></div>
        <p>It may be divided into 2 parts. The first part, g takes an input (ahem dendrite ahem), 
	performs an aggregation and based on the aggregated value the second part, f makes a decision.</p>
        <p>Lets suppose that I want to predict my own decision, whether to watch a random football game or 
	not on TV. The inputs are all boolean i.e., {0,1} and my output variable is also boolean 
	{0: Will watch it, 1: Won’t watch it}.</p>
	<ul>
        <li>So, x_1 could be isPremierLeagueOn (I like Premier League more)</li>
	<li>x_2 could be isItAFriendlyGame (I tend to care less about the friendlies)</li>
	<li>x_3 could be isNotHome (Can’t watch it when I’m running errands. Can I?)</li>
	<li>x_4 could be isManUnitedPlaying (I am a big Man United fan. GGMU!) and so on.</li>
        </ul><br>
	<p>These inputs can either be excitatory or inhibitory. Inhibitory inputs are those that have 
	maximum effect on the decision making irrespective of other inputs i.e., if x_3 is 1 (not home) then 
	my output will always be 0 i.e., the neuron will never fire, so x_3 is an inhibitory input. Excitatory inputs are 
	NOT the ones that will make the neuron fire on their own but they might fire it when combined together.</p>
  <img src="/images/mp-sub/mainpage_formula.png" alt="formula">
	<p>We can see that g(x) is just doing a sum of the inputs — a simple aggregation. And theta here is called thresholding 
	parameter. For example, if I always watch the game when the sum turns out to be 2 or more, the theta is 2 here. 
	This is called the Thresholding Logic.</p>

  </div>

  <div class="w3-container" id="prologExp" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>MpNeuron Problems.</b></h1>
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
                  src="/images/mp-sub/xor.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">XOR Gate</h4>
                  <p class="card-text">
                  </p>
                  <button type="button" class="button" onclick="location.href='{{route('mp-sub.xor')}}'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['mp_neuron', 'easy'])}}'">Ezzzzz</button>
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
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['mp_neuron', 'intermediate'])}}'">Not Bad</button>
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
                  <button type="button" class="button" onclick="location.href='{{route('quiz.viewQuiz', ['mp_neuron', 'advanced'])}}'">Seriously!</button>
               </div>
            </div>
         </div>
</div>
</div>
  </div>
  
   <!-- feedback -->
   <div class="w3-container" id="feedback" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>Do you want us to improve something, Let us know we will try our best to improve it :) HAPPY LEARNING!</p>
    <form action="{{url('/comment')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="w3-section">
         <input type="hidden" name="Page" value="mp_neuron">
         <input type="hidden" name="SubPage" value="">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="comment" required>
      </div>
      <input type="submit" style="width:200px;" value="Send Message" class="w3-block btn btn-outline-secondary w3-padding-large w3-margin-bottom">
    </form>       
  </div>
  <div class="w3-container" id="RecentFeedbacks" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Recent Feedbacks.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    
    
        @forelse($comments as $comment)

      <div class="card" id="feedbacklist">
      <h2 class="card-header">{{$comment->Name}}</h2>
      <div class="card-body">
         <h5 class="card-title">{{$comment->comment}}.</h5>
         
         <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true" style="color:blue"></i></button>
      <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true" style="color:red"></i></button>
      </div>
      </div>       
      @empty
         <h4>No Feedbacks</h4>
      @endforelse


</div>
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