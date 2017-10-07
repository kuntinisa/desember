<style>

</style>
    <body id="body">
    

    	<!-- preloader -->
		<div id="preloader" style="background-color: #009EE3">
            <div class="loder-box">
            	<!-- <div class="battery"></div> -->
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header" >
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="">
						<a href="#body" style="color: white">Eprofile</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body"><?php echo $home ?></a></li>
                        <li><a href="#service"><?php echo $about ?></a></li>
                        <li><a href="#testimonials"><?php echo $testimonial ?></a></li>
                        <li><a href="privacypolicy" onclick="window.open('<?php echo base_url();?>privacypolicy')"><?php echo $privacy ?></a></li>
                        <li><a href="tos" onclick="window.open('<?php echo base_url();?>tos')">Terms of Service</a></li>
                        <li><a href=""><?php echo $help ?></a></li>
                        <li>
                 <form action="<?php echo base_url(); ?>" name="ganti" id="ganti" method="post" style="margin:10px">
                 <select name="bahasa" onchange="this.form.submit()">
                 <option value="english">Choose language</option>
                 <option value="english">English</option>
                 <option value="indonesia">Indonesia</option>
                 </select>
                 </form>  
						</li>
                     </ul>

                </nav>
                <div>
                	<div class="bfh-selectbox bfh-languages" data-language="en_US" data-available="en_US,fr_CA,es_MX" data-flags="true">
</div>
                </div>
                <div class="col-md-2">

                </div>

				<!-- /main nav -->
				
            </div>

        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
    	<div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

							<div class="slide-caption">
	                            <div class="caption-content" style="margin:40px">
	                                <h2 class="animated fadeInDown" style="background-color: #009EE3"><?php echo $h1 ?></h2>
	                                <h3 class="animated fadeInDown" style="color:#FFF"><?php echo $mt ?></h3>
	                                 <!-- <a class="btn btn-blue btn-effect" data-toggle="modal" data-target="#myModal"><?php echo $ju ?></a> -->
<div class="col-md-12">                      
<button class="g-signin"  
data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
data-requestvisibleactions="http://schemas.google.com/AddActivity"
data-clientId="987353039696-hvh8bdpv2rnqtm1qj7m8u04ts3n5bu2m.apps.googleusercontent.com"
data-accesstype="offline"
data-callback="mycoddeSignIn"
data-theme="dark"
data-cookiepolicy="single_host_origin">
</button>
</div>
<div class="col-md-12"> 
<a href = "" class="btn btn-primary"><fb:login-button scope="public_profile,email,user_friends" onlogin="checkLoginState();">
</fb:login-button></a> 

<!-- <a href = "<?php echo base_url(); ?>hauth/login/Twitter" class="btn btn-danger">Twitter</a> -->
</div>
								     <div class="myModalfade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
								    aria-hidden="true" style="margin-top: 100px">
								    <div class="modal-dialog modal-lg">
								        <!-- <div class="modal-content"> -->
								         <!--    <div class="" style="background-color: #009EE3; height:10px;">
								            </div>
								            <div class="modal-body">
								                <div class="row">
								                    <div class="col-md-12">
								                        <div class="row text-center sign-with">
								                            <div class="col-md-12">
								                                <h3>
								                                    Sign in with</h3>
								                            </div>
								                            <div class="col-md-12">
								                                <div class="btn-group btn-group-justified"> -->
								                                    <!-- <a href = "<?php echo base_url(); ?>hauth/login/Facebook" class="btn btn-primary">Facebook</a>  -->
								                                    <!-- <fb:login-button scope="public_profile,email,user_friends" onlogin="checkLoginState();"> -->
<!-- </fb:login-button>
<div id="status">
</div> -->
								                                    <!-- <a href = "" class="btn btn-primary"><fb:login-button scope="public_profile,email,user_friends" onlogin="checkLoginState();">
</fb:login-button></a>  -->
<!-- 

<div id="status">
</div> -->

								                                    

	<script type="text/javascript">
	var gpclass = (function(){
	
	//Defining Class Variables here
	var response = undefined;
	return {
		//Class functions / Objects
		
		mycoddeSignIn:function(response){
			// The user is signed in
			if (response['access_token']) {
			
				//Get User Info from Google Plus API
				gapi.client.load('plus','v1',this.getUserInformation);
				console.log('trying get info google');
			} else if (response['error']) {
				// There was an error, which means the user is not signed in.
				alert('There was an error: ' + authResult['error']);
			}
		},
		
		getUserInformation: function(){
			var request = gapi.client.plus.people.get( {'userId' : 'me'} );
			request.execute( function(profile) {
				var email = profile['emails'].filter(function(v) {
					return v.type === 'account'; // Filter out the primary email
				})[0].value;
				var fName = profile.displayName;
				 // $.ajax({
			  //       type: "POST",
			  //       url: <?php echo base_url().'Main/login'; ?>
			  //       data: {"fName": fName},  
			  //       success: function (data) {
			  //       }
			  //   });
			  console.log('Successful google login for: ' + fName);
			  // $('#anchortag').prop('href', "<?php echo base_url(); ?>main/login"+1);
				// $("#inputFullname").val(fName);
				// $("#inputEmail").val(email);
				window.open("<?php echo base_url() ?>main/login/"+"google"+email+"/"+email); 
				// window.open("<?php echo base_url() ?>main/login?var1="google"+email;?>&var2=email"); 

			});
		}
	
	}; //End of Return
	})();
	
	function mycoddeSignIn(gpSignInResponse){
		gpclass.mycoddeSignIn(gpSignInResponse);
	}
	</script>
								                                    <!-- <a href = "<?php echo base_url(); ?>hauth/login/Google" class="btn btn-danger">Google</a> -->
								                                    <div>
								                                    <!-- <a href = "<?php echo base_url(); ?>hauth/login/Twitter" class="btn btn-danger">Twitter</a> -->
								                                    </div>
								                            </div>
								                        </div>
								                    </div>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>

	                            </div>
	                        </div>
						
					</div>
				

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <!-- <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav> -->
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- portfolio section -->
			 <section id="portfolio">
				<div class="container">
					<div class="row">
					
						<!-- <div class="sec-title text-center wow animated fadeInDown">
							<h2>FEATURED PROJECTS</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div> -->
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="">
								<img src="<?php echo base_url(); ?>assets/img/easytoused.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
								
							</li>
							
							<!-- <li class="portfolio-item">
								<img src="<?php echo base_url(); ?>assets/img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street" href="<?php echo base_url(); ?>assets/particle/img/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="<?php echo base_url(); ?>assets/img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="<?php echo base_url(); ?>assets/img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li> -->
							
							<li class="">
								<img src="<?php echo base_url(); ?>assets/img/muchtemplate.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
								<!-- <figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption> -->
								<!-- <ul class="external">
									<li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="img/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul> -->
							</li>
							
							<!-- <li class="portfolio-item">
								<img src="<?php echo base_url(); ?>assets/img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="<?php echo base_url(); ?>assets/img/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="<?php echo base_url(); ?>assets/img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">
									<h3>Wall street</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="<?php echo base_url(); ?>assets/img/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li> -->
						</ul>
						
					</div>
				</div>
			</section> 
			<!-- end portfolio section -->
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft"><?php echo $about ?></h2>
							<p class="wow animated bounceInRight"><?php echo $a1 ?></p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>Support</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								<h3>Well Documented</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>Fast Service</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								
								<h3>Web Security</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			
			
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>What people say</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="<?php echo base_url(); ?>assets/img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>JUROIJATU MAJURITA UNTSA</span>
										<p>Website ini benar-benar bermanfaat untuk saya. Saya dapat membuat CV yang cantik dengan mudah dan membagikan teman saya untuk keperluan seperti berkenalan bahkan untuk melamar pekerjaan</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="<?php echo base_url(); ?>assets/img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="<?php echo base_url(); ?>assets/img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			<!-- Price section -->
			<!-- <section id="price">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Price</h2>
							<p>Our price for your company</p>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Silver</span>
								<div class="value">
									<span>$</span>
									<span>24,35</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
							<div class="price-table featured text-center">
								<span>Gold</span>
								<div class="value">
									<span>$</span>
									<span>50,00</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
							<div class="price-table text-center">
								<span>Diamond</span>
								<div class="value">
									<span>$</span>
									<span>123,12</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
		
					</div>
				</div>
			</section> -->
			<!-- end Price section -->
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW US</h2>
								<p>Beautifully simple follow buttons to help you get followers on</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>							
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			<!-- about section 
			<section id="privacy" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>Recent Works</h3>
								<div id="works">
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
									<div class="work-item">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Welcome To Our Site</h3>								
						     	 <div class="message-body">
									<img src="<?php echo base_url(); ?>assets/img/member-4.jpg" class="pull-left" alt="member">
						       		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						     	 </div>
						       	<a href="#" class="btn btn-border btn-effect pull-right">Read More</a>
						    </div>
						</div>
					</div>
				</div>
			</section>
			end about section -->
			
			<!-- 
			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>
		 -->
		</main>
		
		
		<!-- Essential jQuery Plugins
		<script src="<?php echo base_url(); ?>assets/BootstrapFormHelpers/js/bootstrap-formhelpers-languages.js"></script>
		<script src="<?php echo base_url(); ?>assets/BootstrapFormHelpers/js/bootstrap-formhelpers-countries.flags.css"></script>
		================================================== -->
		<!-- Main jQuery -->
		<script>
			$('#myModal').modal('show');
		</script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
		<!-- Owl Carousel -->
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1727062460957299',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', {fields: 'name, email'}, function(response) {
      console.log('Successful login for: ' + response.email);
      var email = response.email;
      // document.getElementById('status').innerHTML =
      //   'Thanks for logging in, '+ response.name +'!';
      window.open("<?php echo base_url() ?>main/login/"+"facebook"+email+"/"+email); 
      // window.open("<?php echo base_url() ?>main/login/"+"google"+email); 
    });
  }
</script>

<!-- 
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
 -->


    </body>
</html>