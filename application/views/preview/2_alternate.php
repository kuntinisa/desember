<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="<?php echo base_url(); ?>assets/template/2/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
 <link href="<?php echo base_url(); ?>assets/template/2/css/dashboard.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/template/2/css/style.css" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<!-- start menu -->
  
</head>
<body style="background-color: white">
<!-- header -->
<div class="col-sm-6 col-md-5 sidebar">
		 <div class="sidebar_top">
		 <h1><?php 
         foreach ($personal as $a) {
           echo $a->nama_depan." ".$a->nama_belakang; ?></h1> 
		 <div class="col-sm-6">
		 	<img src="<?php echo base_url(); ?>assets/template/2/images/avt.png" alt="" style="height: 200px; width:200px"/>
		 </div>
		 <div class=" details col-sm-6">
		 

			 <h3>DATE OF BIRTH</h3>
			 <p><?php echo $a->tanggal_lahir ?></p>  	
			 <h3>PHONE</h3>
			 <p><?php echo $a->telepon ?></p>  	 
			 <h3>EMAIL</h3>
			 <p><?php echo $a->email ?></p>
			 <address>
			 
		
		 </div>
			 
			 <h3>ADDRESS</h3>
			 <span><?php echo $a->alamat_jalan ?></span>
			 <span>Kodepos : <?php echo $a->kode_pos ?></span>
			 </address>
			 <h3>NATIONALITY</h3>
			 <p><?php echo $a->nationality ?></p>
			 <?php } ?>
		 </div>
		
		<div class="clearfix"></div>
</div>
<!---->
<link href="<?php echo base_url(); ?>assets/template/2/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		
<div class="col-sm-6 col-sm-offset-4 col-md-7 col-md-offset-5 main">
	 <div class="content">
		 <div class="details_header">
			<!--  <ul>
				 <li><a href="<?php echo base_url(); ?>assets/template/2/index.html"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Resume</a></li>
				 <li><a href="<?php echo base_url(); ?>assets/template/2/#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Print CV</a></li>
				 <li><a href="<?php echo base_url(); ?>assets/template/2/contact.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email me</a></li>
				 <li><a class="play-icon popup-with-zoom-anim" href="<?php echo base_url(); ?>assets/template/2/#small-dialog"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>View photo</a></li>
				 <div id="small-dialog" class="mfp-hide">
					 <img src="images/g4.jpg" alt=""/>
				 </div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
			 </ul> -->
			 action of this CV
		 </div>
		 <div class="company">
			 <h3 class="clr1">EDUCATION</h3>
			 <?php foreach ($education as $b) { ?>
			 <div class="company_details">
				 <h4><?php echo $b->nama_pendidikan?><span><?php echo $b->completion_date?></span></h4>
				 <h6><?php echo $b->tingkat_pendidikan?></h6>
				 <p><?php echo $b->location?></p>
				 <p><?php echo $b->status_pendidikan; ?></p>
				 <p><?php echo $b->description?></p>
			 </div>
			 <?php } ?>
		 </div>
		  <div class="company">
			 <h3 class="clr1">EXPERIENCE</h3>
			 <?php foreach ($employment as $c) { ?>
			 <div class="company_details">
				 <h4><?php echo $c->company; ?><span><?php echo $c->start_date." - ".$c->end_date?></span></h4>
				 <h6><?php echo $c->job_title; ?></h6>
				 <p><?php echo $c->location; ?></p>
				 <p><?php echo $c->presently_employed; ?></p>
				 <p><?php echo $c->compensasion; ?></p>
            	 <p><?php echo $c->mata_uang; ?></p>
            	 <p><?php echo $c->interval_waktu; ?></p>
				 <p><?php echo $c->description; ?></p>
			 </div>
			 <?php } ?>
		 </div>
		 <div class="education">
			 <h3 class="clr2">HOBBIES AND INTEREST</h3>
			 <div class="company_details">
			 <h6><?php foreach ($hobbies_interest as $d) {echo $d->hobbies_interest;} ?></h6>
			 </div>
		 </div>
		 <div class="skills">
		 <h3 class="clr2">SKILLS</h3>
			<?php foreach ($skills as $e) { ?>
			 <div class="company_details">
				 <h4><?php echo $e->skill_name; ?></h4>
				 <h6><?php echo $e->level; ?></h6>
				 <p>asdfghjk</p>
			 </div>
			 <?php } ?>
		 </div>
		 <div class="skills">
		 <h3 class="clr2">LANGUAGES</h3>
			<?php foreach ($languages as $f) { ?>
			 <div class="company_details">
				 <h4><?php echo $f->language_name; ?></h4>
				 <h6><?php echo $f->level; ?></h6>
				 <p>asdfghjk</p>
			 </div>
			 <?php } ?>
		 </div>
		 <div class="skills">
		 <h3 class="clr2">AWARDS</h3>
			<?php foreach ($awards as $g) { ?>
			 <div class="company_details">
				 <h4><?php echo $g->award_name; ?></h4>
				 <h6><?php echo $g->year; ?></h6>
				 <p><?php echo $g->description; ?></p>
			 </div>
			 <?php } ?>
		 </div>
		 <div class="education">
			 <h3 class="clr3">REFERENCES</h3>
			 <?php foreach ($references as $h) { ?>
			 <div class="education_details">
				 <h4><?php echo $h->company; ?><span><?php echo $h->reference_name; ?></span></h4>
				 <h6><?php echo $h->relationship; ?></h6>
				 <h6><?php echo $h->phone; ?></h6>
				 <h6><?php echo $h->email; ?></h6>
				 <h6><?php echo $h->address; ?></h6>
				 <p class="cmpny1"><?php echo $h->description; ?></p>
			 </div>
			  <?php } ?>
		 </div>
		 <div class="copywrite">
			 <p>© 2017 Eprofile VIP All Rights Reseverd | Design by <a href="<?php echo base_url(); ?>assets/template/2/http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		 </div>
	 </div>
</div>
<!---->
</body>
</html>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/html2canvas.js"></script>
    <script type="text/javascript">
        html2canvas(document.body).then(function(canvas) {
            document.body.appendChild(canvas);
        });
    </script>