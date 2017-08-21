   <script>
    $(document).ready(function(){
       $('#submit').click(function(){
          $.ajax({
                url: '<www.1.com',
                data: {finish_product: $('#finish_product').val()},
                success: function (result) {
                    alert(result)
                }
            });
       });
    });
    </script>
     <script type="text/javascript">
            function ajaxSearch()
            {
                var input_data = $('#search_data').val();

                if (input_data.length === 0)
                {
                    $('#suggestions').hide();
                }
                else
                {

                    var post_data = {
                        'search_data': input_data,
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    };

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>personalize/autocomplete/",
                        data: post_data,
                        success: function (data) {
                            // return success
                            if (data.length =1) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                $('#autoSuggestionsList').html(data);
                            }
                            else {
                                $('#search_data').hide();
                            }
                        }
                    });

                }
            }
        </script><body id="body">
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
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header text-center" >
            <div class="container">
               
					
					<!-- logo -->
					<h1 class="">
						<a href="#body" style="color: white">MY PROFILE</a>
					</h1>
					<!-- /logo -->
                

			
                <div>
                	
                </div>
                <div class="col-md-2">

                </div>

            </div>

        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">	
			<section id="" class="parallax" >
				<div class="overlay">
					<div class="container" style="margin-top: 5%; min-height: 100%">
						<div class="col-md-10" >
							<div class="wow animated fadeInDown" >
							<h2 >WELCOME, CUSTOMER_NAME</h2>
								<ol class="list-group vertical-steps">
								  <li class="list-group-item completed" ><span>Create your account - Done</span></li>
								  <li class="list-group-item active">
								  	<span>Create your vanity's URL</span>
                                    <h5>Adalah username yang akan digunakan untuk profil CV anda, misal username "bintang", maka profilnya dapak di akses pada www.myprofile.vip/bintang</h5>
                                  
                                        
                                            <div class="form-group input-group something col-lg-12">
                                            <label class="input-group-addon">@</label>
                                            <form method="post" action="<?php echo base_url('index.php/personalize/inputForm')?>">
                                            <form>
                                            <input class="form-control" size="30" placeholder="Username" name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();">

                                            </form>

                                            </div>
                                            <div class="col-lg-12" id="suggestions">
                                                <div id="autoSuggestionsList">
                                                </div>
                                            </div>
                                       
                                           
                                 
                                     <!-- <button type="button" class="btn btn-primary btn-lg btn-block"></button> -->
								  </li>
								 <!-- 
								  <li class="list-group-item"><span>Start using My Profile</span>
								  <button type="button"  class="btn btn-primary btn-lg btn-block"><a href="<?php echo base_url(); ?>dashboard">Go to Dashboard</a></button></li>
                                  </li> -->
								</ol>  
							</div>
						</div>
						<div class="col-md-2" >
							<div class="wow animated fadeInDown" >
							<h3>IKLAN, Using My Profile saving your time more effective and efficient.</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<!-- SCRIPT CEK USERNAME -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Essential jQuery Plugins
		<script src="<?php echo base_url(); ?>assets/BootstrapFormHelpers/js/bootstrap-formhelpers-languages.js"></script>
		<script src="<?php echo base_url(); ?>assets/BootstrapFormHelpers/js/bootstrap-formhelpers-countries.flags.css"></script>
		================================================== -->
		<!-- Main jQuery -->
        <!-- <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script> -->
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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

        <!-- start (JS code) -->
       
      
		   
    </body>
</html>




