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
            <a style="color:black" onclick="w3_close(); confirmLeave('anfis')" class="w3-bar-item w3-button w3-hover-white">Anfis</a>
            <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
            <a href="#procedure" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Procedure</a> 
            <a href="#simulation" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Simulation</a> 
            <!-- <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">CNN Problems</a>  -->
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
            <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Anfis Using MATLAB</b></h1>
            <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
            <hr style="width:50px;border:5px solid #A00202" class="w3-round">
            <b style="color:#cc0f0f">MATLAB</b>
            <div class="space"></div>
                It combines a desktop environment tuned for iterative analysis and design processes with a programming language 
                that expresses matrix and array mathematics directly. It includes the Live Editor for creating scripts that combine 
                code, output, and formatted text in an executable notebook.</p>
                <div class="space"></div>
                    <img src="/images/anfis-sub/matlab/mainpage.png" alt="image">
                <div class="space"></div>
                <p>Using ANFIS training methods, you can train Sugeno systems with the following properties:</p>
                <ul>
                    <li>Single output</li>
                    <li>Weighted average defuzzification</li>
                    <li>First or zeroth order system; that is, all output membership functions must be the same type, either 'linear' or 'constant'.</li>
                    <li>No rule sharing. Different rules cannot use the same output membership function; that is, the number of output membership 
                    functions must equal the number of rules.</li>
                    <li>Unity weight for each rule.</li>
                    <li>No custom membership functions or defuzzification methods.</li>
                </ul>
            </div>
            <!-- procedure -->
            <div class="w3-container" id="procedure" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <b style="color:#cc0f0f">To work on anfis using matlab:</b>
               <div class="space"></div>
                    <ul>
                        <li>Train a fuzzy system using neuro-adaptive methods, you must collect input/output training data using experiments or 
                        simulations of the system you want to model.</li>
                        <li>When training using the anfis function, you can specify what training progress information to display in the MATLAB Command Window. </li>
                        <li>Validation data lets you check the generalization capability of your trained fuzzy inference system. The validation data should fully 
                        represent the features of the data the FIS is intended to model, while also being sufficiently different from the training data to test 
                        training generalization.</li>
                        <li>During training, the Neuro-Fuzzy Designer app plots the training and checking error for each training epoch.</li>
                        <li>The Neuro-Fuzzy Designer app manages training epochs in a manner different from the anfis function. This difference produces 
                        variations in the training results.</li>
                    </ul>
                    <p>To train a system for N epochs at the command line, you call the anfis function one time, specifying the number of epochs as N. However, the 
                    Neuro-Fuzzy Designer app calls the anfis function N times, specifying the number of epochs as 2 each time.</p>
            </div>
            <!-- simulation -->
            <div class="w3-container" id="simulation" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Simulation.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <div data-pym-src="https://www.jdoodle.com/iembed/v0/f3s">
               </div>
               <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js"
                  type="text/javascript"></script>
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