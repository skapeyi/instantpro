<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="no-js">
  <head>
    <base href="" />
	<!-- Basic Page Needs

     ================================================== -->
	 
	 <meta charset="utf-8">
	 
	 <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	 <link rel="icon" type="image/png" href="images/favicon.png">
	
     <title>InstantPro</title>
    
     <meta name="description" content="">
    
     <meta name="keywords" content="">
    
     <meta name="author" content="">

	 
	 <!-- Mobile Specific Metas
    
     ================================================== -->
    
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    
     <meta name="format-detection" content="telephone=no">

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 
	 
    <!-- CSS
    
     ================================================== -->
	
	
	<!-- website styling -->
	<link rel="stylesheet" href="/css/style.css">
	
	<!-- Revolution slider styling -->
	<link rel="stylesheet" href="/css/settings.css">

	<!-- bootstrap -->
	<link rel="stylesheet" href="/css/bootstrap.css">	
	
	 
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- SCRIPTS
    
     ================================================== -->
	
	<script src="/js/modernizr-2.6.2.min.js"></script>
	
	<!-- jQuery (necessary for JavaScript plugins) 
	============================================= -->
	<script src="/js/jquery.min.js"></script>
	
	<script src="/js/jquery.themepunch.tools.min.js"></script>
    <script src="/js/jquery.themepunch.revolution.min.js"></script>
	
	</head>
    <body>
		
		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">
			
			<!-- Header
			============================================= -->
			<header id="header" class="header">
			
				<!-- Header Top
                    ============================================= -->
					<div class="top-bar clearfix">
						<div class="container">
							<p class="contact-number">CALL US FREE 24/7: +256 704 889888</p>
							<ul class="clearfix">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								@if (Auth::guest())
									<li class="login-btn"><a href="/login"><i class="icon-locklockerstreamline"></i>Login</a></li>
									<li class="login-btn"><a href="/register"><i class="fa fa-pencil"></i>Register</a></li>

              					@else
              						<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout({{ Auth::user()->name }})         </a>

                    				<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      					{{ csrf_field() }}
                    				</form>
                  					</li>             
              					@endif

							</ul>
						</div>
					</div>
					
					
					<!-- Header Inner
                    ============================================= -->
					<div class="header-inner clearrfix container" style="min-height: 130px;">
						
						<a href="/" class="navbar-brand"><img src="/images/logo.png" alt="" title=""></a>
						
						
						
						<ul class="header-banners">
							<li>
								<i class="icon-truck2"></i>
								<p>Free consultation<span>for the first 24hrs.</span></p>
							</li>
							<li>
								<i class="icon-pound"></i>
								<p>Money Back<span>in 5 working days</span></p>
							</li>
							<li>
								<i class="icon-icons116"></i>
								<p>SuperDeals<span>surprise for you</span></p>
							</li>
						</ul>
						
					</div>
					
					<!-- Primary Navigation
                    ============================================= -->
					
					<nav class="navbar navbar-default">
					  <div class="container">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
                                                                                                                
						<div class="collapse navbar-collapse" id="primary-menu">
						  <ul class="nav navbar-nav">
							<li><a href="/">home</a></li>
							<li><a href="/request-a-pro">request a professional</a></li>
							<li><a href="/terms-and-conditions">terms and coditions</a></li>
							<li><a href="/privacy">Privacy</a>
							<li><a href="/contact-us">contact</a></li>
						  </ul>
						  <form class="navbar-form" role="search">
							<div class="form-group">
							  <input type="text" placeholder="Search...">
							</div>
							<button type="submit"><i class="icon-search4"></i></button>
						  </form>
						</div>
					  </div>
					</nav>
					
			</header>
			
			<div class="container">
				@include('flash::message')				
			</div>
			
			@yield('content')			
			
			<div class="height50"></div>			
			
			<!-- Footer
			============================================= -->
			<footer id="footer" class="footer">				
				<!-- Footer Top
				============================================= -->
				<div class="footer-top clearfix">					
					<div class="container">					
						<div class="row">	
							<!-- About Us Widget
							============================================= -->
							<div class="col-md-4">
								<div class="footer-widget">
									<h4>About Instant Pro</h4>
									<p>Instant Pro helps connect you to proffessional to fix your everyday problems why you worry about the things you need to worry about. <br>
									We guarantee a 100% cashback if the services aren't offered upto your satisfaction.</p>
								</div>
							</div>						
							
							<!-- Get in Touch Widget
							============================================= -->
							<div class="col-md-4">
								<div class="footer-widget">
									<h4>Get in Touch</h4>
									<p>It is a long established fact the Instant Pro will connect you with trained professionals.</p>
									
									<!-- Social
									============================================= -->
									<ul class="social">
										<li><a href="#." class="facebook"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
										<li><a href="#." class="google-plus"><i class="icon-google-plus"></i></a></li>
									</ul>
								</div>
							</div>

							<!--  Alerts Widget
							============================================= -->
							<div class="col-md-4">
								<div class="footer-widget">
									<h4>Instant Pro Alerts</h4>
									<p>Register now to get updates on promotions and coupons.</p>
									<div id="response2" style="display:none;"  class='success-msg'></div>
									<form class="news-letter-form clearfix" name="email_form" id="email_form" method="post">
										<input type="text" name="news_email_address" id="news_email_address" placeholder="Email Address" class="validate[required,custom[email]]" data-prompt-position="topLeft:0">
										<input type="submit" value="" class="news-letter-submit">
									</form>
								</div>
							</div>	
						</div>
					</div>
				</div>	
				<div class="footer-cards text-center">	
					<p class="copyright">Copyright © 2015 . All rights reserved.</p>
				</div>
			</footer>			
			
		</div>

	<!-- bootstrap 
	============================================= -->
	<script src="/js/bootstrap.min.js"></script>

	<!-- External plugins
	============================================= -->
	<script src="/js/plugins.js"></script>
	
	<!-- scripts 
	============================================= -->
	<script src="/js/scripts.js"></script>
	<script src="https://use.fontawesome.com/52045bbe38.js"></script>
	@stack('scripts')


	</body>
</html>
	