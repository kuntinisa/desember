<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Portfolio Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/4/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/4/assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/4/assets/plugins/github-calendar/dist/github-calendar.css"
/>
    <!-- github acitivity css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/4/assets/plugins/github-activity/src/github-activity.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url(); ?>assets/template/4/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <!-- Begin Wrapper -->

  
    <header class="header">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left" src="<?php echo base_url(); ?>assets/template/2/images/avt.png" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name"><?php 
         foreach ($personal as $a) {
           echo $a->nama_depan." ".$a->nama_belakang; } ?></h1>
                <h2 class="desc">Web App Developer</h2>   
                <ul class="social list-inline">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-github-alt"></i></a></li>                  
                    <li class="last-item"><a href="#"><i class="fa fa-hacker-news"></i></a></li>                 
                </ul> 
                <form action="<?php echo base_url();?>pdf/<?php echo $username ?>" method="get" target="_blank">
  <input type="submit" value="Download PDF">
</form>
            </div><!--//profile-->
                        
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
        <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                    <h2 class="heading">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                             <?php  foreach ($personal as $a) { ?>
                             <li><i class="fa fa-envelope-o"></i><span class="sr-only">Date of birth:</span><?php echo $a->tanggal_lahir ?></li>
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Address:</span><?php echo $a->alamat_jalan." - ".$a->kode_pos ?></li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Telephone:</span><?php echo $a->telepon ?></li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><?php echo $a->email ?></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.website.com</a></li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Nationality:</span><?php echo $a->nationality ?></li>
                                <?php } ?>
                            </ul>
                        </div><!--//content-->  

                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <div class="skillset">
                               <?php foreach ($skills as $e) { ?>
                                <div class="item">
                                    <h3 class="level-title"><?php echo $e->skill_name; ?><span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="The categories of skills level are : beginner, intermediate, advanced and expert"><h5><?php echo $e->level; ?></h5></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level=
                                        <?php 
                                        if ($e->level == 'beginner'){
                                            echo '25%';
                                        }
                                        else if ($e->level == 'intermediate'){
                                            echo '50%';
                                        }
                                        else if ($e->level == 'advanced'){
                                            echo '50%';
                                        }
                                        else if ($e->level == 'expert'){
                                            echo '50%';
                                        }
                                        else {
                                            echo '0%';
                                        }
                                        ?>
                                        >
                                        </div>
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                <?php } ?>
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                  <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <div class="skillset">
                               <?php foreach ($languages as $f) { ?>
                                <div class="item">
                                    <h3 class="level-title"><?php echo $f->language_name; ?><span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="The categories of skills level are : beginner, conversational, fluent and native"><h5><?php echo $f->level; ?></h5></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level=
                                        <?php 
                                        if ($f->level == 'beginner'){
                                            echo '25%';
                                        }
                                        else if ($f->level == 'conversational'){
                                            echo '50%';
                                        }
                                        else if ($f->level == 'fluent'){
                                            echo '50%';
                                        }
                                        else if ($f->level == 'native'){
                                            echo '50%';
                                        }
                                        else {
                                            echo '0%';
                                        }
                                        ?>
                                        >
                                        </div>
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                <?php } ?>
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">Hobbies and Interests</h2>
                        <div class="content">
                            <p><?php foreach ($hobbies_interest as $d) {echo $d->hobbies_interest;} ?></p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
               
            </div><!--//secondary-->    
            <div class="primary col-md-8 col-sm-12 col-xs-12">
             <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Education History</h2>
                        <div class="content">
                        <?php foreach ($education as $b) { ?>
                            <div class="item">
                            <h3 class="title"><i class="fa fa-graduation-cap"></i><?php echo $b->nama_pendidikan?> - <span class="place"><a href="#"></a></span> <span class="year"><?php echo $b->completion_date?></span></h3>
                            <h4><?php echo $b->tingkat_pendidikan?></h4>
                            <?php echo $b->location?>
                            <p> Status : <?php echo $b->status_pendidikan; ?></p>
                                <p><?php echo $b->description?></p>
                            </div><!--//item-->
                            <?php } ?>                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
             <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                        <?php foreach ($employment as $c) { ?>
                            <div class="item">
                                <h3 class="title"><?php echo $c->job_title; ?> - <span class="place"><a href="#"><?php echo $c->company; ?></a></span> <span class="year"><?php echo $c->start_date." - ".$c->end_date?></span></h3>
                                <?php echo $c->location; ?><br />
                                <?php echo $c->presently_employed; ?><br />
                                <?php echo $c->compensasion; ?><br />
                                <?php echo $c->mata_uang; ?><br />
                                <?php echo $c->interval_waktu; ?><br />
                                <p><?php echo $c->description; ?></p>
                            </div><!--//item-->
                            <?php } ?>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
            
                 <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Awards</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                            <?php foreach ($awards as $g) { ?>
                                <li class="item">
                                    <i class="fa fa-star"></i><span class="title"><strong> <?php echo " ".$g->award_name." - "; ?><?php echo $g->year; ?></strong></span></br>
                                    <p><?php echo $g->description; ?></p>
                                </li><!--//item-->
                                <?php } ?>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">References</h2>
                        <div class="content">
                        <?php foreach ($references as $h) { ?>
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i><?php echo $h->description; ?></p>
                                </blockquote>                
                                <p class="source"><span class="name"><?php echo $h->reference_name; ?></span><span class="title"><?php echo "(".$h->relationship.")"; ?><?php echo " - ".$h->company; ?></span><?php echo $h->phone; ?><?php echo $h->email; ?><?php echo $h->address; ?></p>                                                             
                            </div><!--//item-->
                            <?php } ?>
                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                
            </div><!--//primary-->

        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">EProfile 2017</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/4/assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/4/assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/4/assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/4/assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/4/assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/template/4/assets/js/main.js"></script>            
</body>
</html> 

