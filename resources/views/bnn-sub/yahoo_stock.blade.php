@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <title>BNN Neuron</title>
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
      <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:270px;font-weight:bold;" id="mySidebar">
         <br>
         <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
         <div class="w3-container">
            <h3 class="w3-padding-64"></h3>
         </div>
         <div class="w3-bar-block" style="margin-top:-30px;">
            <a style="color:black" onclick="w3_close(); confirmLeave('bnn')" class="w3-bar-item w3-button w3-hover-white">BNN Neuron</a>
            <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
            <a href="#procedure" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Procedure</a> 
            <a href="#simulation" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Simulation</a> 
            <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">BNN Problems</a> 
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
            <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Yahoo Stock Prediction</b></h1>
            <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
            <hr style="width:50px;border:5px solid #A00202" class="w3-round">
            <p>Stock market is a promising financial investment that can generate great wealth. However, the 
                volatile nature of the stock market makes it a very high risk investment.Therefore, the neural network is used to train the 
                data for overcoming these risks. The Neural Network is a computational model that consists of processing elements (neurons) 
                and connections (weights) connecting them Large number of highly interconnected neurons work in unison to solve specific problems.</p><br>
                <div class="space"></div>
                <img src="/images/bnn-sub/yahoo_pred/mainpage.png">
                <div class="space"></div>
                <p>To train the dat for the stock prediction prblem, Binary Neural Network performs basically the following function:</p>
                <ul>
                    <li>Sums up all the inputs to it, which may vary by the strength of the connection or the frequency of the incoming signal</li>
                    <li>Process it by a threshold function and produce an output signal</li>
                </ul>
            </div>
            <!-- procedure -->
            <div class="w3-container" id="procedure" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <p>Modeling the neural network for the problem in hand is a key step in designing a solution.</p>
                <ul>
                    <li>Define the problem</li>
                    <li>Understand what type of input data is available to decide the number of input layer nodes</li>
                    <li>Understand what is the expected output from the system to decide the number of output layer nodes</li>
                    <li>Decide how many nodes in the hidden layers, use the same number of nodes as in input layer to keep it simple</li>
                    <li>Learning rate, controls how fast/slow the system will learn from training data </li>
                </ul>
                <p>Use daily historical stock price data from a financial data source for the stock symbol you are tracking, use 
                next day opening price as your expected output for today's training data record, and the system output as 
                tomorrow's opening price of your stock. </p>
            </div>
            <!-- simulation -->
            <div class="w3-container" id="simulation" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Simulation.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <div data-pym-src="https://www.jdoodle.com/iembed/v0/f37">
               </div>
               <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js"
                  type="text/javascript"></script>
            </div>
         <!-- Prolog experiment -->
         <div class="w3-container" id="prologExp" style="margin-top:75px">
            <h1 style="font-size:30px; margin-top:30px;"><b>BNN Problem Statements.</b></h1>
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
                              src="/images/bnn-sub/covid.png" alt="Card image cap">
                           <div class="card-body">
                              <h4 class="card-title">Covid Prediction</h4>
                              <p class="card-text">
                              </p>
                              <button type="button" class="button" onclick="location.href='{{route('bnn-sub.covid_pred')}}'">Let's GO</button>
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
         <!-- feedback -->
  <div class="w3-container" id="feedback" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>Do you want us to improve something, Let us know we will try our best to improve it :) HAPPY LEARNING!</p>
    <form action="{{url('/comment')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="w3-section">
         <input type="hidden" name="Page" value="bnn">
         <input type="hidden" name="SubPage" value="yahoo_stock">
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