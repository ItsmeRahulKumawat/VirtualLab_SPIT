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
            <a style="color:black" onclick="w3_close(); confirmLeave('mp')" class="w3-bar-item w3-button w3-hover-white">BNN Neuron</a>
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
            <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Covid Prediction</b></h1>
            <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
            <hr style="width:50px;border:5px solid #A00202" class="w3-round">
            <p>The novel coronavirus (COVID-19 or SARS-COV-2) epidemic has involved into a global pandemic. 
                Rapid human-to-human transmission accompanied by unrevealed nature of the virus has led to a tremendous 
                outbreak. To defeat the COVID-19 outbreak, appropriate and evidence-based actions must be taken worldwide. 
                For this purpose, prediction models can help not only allocating medical resources but also raising the 
                preparedness of healthcare systems involved.</p>
                <div class="space"></div>
                <img src="/images/bnn-sub/covid_pred/mainpage.png">
                <div class="space"></div>
                <p>Firstly it was suggexted to use multi-gen genetic programming, which is one of AI models, to develop 
                mathematical models with the exponential function for predicting the COVID-19 pandemic</p>
                <ul>
                    <li>Application of Artificial Neural Networks to predict the COVID-19 outbreak is limited.</li>
                    <li>BNN makes the prediction of covid-19 based on a majority of clinical characteristics</li>
                </ul>
            </div>
            <!-- procedure -->
            <div class="w3-container" id="procedure" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <p>The corresponding data were divided into two parts including train and test data.The estimated accumulative 
                confirmed cases of the test data were compared with those of observed ones.</p>
                <ul>
                    <li>For accomplishing purpose, it is required to be trained using a set of records comprising 
                    input and the corresponding output data.</li>
                    <li>The training process is commonly conducted by the flexible architecture of ANN including 
                    three layers: (1) an input layer, (2) a hidden layer, and (3) an output layer.</li>
                    <li>The first and the third ones contain neurons associated with the input and output vectors, respectively.</li>
                    <li>Neurons in the hidden layer, which are connected with the neurons of the input and output 
                    layers, are basically responsible for turning the input data into the corresponding output data.</li>
                    <li>Additionally, they transfer a weighted summation of the input data using a transfer function.</li>
                </ul>
                <p>Finally, the better ANN is trained, the more accurate results may be achieved.</p>
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
                              src="/images/bnn-sub/yahoo.png" alt="Card image cap">
                           <div class="card-body">
                              <h4 class="card-title">Yahoo Stock Pred</h4>
                              <p class="card-text">
                              </p>
                              <button type="button" class="button" onclick="location.href='{{route('bnn-sub.yahoo_stock')}}'">Let's GO</button>
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