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
                called ???Composition???. There are many composition methods in use , e.g. max-product
                method, max-average method and max-min method. But max-min composition method is
                best known in fuzzy logic applications.</p>
                <div class="space"></div>
                <img src="/images/morgan-sub/max-min_comp.png" alt="image">
                <div class="space"></div>
                <p>Max ???min composition
                Let R1 (x, y), (x,y E A??B) and R2 (y, z) ,(y,z E B??C) be the two relations.
                The max- min composition is then the fuzzy set
                R1??? R2 ={[(x,y), maxy{min { ?? R1 (x,y). ?? R2 (y,z)}}] xEA, yEB, zEC}
                Here ?? R1 and ?? R2 is membership function of a fuzzy relation on fuzzy sets</p>
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
               <pre>Let R1 (x, y), and R2 (y, z) be defined by the following relational matrices</pre>
               <div style="float: left;margin-right:80px">
               <table cellpadding="5 px" style="td {border:1px solid black}">
                     <tr>
                        <td rowspan="4">R1 = </td>
                        <td></td>
                        <td>y1</td>
                        <td>y2</td>
                        <td>y3</td>
                     </tr>
                     <tr>
                        <td>x1</td>
                        <td>0.2</td>
                        <td>0.5</td>
                        <td>0.7</td>
                     </tr>
                     <tr>
                        <td>x2</td>
                        <td>0.3</td>
                        <td>0.6</td>
                        <td>0.7</td>
                     </tr>
                     <tr>
                        <td>x3</td>
                        <td>0.4</td>
                        <td>0.8</td>
                        <td>0.9</td>
                     </tr>
                     </table>
                     </div>
                     <table cellpadding="5 px">
                     <tr>
                        <td rowspan="4">R2 = </td>
                        <td></td>
                        <td>z1</td>
                        <td>z2</td>
                     </tr>
                     <tr>
                        <td>y1</td>
                        <td>1</td>
                        <td>0.8</td>
                     </tr>
                     <tr>
                        <td>y2</td>
                        <td>0.5</td>
                        <td>0.6</td>
                     </tr>
                     <tr>
                        <td>y3</td>
                        <td>0.4</td>
                        <td>0.3</td>
                     </tr>
                     </table><br>
            <p>Now computing the max ???min composition as per definition Calculations are as follow:<br>
            min { ?? R1 (x1,y1), ?? R2 (y1.z1)}=min (0.2,1)= 0.2<br>
            .........</p>
                     <table cellpadding="5 px">
                     <tr>
                        <td rowspan="4">R1??? R2 (x, z) = </td>
                        <td></td>
                        <td>z1</td>
                        <td>z2</td>
                     </tr>
                     <tr>
                        <td>x1</td>
                        <td>0.5</td>
                        <td>0.5</td>
                     </tr>
                     <tr>
                        <td>x2</td>
                        <td>0.5</td>
                        <td>0.6</td>
                     </tr>
                     <tr>
                        <td>x3</td>
                        <td>0.5</td>
                        <td>0.6</td>
                     </tr>
                     </table>
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