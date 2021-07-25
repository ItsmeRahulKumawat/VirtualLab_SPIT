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
            <a style="color:black" onclick="w3_close(); confirmLeave('anfis')" class="w3-bar-item w3-button w3-hover-white">Simple Genetic</a>
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
            <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Implementation of Gentic Algorithm</b></h1>
            <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
            <hr style="width:50px;border:5px solid #A00202" class="w3-round">
            <p>Genetic algorithms are designed to solve problems by using the same processes as in nature — they use a 
                combination of selection, recombination, and mutation to evolve a solution to a problem.</p><br>
                <div class="space"></div>
                    <img src="/images/genetic-sub/genetic-algo/mainpage1.png" alt="image">
                <div class="space"></div>
                <p>Genetic algorithms are a part of evolutionary computing, which is a rapidly growing area of artificial intelligence.
                An algorithm starts with a set of solutions (represented by individuals) called population. Solutions from one population 
                are taken and used to form a new population, as there is a chance that the new population will be better than the old one.
                Individuals that are chosen to form new solutions (offspring) are selected according to their fitness — the more suitable 
                they are, the more chances they have to reproduce.</p>
            </div>
            <!-- procedure -->
            <div class="w3-container" id="procedure" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <p>It is an optimization technique, which tries to find out such values of input so that we get the best output values or results.</p>
               <div class="space"></div>
               <img src="/images/genetic-sub/genetic-algo/mainpage2.png" alt="image">
               <div class="space"></div>
                
                <ul>
                    <li>To solve this problem using genetic algorithm, our first step would be defining our population. So our population will 
                    contain individuals, each having their own set of chromosomes. </li>
                    <li>Let us calculate fitness points for our first two chromosomes.</li>
                    <li>We can select fit chromosomes from our population which can mate and create their off-springs.</li>
                    <li>we have selected parent chromosomes that will produce off-springs. So in biological terms, crossover is nothing but reproduction.</li>
                    <li>Mutation ic=s defined as a random tweak in the chromosome, which also promotes the idea of diversity in the population.</li>
                </ul>
                <p>The off-springs thus produced are again validated using our fitness function, and if considered fit then will replace the less fit 
                chromosomes from the population.</p>
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
         <!-- feedback -->
  <div class="w3-container" id="feedback" style="margin-top:75px">
    <h1 style="font-size:30px; margin-top:30px;"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid #A00202" class="w3-round">
    <p>Do you want us to improve something, Let us know we will try our best to improve it :) HAPPY LEARNING!</p>
    <form action="{{url('/comment')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="w3-section">
         <input type="hidden" name="Page" value="simplegenetic">
         <input type="hidden" name="SubPage" value="genetic_algo">
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