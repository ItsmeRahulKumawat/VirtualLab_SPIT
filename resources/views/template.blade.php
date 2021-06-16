<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="ZyvLTqOXi7VdxLkBuLupK8cWNcFLjmwiisIgMPdF">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="icon" href="https://research.spit.ac.in/img/SPIT_logo.png" type="image/icon type">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- <link rel="stylesheet" href="https://research.spit.ac.in/css/font-awesome.css"> -->
      <!-- <link rel="stylesheet" href="https://research.spit.ac.in/css/app.css">  -->
      <link rel="stylesheet" href="/css/app.css" />
      <link rel="stylesheet" href="/css/font-awesome.css" />
      <link rel="stylesheet" href="/css/template_file.css" />
      <link rel="stylesheet" href="/css/homepage.css" />
      <link rel="stylesheet" href="/css/w3.css">
      <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/solid.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/light.css') }}">
      <!-- Custom styles for this template -->
      <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />
      <!-- Optional theme -->
      <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <title>SPIT R & D</title>
      <script src="https://research.spit.ac.in/js/app.js" defer></script>
   </head>
   <body>
      <div id="wrapper" class="home-page">
         <header>
            <div class="topbar">
               <div class="container">
                  <div class="row">
                     <div class="col-md-1 col-sm-2 col-xs-3">
                        <a class="navbar-brand pull-left" href="/"><img src="https://research.spit.ac.in/img/SPIT_logo.png"/></a>
                     </div>
                     <div class="col-md-7 col-sm-7 col-xs-9">
                        <a class="navbar-brand pull-left" href="/"><img src="https://research.spit.ac.in/img/logo.gif"/></a>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark">
               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="container">
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item" id="spithome">
                           <a class="nav-link" href="https://www.spit.ac.in/" target="_blank">SPIT</a>
                        </li>
                        <li class="nav-item" id="home">
                           <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item" id="homepage">
                           <a class="nav-link" href="/homepage">Virtual Lab</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
      </div>
      <div class="main">@section('content')
         @show
      </div>
      <!-- <div class="clear"></div> -->
      <!-- Footer -->
      <!-- <footer class="font-small text-white mt-5"> -->
      <!-- <div class="container"> -->
      <!-- <div class="row"> -->
      <div id="footer" class="fotters">
         <p class="footerwhite">
            <a class="anchor" href='http://www.spit.ac.in/'>Home</a> | 
            <a class="anchor"  href='http://www.aicte-india.org/' target='_blank'>AICTE</a> | 
            <a class="anchor"  href='http://www.mu.ac.in/' target='_blank'>Mumbai University</a> | 
            <a class="anchor"  href='http://www.dtemaharashtra.gov.in/' target='_blank'>DTE</a> |
            <a class="anchor"  href='http://www.spit.ac.in/wp-content/uploads/SPITVirtualTour/SPIOT_Templates/SPIOTFL' target='_blank'>Campus Virtual Tour</a> |  
            <a class="anchor"  href='http://mail.spit.ac.in'>Webmail</a> | 
            <a class="anchor"  href='http://www.spit.ac.in/about/contact/'>Contact</a> | 
         </p>
         <p class="footerwhite">
            <a class="anchor"  href='http://www.spit.ac.in/terms-conditions/'>Terms & Conditions</a> |
            <a class="anchor"  href='http://www.spit.ac.in/privacy-policy/'>Privacy Policy</a> |
            <a class="anchor"  href='http://www.spit.ac.in/refund-cancellation-policy/'>Refund/Cancellation Policy</a>
         </p>
         <p >Bharatiya Vidya Bhavans Sardar Patel Institute of Technology
            Munshi Nagar, Andheri (West), Mumbai 400 058
         </p>
         <p>(91)-(022)-26707440, 26287250</p>
         <p>
         <ul id="" class="cnss-social-icon " style="text-align:center;">
            <li class="cn-fa-facebook cn-fa-icon " style="display:inline-block;"><a class="" target="_blank" href="https://www.facebook.com/SPITCOLLEGE/" title="Facebook" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="Facebook" style="font-size:12px;" class="fa fa-facebook"></i></a></li>
            <li class="cn-fa-twitter cn-fa-icon " style="display:inline-block;"><a class="" target="_blank" href="https://twitter.com/bvbspit" title="Twitter" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="Twitter" style="font-size:12px;" class="fa fa-twitter"></i></a></li>
            <li class="cn-fa-linkedin cn-fa-icon " style="display:inline-block;"><a class="" target="_blank" href="https://www.linkedin.com/school/bhartiya-vidya-bhavans-sardar-patel-institute-of-technology-munshi-nagar-andheri-mumbai/" title="LinkedIn" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="LinkedIn" style="font-size:12px;" class="fa fa-linkedin"></i></a></li>
         </ul>
         </p>
         <div>
            <div class="col-md-6">
               <button id="scroll-to-top">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill footer_height" viewBox="0 0 16 16">
                     <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                  </svg>
               </button>
            </div>
         </div>
      </div>
      <div class="clear"></div>
      <script type="text/javascript">
         $(document).ready(function () {
             $('.dropdown-toggle').dropdown();
         });
      </script>
      <script
         src="https://code.jquery.com/jquery-3.3.1.min.js"
         integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
         crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://research.spit.ac.in/js/custom.js"></script>
   </body>
</html>