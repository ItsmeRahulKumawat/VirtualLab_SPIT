@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <title>Mp Neuron</title>
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
            <a style="color:black" onclick="w3_close(); confirmLeave('pnn')" class="w3-bar-item w3-button w3-hover-white">PNN</a> 
            <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
            <a href="#procedure" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Procedure</a> 
            <a href="#simulation" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Simulation</a> 
            <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">PNN Problems</a> 
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
         <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>C-Section Delivery Classification</b></h1>
         <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
         <hr style="width:50px;border:5px solid #A00202" class="w3-round">
         <p>Visual inspection of cardiotocography traces by obstetricians and midwives is the gold standard for monitoring the wellbeing of the foetus 
            during antenatal care. However, inter- and intra-observer variability is high with only a 30% positive predictive value for the classification of pathological outcomes.
         </p>
         <br>
         <div class="space"></div>
         <img src="/images/pnn-sub/c_section/mainpage1.png">
         <div class="space"></div>
         <p>Cardiotocography (CTG) is the most common method used to monitor the foetus during the early stages of delivery and clinical decisions are made using the visual inspection of 
            CTG traces. However, the main weakness with this approach is poor human interpretation which leads to high inter- and intra-observer variability.
         </p>
         <ul>
            <li>e. Using foetal heart rate signals and machine learning an objective measure of foetal state is used to detect the onset
               of pathological cases
            </li>
            <li><cases are classifed as a caesarean delivery due to pH
               ≤7.20—acidosis, n = 18; pH >7.20 and pH ≤7.25—foetal deterioration, n = 4; or clinical
               decision without evidence of pathological outcome measures.
            </li>
         </ul>
         <!-- procedure -->
         <div class="w3-container" id="procedure" style="margin-top:75px">
            <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
            <hr style="width:50px;border:5px solid #A00202" class="w3-round">
            <ul>
               <li>Consider a raw FHR time series signal X with length N, where X = {xn, n = 1, 2…, N}, in which the virtual baseline mean (VBM), x¯¯¯ is defined as:
               </li>
               <img src="/images/pnn-sub/c_section/mainpage2.png">
               <li>Such that x¯¯¯ can be used to remove accelerations and decelerations (ifxn>10+x¯¯¯then:xn=x¯+10;ifxn<−10+x¯¯¯then:xn=x¯+−10 from the FHR signal so that the real baseline FHR (RBL) can be derived</li>
               <li>Using the RBL, FIGO accelerations and decelerations can be extracted. These are features commonly used by obstetricians to monitor the interplay between the sympathetic and parasympathetic systems.
               </li>
               <img src="/images/pnn-sub/c_section/mainpage3.png">
            </ul>
            <p>The results demonstrate that machine learning significantly improves the efficiency for the detection of caesarean section and 
               normal vaginal deliveries using foetal heart rate signals.
            </p>
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
            <h1 style="font-size:30px; margin-top:30px;"><b>PNN Problem Statements.</b></h1>
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
                              src="/images/pnn-sub/stud_res.png" alt="Card image cap">
                           <div class="card-body">
                              <h4 class="card-title">Student Results</h4>
                              <p class="card-text">
                              </p>
                              <button type="button" class="button" onclick="location.href='{{route('pnn-sub.stud_res')}}'">Let's GO</button>
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