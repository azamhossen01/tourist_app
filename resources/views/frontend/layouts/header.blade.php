<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('frontend')}}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Travel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/linearicons.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery-ui.css">				
        <link rel="stylesheet" href="{{asset('frontend')}}/css/nice-select.css">							
        <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.css">				
        <link rel="stylesheet" href="{{asset('frontend')}}/css/main.css">
    </head>
    <body>	
        <header id="header">
            <div class="header-top">
                <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                          <ul>
                              <li><a href="#">Visit Us</a></li>
                              <li><a href="#">Buy Tickets</a></li>
                          </ul>			
                      </div>
                      <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                        <div class="header-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                      </div>
                  </div>			  					
                </div>
            </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                  <a href="{{route('/')}}"><img src="{{asset('frontend')}}/img/logo.png" alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('packages')}}">Packages</a></li>
                    <li><a href="{{route('hotels')}}">Hotels</a></li>
                    <li><a href="{{route('insurance')}}">Insurence</a></li>
                      <li class="menu-has-children"><a href="">Blog</a>
                        <ul>
                        <li><a href="{{route('blog_home')}}">Blog Home</a></li>
                        <li><a href="{{route('blog_single')}}">Blog Single</a></li>
                        </ul>
                      </li>	
                      {{-- <li class="menu-has-children"><a href="">Pages</a>
                        <ul>
                              <li><a href="elements.html">Elements</a></li>
                              <li class="menu-has-children"><a href="">Level 2 </a>
                                <ul>
                                  <li><a href="#">Item One</a></li>
                                  <li><a href="#">Item Two</a></li>
                                </ul>
                              </li>					                		
                        </ul>
                      </li>					          					          		           --}}
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                  </nav><!-- #nav-menu-container -->					      		  
                </div>
            </div>
        </header><!-- #header -->