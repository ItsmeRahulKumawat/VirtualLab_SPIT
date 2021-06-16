@extends('template')
@section('content')
<div class="main">
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-animate-top">VIRTUAL LAB</span>
  </div>
</header>
<div class="container" style="min-height: 700px;">
<div class="space"></div>
<h2 align="center" style="color:#CC0F0F">Welcome To Virtual Lab </h2>
&nbsp;&nbsp;&nbsp;
<p>Concept of Virtual labs are to simulate learning environments that allow students to complete laboratory experiments online and explore concepts and theories without stepping into a physical science lab.</p>
<b  style="color:#CC0F0F">Aim :</b>
<ul>
   <li>To understand different concept of Computational Intelligence</li>
   <li>To simulate the application based on the computational Intelligence</li>
</ul>
<b  style="color:#CC0F0F">Objective :</b>
&nbsp;&nbsp;&nbsp;
<ul>
   <li>To introduce students about the latest Computational Intelligence Tools and Techniques/li>
   <li>To develop rigorous applications in the AI domain.</li>
</ul>
&nbsp;&nbsp;&nbsp;
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
   <!--Controls-->
   <div class="controls-top" align="center" style="margin-bottom: 20px;">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><button class="arrow-left"><img class="icon_left" src="/images/arrow-left-solid.svg"></button></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><button class="arrow-right"><img class="icon_right" src="/images/arrow-right-solid.svg"></button></a>
   </div>
   <!--/.Controls-->
   <!--Indicators-->
   <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
   </ol>
   <!--/.Indicators-->
   <!--Slides-->
   <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <div class="carousel-item active">
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/prolog.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">PROLOG</h4>
                  <p class="card-text">Prolog is a logic programming language associated with artificial intelligence and computational linguistics.
                  </p>
                  <button type="button" class="button" onclick="location.href='/prolog'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/mp_neuron.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">MP NEURON</h4>
                  <p class="card-text">The most fundamental unit of deep neural networks is called an artificial neuron/perceptron.
                  </p>  
                  <button type="button" class="button" onclick="location.href='/mp_neuron'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/pnn_neuron.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">PNN NEURON</h4>
                  <p class="card-text">A probabilistic neural network is a feedforward neural network, which is widely used in pattern recognition problems.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/bnn.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">BNN NEURON</h4>
                  <p class="card-text">Binarized Neural Network (BNN) is also a neural network which consists of binary weights and activations.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
      </div>
      <!--/.First slide-->
      <!--Second slide-->
      <div class="carousel-item">
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/cnn.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">CNN NEURON</h4>
                  <p class="card-text">A convolutional neural network (CNN, or ConvNet) is a class of deep neural network, commonly applied to analyze visual imagery.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/supervised_nn.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">SUPERVISED NN MODEL</h4>
                  <p class="card-text">Supervised learning is a method by which you can use labeled training data to train a function that you can then generalize for new examples.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/fuzzyset.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">FUZZY SETS</h4>
                  <p class="card-text">Fuzzy set is a mathematical model of vague qualitative or quantitative data, frequently generated by means of the natural language.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/morgan.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">DE MORGAN'S LAW</h4>
                  <p class="card-text">In propositional logic and Boolean algebra, a pair of transformation rules that are both valid rules of inference.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
      </div>
      <!--/.Second slide-->
      <!-- Third slide-->
      <div class="carousel-item">
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/fuzzy_cont.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">FUZZY CONTROLLER</h4>
                  <p class="card-text">Fuzzy logic control (FLC) is the most active research area in the application of fuzzy set theory, fuzzy reasoning, and fuzzy logic.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/genetic.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">SIMPLE GENETIC APPLICATION</h4>
                  <p class="card-text">Genetic Algorithms are search algorithm based on mechanics of natural selection and natural genetics.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/anfis.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">ANFIS MATLAB</h4>
                  <p class="card-text">ANFIS is an intelligent Neuro-Fuzzy technique used for the modeling and control of ill-defined and uncertain systems.
                  </p>
                  <button type="button" class="button" onclick="location.href='https://fonts.google.com/icons'">Let's GO</button>
               </div>
            </div>
         </div>
      </div>
      <!--/.Third slide-->
    </div>
</div>
@stop