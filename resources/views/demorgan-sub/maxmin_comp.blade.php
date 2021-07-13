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
            <a style="color:black" onclick="w3_close(); confirmLeave('morgan')" class="w3-bar-item w3-button w3-hover-white">De-Morgan Law</a> 
            <a href="#intro" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Introduction</a> 
            <a href="#procedure" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Procedure</a> 
            <a href="#simulation" onclick="w3_close()" class=" w3-bar-item w3-button w3-hover-white">Simulation</a> 
            <a href="#prologExp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">De-Morgan Problems</a> 
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
            <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Max-Min Composition</b></h1>
            <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
            <hr style="width:50px;border:5px solid #A00202" class="w3-round">
            p>Fuzzy relation in different product space can be combined with each other by the operation
                called “Composition”. There are many composition methods in use , e.g. max-product
                method, max-average method and max-min method. But max-min composition method is
                best known in fuzzy logic applications.</p>
                <div class="space"></div>
                //Add image
                <div class="space"></div>
                <p>Max –min composition
                Let R1 (x, y), (x,y E A×B) and R2 (y, z) ,(y,z E B×C) be the two relations.
                The max- min composition is then the fuzzy set
                R1○ R2 ={[(x,y), maxy{min { μ R1 (x,y). μ R2 (y,z)}}] xEA, yEB, zEC}
                Here μ R1 and μ R2 is membership function of a fuzzy relation on fuzzy sets</p>
                <p>Properties:</p>
                <ul>
                    <li>Associativity</li>
                    <li>Reflexivity</li>
                </ul>
            </div>
            <!-- procedure -->
            <div class="w3-container" id="procedure" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <pre>Let R1 (x, y), and R2 (y, z) be defined by the following relational matrices
                            y1   y2   y3
                        x1 	0.2  0.5  0.7
                    R1 = 	x2 	0.3  0.6  0.7
                        x3 	0.4  0.8  0.9

                            z1   z2
                        y1 	1    0.8
                    R2 = 	y2 	0.5  0.6
                        y3 	0.4  0.3

                    Now computing the max –min composition as per definition
                    Calculations are as follow:
                    min { μ R1 (x1,y1), μ R2 (y1.z1)}=min (0.2,1)= 0.2
                    .........
                                z1   z2
                            x1 	0.5  0.5
                    R1○ R2 (x, z) = x2 	0.5  0.6 
                            x3 	0.5  0.6
                    </pre>
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
         <!-- Prolog experiment -->
         <div class="w3-container" id="prologExp" style="margin-top:75px">
            <h1 style="font-size:30px; margin-top:30px;"><b>De-Morgans Law Problem Statements.</b></h1>
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
               <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                            <img class="card-img-top"
                                src="/images/morgan-sub/all-law.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">All Law</h4>
                                <p class="card-text">
                                </p>
                                <button type="button" class="button" onclick="location.href='{{route('demorgan-sub.all_laws')}}'">Let's GO</button>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                            <img class="card-img-top"
                                src="/images/morgan-sub/max-prod.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Max Product Comp</h4>
                                <p class="card-text">
                                </p>
                                <button type="button" class="button" onclick="location.href='{{route('demorgan-sub.maxprod_comp')}}'">Let's GO</button>
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
    <form action="{{route('fd_subform')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="w3-section">
      <input type="hidden" id="fd_page_id" name="fd_page_id" value="demorgan.maxmin">
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