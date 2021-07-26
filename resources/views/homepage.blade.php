@extends('template')
@section('content')
<div class="main">

  <div class="w3-right">
    <!-- <span class="w3-text-white w3-animate-bottom" style="margin-right:30px;">VIRTUAL LAB</span> -->
  </div>
</header>
<div class="container" style="min-height: 700px;">
<div class="space"></div>
<h1 class="w3-xxxlarge w3-center" style="color:#CC0F0F"><b>Welcome To Virtual Lab</b></h1>
&nbsp;&nbsp;&nbsp;
<p style="text-align:center">Concept of Virtual labs are to simulate learning environments that allow students to complete laboratory experiments online and explore concepts and theories without stepping into a physical science lab.SPIT is focused on the new techniques and ways to engage students to perform experiments effectively. Virtual 
laboratories are a great way for learners to practice in a safe, online environment. It is the best IT infrastructure virtual labs for those who want to learn with practice.</p>
<div class="space"></div>
<div class="container">
   <b style="color:#CC0F0F">What is Virtual Lab ?</b>
      <ul>
        <li>A virtual Lab is a simulated lab environment typically implemented as a software program which allows the users to perform their experiments.</li>
      </ul><br>
</div>
<div class="container">
<b  style="color:#CC0F0F">Aim :</b>
<ul>
   <li>To understand different concept of Computational Intelligence</li>
   <li>To simulate the application based on the computational Intelligence</li>
   <li>To understand different concept of experiments and subjects.</li>
	<li>To allow students to make mistakes without fear of not getting the experiment done right.</li>
	<li>To present abstract ideas that may not normally be easily viewed</li>
   <li>To simulate the application based on the computational Intelligence</li>
</ul>
</div>
<div class="space"></div>
<div class="container">
<b  style="color:#CC0F0F">Objective :</b>
&nbsp;&nbsp;&nbsp;
<ul>
   <li>To introduce students about the latest Computational Intelligence Tools and Techniques</li>
   <li>To develop rigorous applications in the AI domain.</li>
   <li> The concept of Virtual lab is to simulate learning environments that allow students to complete laboratory experiments online and explore concepts 
	and theories without stepping into a physical science lab.</li>
	<li>These labs are created with the lab’s combinations, illustrations, & assignments to convey key information and engage students in the process of programming and learning.</li>
	<li>A virtual lab is an on-screen simulator or calculator that helps test ideas and observe results. Learners use advanced technology to perform a series of experiments 
	that yield authentic results.</li>
	<li>It reduces installation work of diiferent appliactions. As it consist all the simulators neede for expermients. These lab saves computer memory and RAM.</li>
</ul>
</div>
<h1 class="w3-xxxlarge w3-center" id="expList" style="color:#CC0F0F"><b>All Experiments</b></h1>
<div class="space"></div>
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
                  src="/images/fuzzyset.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">FUZZY SETS</h4>
                  <p class="card-text">Fuzzy set is a mathematical model of vague qualitative or quantitative data, frequently generated by means of the natural language.
                  </p>
                  <button type="button" class="button" onclick="location.href='/fuzzysets'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/bnn.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">BNN NEURON</h4>
                  <p class="card-text">A biological neural network is composed of a groups of chemically connected or functionally associated neurons.
                  </p>
                  <button type="button" class="button" onclick="location.href='/bnn'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='/cnn'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='/supervised_nn'">Let's GO</button>
               </div>
            </div>
         </div>
         <div class="col-md-3" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top"
                  src="/images/pnn_neuron.png" alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">PNN NEURON</h4>
                  <p class="card-text">In the context of neural networks, a perceptron is an artificial neuron using the Heaviside step function as the activation function.
                  </p>
                  <button type="button" class="button" onclick="location.href='/pnn'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='/morgan'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='/fuzzycont'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='/genetic'">Let's GO</button>
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
                  <button type="button" class="button" onclick="location.href='/anfis'">Let's GO</button>
               </div>
            </div>
         </div>
      </div>
      <!--/.Third slide-->
    </div>
</div>
@stop