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
            <a style="color:black" onclick="w3_close(); confirmLeave('bnn')" class="w3-bar-item w3-button w3-hover-white">CNN Neuron</a>
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
            <h1 class="w3-xxxlarge" style="color:#CC0F0F"><b>Face Recognition with Google Collab</b></h1>
            <h1 style="font-size:30px; margin-top:30px;"><b>Introduction.</b></h1>
            <hr style="width:50px;border:5px solid #A00202" class="w3-round">
            <p>Google Colab is a browser-based Jupyter notebook service that’s available for free. This service is 
                fit for Deep Learning and Machine Learning applications. </p>
                <div class="space"></div>
                <img src="/images/cnn-sub/face_recog/mainpage.png">
                <div class="space"></div>
                <p>We trained the model with several images and then used the test images to see how the results match up. We trained the model through 
                epochs. In this model, we have taken epochs as 100. Once the threshold is achieved by the model and if we further try to train our model, 
                then it will provide unexpected results and its accuracy will also decrease. After that, increasing the epoch would also not help. Hence, epochs 
                play a very important role in deciding the accuracy of the model, and its value can be decided through trial and error.</p>
            </div>
            <!-- procedure -->
            <div class="w3-container" id="procedure" style="margin-top:75px">
               <h1 style="font-size:30px; margin-top:30px;"><b>Procedure.</b></h1>
               <hr style="width:50px;border:5px solid #A00202" class="w3-round">
               <p>The classic use of CNN is to perform image classification. There are different 
                    parameters that need to be considered for building this model.</p>
                    <ul>
                        <li>Keras ImageDataGenerator augments the images in real-time while the model is still training. Any random 
                        transformation can be applied to each training image as it is passed to the model.</li>
                        <li>Different Activation functions are used, such as Rectified Linear Unit (ReLU) and Softmax functions.</li>
                        <li>Pooling layers are used to reduce the number of parameters when the images are too large. Downsampling 
                        reduces the dimensionality of each map but it retains the important features.</li>
                        <li>Max Pooling takes the largest element from the rectified feature map and downsamples it.</li>
                        <li>Dropout is a simple and powerful regularization technique for neural networks and deep learning models. 
                        A good value for dropout in a hidden layer is between 0.5 and 0.8. Input layers use a larger dropout rate, such as 0.8.</li>
                        <li>Dense is the only actual network layer in the model. It feeds all outputs from the previous layer to all its 
                        neurons, each neuron providing one output to the next layer. </li>
                        <li>The number of epoch will decide- how many times we will change the weights of the network.</li>
                    </ul>
                    <p></p>
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