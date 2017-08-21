
	
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
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
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
						<a href="#body" style="color: white">MY PROFILE</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Log In</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row" style="margin:80px">
						
							<div class="text-center white wow animated fadeInDown">
								<h2>LOG IN</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								
								<div class="testimonial-item text-center">
									<form  method="post" action="<?php echo base_url('index.php/main/auth')?>" enctype="multipart/form-data">
										<fieldset><h4>
								             <div class="col-md-12">
								        			<div class="col-md-12">
								                        Username 
								                         <input type="text" placeholder="Username" name="username" required style="color:black;"><br>
								        			<br>
								                    </div>
								                    <div class="col-md-12">
								                    Password 
								                    <input type="Password" placeholder="Password" name="Password" required style="color:black;"> <br><br>
								        			</div>
								                    
								            <input type="submit" value="Login" style="color:black; font-size:20px;">
								            <br>
								            </div></h4>
										</fieldset>
									</form>
									
								</div>
								
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			
		</main>
		
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
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
    </body>
    <footer id="footer" style="height: 80px">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<p>Copyright &copy; 2016 Design and Developed By <a href="http://www.kuntikhoirunnisaa.xyz">Kunti Khoirunnisaa</a> </p>
					</div>
				</div>
			</div>
		</footer>
</html>