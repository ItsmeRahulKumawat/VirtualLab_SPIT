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
      <link rel="stylesheet" href="/css/mainpage.css" />
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
      <script type="text/javascript" src="/js/main.js"></script>
      <script src="//cdn.jsdelivr.net/npm/less@4.1.1" ></script>
      
   </head>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

.header-fixed {
	background-image: linear-gradient(to bottom, #cc0f0f , white);
	padding: 20px 40px;
	height: 80px;

   height:150px;
	color: #cc0f0f;
	box-sizing: border-box;
	top:-100px;

	-webkit-transition:top 0.3s;
	transition:top 0.3s;
   margin-bottom:-100px;
}

.header-fixed .header-limiter {
	max-width: 1200px;
	text-align: center;
	margin: 0 auto;
}

/*	The header placeholder. It is displayed when the header is fixed to the top of the
	browser window, in order to prevent the content of the page from jumping up. */

.header-fixed-placeholder{
	height: 80px;
	display: none;
}

/* Logo */

.header-fixed .header-limiter h1 {
	float: left;
   font-family: 'Lobster', cursive;
   	line-height: 40px;
	margin: 0;
   
}

.header-fixed .header-limiter h1 span {
	color: #5383d3;
   
}

/* The navigation links */

.header-fixed .header-limiter a {
	color: #ffffff;
	text-decoration: none;
}

.header-fixed .header-limiter nav {
	font:18px Arial, Helvetica, sans-serif;
	line-height: 40px;
	float: right;
}

.header-fixed .header-limiter nav a{
	display: inline-block;
	padding: 0 5px;
	text-decoration:none;
	color: #ffffff;
	opacity: 0.7;
}

.header-fixed .header-limiter nav a:hover{
	opacity: 1;
}

.header-fixed .header-limiter nav a.selected {
	color: #608bd2;
	pointer-events: none;
	opacity: 1;
}

/* Fixed version of the header */

body.fixed .header-fixed {
	padding: 10px 40px;
	height: 50px;
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;
	z-index: 1;
   
}

body.fixed .header-fixed-placeholder {
	display: block;
   
}

body.fixed .header-fixed .header-limiter h1 {
	font-size: 24px;
	line-height: 30px;
   display:none;
}

body.fixed .header-fixed .header-limiter nav {
	line-height: 28px;
	font-size: 18px;
}


/* Making the header responsive */

@media all and (max-width: 600px) {

	.header-fixed {
		padding: 20px 0;
		height: 75px;
	}
  
	.header-fixed .header-limiter h1 {
		float: none;
		margin: -8px 0 10px;
		text-align: center;
		font-size: 24px;
		line-height: 1;
	}

	.header-fixed .header-limiter nav {
		line-height: 1;
		float:none;
	}

	.header-fixed .header-limiter nav a {
		font-size: 13px;
	}

	body.fixed .header-fixed {
		display: none;
	}
   

}

/*
	 We are clearing the body's margin and padding, so that the header fits properly.
	 We are also adding a height to demonstrate the scrolling behavior. You can remove
	 these styles.
 */

   </style>
   
   <body>
      <!-- <div id="wrapper" class="home-page">
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
                        <div class="dropdown">
                           <a class="nav-link dropbtn" href="/homepage">Virtual Lab</a>
                           <div class="dropdown-content">
                              <a href="/homepage/#expList">All Experiments</a>
                           </div>
                        </div>
                        <li class="nav-item" id="about_us">
                           <a class="nav-link" href="/about_us">About Us</a>
                        </li>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
      </div> -->
                     <!--Hey! This is the original version
               of Simple CSS Waves-->
               <!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Basic Header</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-fixed.css">
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

<header class="header-fixed">

	<div class="header-limiter">

		<h1><a href="#" style="font-size:50px">VIRTUAL LAB<span style="color:black">SPIT</span></a></h1>

		<nav>
			<a class="aone" href="/homepage"><b>Home</b></a>
			<a class="aone" href="/homepage/#expList"><b>All Experiments</b></a>
			<a class="aone" href="/about_us"><b>About Us</b></a>
         <a class="aone" href="/about_us"><b>Admin</b></a>
		</nav>

	</div>

</header>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<!-- The content of your page would go here. -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 400){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>


</body>

</html>

               

      <div class="footer_space"></div>
      <div class="main">@section('content')
         @show
      </div>
      <!-- <div class="clear"></div> -->
      <!-- Footer -->
      <!-- <footer class="font-small text-white mt-5"> -->
      <!-- <div class="container"> -->
      <!-- <div class="row"> -->

      <div>

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
      @yield('bottom-js')
   </body>
</html>