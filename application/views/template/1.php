<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/template/2/css/bootstrap.css" rel='stylesheet' type='text/css' />
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/1/css/blue.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/1/css/print.css" media="print"">
<!-- <style>
.body {
    float: left;
    margin: 5px;
    padding: 15px;
    max-width: 300px;
    height: 300px;
    border: 1px solid black;
} 
</style> -->

<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/1/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/1/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/1/js/cufon.yui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/1/js/scrollTo.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/1/js/myriad.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/1/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/1/js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div class="col-sm-12">
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry container">
         <div class="col-md-4">
         <h1>PHOTO PROFILE</h1>
         </div>
         <div class="col-md-8 container">
         <h1>
         <?php 
         foreach ($personal as $a) {
           echo $a->nama_depan." ".$a->nama_belakang."</br>"; 
           ?></h1> <p><?php
           echo $a->tanggal_lahir."</br>";
           echo $a->alamat_jalan."</br>";
           echo $a->kode_pos."</br>";
           echo $a->telepon."</br>";
           echo $a->email."</br>";
           echo $a->nationality."</br>";
         }
         ?>
         </p>
         </div>
        </div>

        <!-- Begin 1st Row -->
       
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        
        <div class="entry">
          <h2>EDUCATION</h2>
          <?php foreach ($education as $b) { ?>
          <div class="content">
           <h3><?php echo $b->completion_date?></h3>
            <p><?php echo $b->tingkat_pendidikan?><br />
            <?php echo $b->nama_pendidikan?><br />
            <?php echo $b->location?><br />
            <?php echo $b->status_pendidikan; ?><br />
              <em><?php echo $b->description?></em></p>
          </div>
             <?php } ?>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>EXPERIENCE</h2>
          <?php foreach ($employment as $c) { ?>
          <div class="content">
            <h3><?php echo $c->start_date." - ".$c->end_date?></h3>
            <p><?php echo $c->job_title; ?> <br />
            <?php echo $c->company; ?><br />
             <?php echo $c->location; ?><br />
            <?php echo $c->presently_employed; ?><br />
            <?php echo $c->compensasion; ?><br />
            <?php echo $c->mata_uang; ?><br />
            <?php echo $c->interval_waktu; ?><br />
              <em><?php echo $c->description; ?></em></p>
          </div>
          <?php } ?>

        <!-- End 3rd Row -->
         <div class="entry">
          <h2>HOBBIES AND INTEREST</h2>
          <p><?php foreach ($hobbies_interest as $d) {echo $d->hobbies_interest;} ?></p>
        </div>
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
           <?php foreach ($skills as $e) { ?>
          <div class="content">
            <h3><?php echo $e->level; ?> </h3>
            <p><?php echo $e->skill_name; ?> <br />
          </div>
          <?php } ?>
        </div>
        <!-- End 4th Row -->
        <div class="entry">
          <h2>LANGUAGE</h2>
          <?php foreach ($languages as $f) { ?>
          <div class="content">
            <h3><?php echo $f->level; ?> </h3>
            <p><?php echo $f->language_name; ?> <br />
          </div>
          <?php } ?>
        </div>
        <div class="entry">
          <h2>AWARDS</h2>
          <?php foreach ($awards as $g) { ?>
          <div class="content">
            <h3><?php echo $g->year; ?></h3>
            <p><?php echo $g->award_name; ?><br />
              <em><?php echo $g->description; ?></em></p>
          </div>
          <?php } ?>
        </div>
        <div class="entry">
          <h2>REFERENCES</h2>
           <?php foreach ($references as $h) { ?>
          <div class="content">
            <h3><?php echo $h->company; ?></h3>
            <p><?php echo $h->reference_name; ?> <br />
            <?php echo $h->phone; ?><br />
            <?php echo $h->email; ?><br />
            <?php echo $h->address; ?><br />
            <?php echo $h->relationship; ?><br />
              <em><?php echo $h->description; ?></em></p>
          </div>
          <?php } ?>
        </div>
         <!-- Begin 5th Row -->
        <!-- <div class="entry">
        <h2>WORKS</h2>
        	<ul class="works">
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo base_url(); ?>assets/template/1/images/image.jpg" alt="" /></a></li>
        	</ul>
        </div> -->
        <!-- Begin 5th Row -->
      </div>
      </div>

      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</div>
</body>
</html>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/html2canvas.js"></script>
    <script type="text/javascript">
        html2canvas(document.body).then(function(canvas) {
            document.body.appendChild(canvas);
        });
    </script>
