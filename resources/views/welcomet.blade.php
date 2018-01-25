<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Question Bank</title>
 
    <!-- Bootstrap -->
    <link href={{ URL::asset('welcome/css/bootstrap.min.css')}} rel="stylesheet">
	<link href={{ URL::asset('welcome/css/responsive-slider.css')}} rel="stylesheet">
	<link rel="stylesheet" href={{ URL::asset('welcome/css/animate.css')}}>
	<link rel="stylesheet" href={{ URL::asset('welcome/css/font-awesome.min.css')}}>
	<link href={{ URL::asset('welcome/css/style.css')}} rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="index.html"><h1>Question Bank</h1></a>
							</div>
						</div> 
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
				<!--	<li role="presentation" class="active"><a href="index.html">Home</a></li> -->
								<li role="presentation"><a href="feature.html">Tags</a></li>
								<li role="presentation"><a href="blog.html">Questions</a></li>
							<li role="presentation"><a href="portfolio.html">Ask Questions</a></li>
								<li role="presentation"><a href="contact.html">Academic Archieve</a>
								</li>

                          @if (Route::has('login'))
							<li role="presentation"><a href="{{ url('/login') }}">Login</a></li>
						<li role="presentation"><a href="{{ url('/register') }}">Register</a></li>
                          @endif

							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	 
	<!-- Responsive slider - START -->

							<li>
								<div class="slide-body" data-group="slide">
									<img src="img/2.jpg" alt="" class="img-responsive" >
								</div>					
							</li>


    <!-- Responsive slider - END -->
 
	
		<div class="content">
			<h2><span>Question Bank</span></h2>
			<p>Where you can check your strength. And find lot of questions about Computer Science to update yourself </p>
		</div>
	<div class="breadcrumb">
		<h4>Our Features</h4>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="boxs">				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<h4>Question List</h4>					
							<div class="icon">
								<i class="fa fa-th-list fa-3x"></i>
							</div>
							<p>
							 List of all questions
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>Ask Question</h4>				
							<div class="icon">
								<i class="fa fa-question fa-3x"></i>
							</div>
							<p>
							 Here you can ask for a new question.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>Academic Archieve</h4>					
							<div class="icon">
								<i class="fa fa-location-arrow fa-3x"></i>
							</div>
							<p>
							 An archieve for questions of previous years in SUST
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="bg">				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<h4>Tags</h4>					
							<div class="icon">
								<i class="fa fa-tags fa-3x"></i>
							</div>
							<p>
							 Where you can find your questions according to tags
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>Users</h4>					
							<div class="icon">
							<!--	<i class="fa fa-laptop fa-3x"></i>  -->
                                <i class="fa fa-user fa-3x"></i>
							</div>
							<p>
							 List of users.
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>FAQ</h4>					
							<div class="icon">
								<i class="fa fa-cloud fa-3x"></i>
							</div>
							<p>
							 Common questions that maybe haunt you
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="breadcrumb">
		<h4>About Us</h4>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="">				
				<div class="col-md-7">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">						
						<img src="https://upload.wikimedia.org/wikipedia/en/c/c1/SUST_1_km_entrance_way.jpg" alt="" class="img-responsive">					
					</div>
				</div>
				<div class="col-md-5">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
					 <p style="margin-top: 50%;text-align: center;">This website is made by some students of CSE,SUST. Under the guidence of Md.Saiful Islam,Assistant Professor,CSE</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<hr>
	
	<!--start footer-->
	
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-network">
							<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="copyright">
							<p>
								Find us!
							</p>
                            <!-- 
                                All links in the footer should remain intact. 
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Resi
                            -->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	<!--end footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src={{URL::asset("welcome/js/jquery-2.1.1.min.js")}}></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src={{ URL::asset('welcome/js/bootstrap.min.js')}}></script>
	<script src={{ URL::asset('welcome/js/responsive-slider.js')}}></script>
	<script src={{ URL::asset('welcome/js/wow.min.js')}}></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>