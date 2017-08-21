


        <div id="page-wrapper" style ="background-color: #e5e6e7">

 <div class="row">
 <h1>Edit Profile</h1>
 <?php echo $this->session->userdata('id_customer')?>
    <hr>

        <div class="col-md-12">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                <h3 class="panel-title">Personal Info</h3>
                    <span class="clickable pull-right"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body" >
                <div>
                    
                      <div class="col-lg-3 text-center">
                      <div class="row">
                        <form action="<?php echo base_url();?>biodata/ajaxpro" method="POST">
                          <label class="control-label">Photo profile</label>
                          <div class="image-output">
                            <img src="" alt="" id="item-img-output" style="width:300px; height:300px; border:0px"/> 
                          </div>
                          <div class="container">
                          <input type="file" name="images" class="item-img" />
                          </div>
                          <button type="submit" class="btn btn-success upload-result">Upload Image</button>
                        </form>
                      </div>  
                      <!-- Modal -->
                      <div id="cropImagePop" class="modal fade" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Image</h4>
                              </div>
                              <div class="modal-body">
                                <div class="col-xs-12 col-sm-0 col-sm-offset-0">
                                  <div style="display: block; ">
                                  <!-- width: 300px; height: 400px; -->
                                    <div id="upload-demo"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                      </div>
                      <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/personal_info" method="post">
                      <?php foreach ($personal as $a){?>
                      <div class="col-lg-9">
                        <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $namad ?></label>
                        <div class="col-lg-8">
                          <input class="form-control"  type="text" name="namadepan" value="<?php echo $a->nama_depan;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $namab ?></label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" name="namabelakang" value="<?php echo $a->nama_belakang; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $tanglah ?></label>
                        <div class="col-lg-8">
                          <input class="form-control" type="date" name="tanggallahir" value="<?php echo $a->tanggal_lahir; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $jenkel ?></label>
                        <div class="ui-select col-lg-8">
                            <select id="jeniskelamin" class="form-control" name="jeniskelamin" >
                              <option value="Male"><?php echo $lk ?></option>
                              <option value="Female"><?php echo $prp ?></option>
                            </select>
                          </div>
                      </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $statpernik ?></label>
                        <div class="ui-select col-lg-8">
                            <select id="statuspernikahan" class="form-control" name="statuspernikahan">
                              <option value="Single"><?php echo $single ?></option>
                              <option value="Married"><?php echo $menikah ?></option>
                              <option value="Divorced"><?php echo $cerai ?></option>
                            </select>
                          </div>
                      </div>
                       <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $alamat ?></label>
                        <div class="col-lg-8">
                        <textarea class="form-control" name="alamat"><?php echo $a->alamat_jalan; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $kodpos ?></label>
                        <div class="col-lg-8">
                          <input class="form-control" type="number" name="kodepos"  value="<?php echo $a->kode_pos; ?>">
                        </div>
                    
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $telepon ?></label>
                        <div class="col-lg-8">
                          <input class="form-control" type="number" name="telepon"  value="<?php echo $a->telepon; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $email ?></label>
                        <div class="col-lg-8">
                          <input class="form-control"  type="text" name="email" value="<?php echo $a->email; ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-lg-3 control-label"><?php echo $kewarg ?></label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" name="kewarganegaraan" value="<?php echo $a->nationality; ?>">
                        </div>
                      </div>
                       
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                          <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">
                          <span></span>
                          <input class="btn btn-default" value="<?php echo $batal ?>" type="reset">
                        </div>
                      </div>
                      </form>
                </div>
            </div>
        </div>
        </div>

         <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Education history</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                      <?php foreach ($education as $b) { ?>
<div class="panel-primary panel2" id="education_fields">                      <div class="panel-heading2" style= "background-color: #007eb5; color:white; padding: 10px;">                      <h3 class="panel-title">&nbsp</h3><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>                      </div><div class="panel-body2">                             <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/education" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 
<input class="form-control" value="<?php echo $b->number?>" type="text">
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $tingpend ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $b->tingkat_pendidikan?>" type="text">                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $namskol ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $b->nama_pendidikan?>" type="text">                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label">Status:</label>                          <div class="ui-select col-lg-8">                              <select id="status_pendidikan" class="form-control">                                <option value="Graduated"><?php echo $lulus ?></option>                                <option value="Deffered"><?php echo $ditunda ?></option>                                <option value="Transferred"><?php echo $ditransfer ?></option>                              </select>                            </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $tanglul ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $b->completion_date?>" type="date" >                          </div>                                              </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $lokasi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control" value="" type="text"><?php echo $b->location?></textarea>                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control" value="" type="text"><?php echo $b->description?></textarea>                          </div>                        </div>                           <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span>                            <button class="btn btn-danger" type="button"  ><?php echo $hapus ?></button><a class="btn btn-danger btn-effect" data-toggle="modal" data-target="#myModal">hapus2</a>  </div>                        </div>                        </form>                                              </div>                      </div>
                        <?php } ?>
                     <div class="panel-primary panel2" id="education_fields">
                     </div>
                     <div class="input-group-btn">
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#product_view">
                        <!-- onclick="education_fields();" -->
                         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true" style="margin-top: 100px">
                    
                              </div> -->

                      </div>
            </div>
            </div>
        
        </div>

        <!--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true" style="margin-top: 100px">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="" style="background-color: #009EE3; height:10px;">
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
                                                <div class="btn-group btn-group-justified">
                                                    <a href = "<?php echo base_url(); ?>hauth/login/Facebook" class="btn btn-primary">Facebook</a> 
                                                    <a href = "<?php echo base_url(); ?>hauth/login/Google" class="btn btn-danger">Google</a>
                                                    <a href = "<?php echo base_url(); ?>hauth/login/Twitter" class="btn btn-danger">Twitter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                              </div> -->

         <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title"><?php echo $riwpek ?></h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">

                     <div class="panel-primary panel2" id="employment_fields">
                     </div>
                     <div class="input-group-btn">
                        <button class="btn btn-success" type="button"  onclick="employment_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                      </div>
            </div>
        </div>
        </div>

        <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Hobbies and Interest</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-lg-3 control-label"></label>
                    <div class="col-lg-8">
                      <input class="form-control" value="" type="text">
                    </div>
                  </div>
        </form>
                </div>
            </div>
        </div>

        <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Skills</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">

                     <div class="panel-primary panel2" id="skill_fields">
                     </div>
                     <div class="input-group-btn">
                        <button class="btn btn-success" type="button"  onclick="skill_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                      </div>
            </div>
        </div>
        </div>
        <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Languages</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">

                     <div class="panel-primary panel2" id="language_fields">
                     </div>
                     <div class="input-group-btn">
                        <button class="btn btn-success" type="button"  onclick="language_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                      </div>
            </div>
        </div>
        </div>
        <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Awards</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">

                     <div class="panel-primary panel2" id="award_fields">
                     </div>
                     <div class="input-group-btn">
                        <button class="btn btn-success" type="button"  onclick="award_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                      </div>
            </div>
        </div>
        </div>
        <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">References</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">

                     <div class="panel-primary panel2" id="reference_fields">
                     </div>
                     <div class="input-group-btn">
                        <button class="btn btn-success" type="button"  onclick="reference_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                      </div>
            </div>
        </div>
        </div>
        <div class="">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">Personal Info</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label"><?php echo $namad ?></label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label"><?php echo $namab ?></label>
            <div class="col-lg-8">
              <input class="form-control" value="Bishop" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value="janesemail@gmail.com" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" value="janeuser" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" value="11111122333" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" value="11111122333" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="<?php echo $simpan ?>" type="button">
              <span></span>
              <input class="btn btn-default" value="<?php echo $batal ?>" type="reset">
            </div>
          </div>
        </form>

                </div>
            </div>
        </div>
       
    </div>

<hr>

        </div>
        <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
        $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    }
})
    </script>
    <script>
      $('.upload-result').on('click', function (ev) {
          $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
          }).then(function (resp) {
            $.ajax({
              type: 'POST',
              name: "image",
              url: "<?php echo base_url()?>/biodata/ajaxpro",
              data: {"image":resp},
              success: function (data) {
                console.log("sukses");
                console.log(resp);
                console.log(data);
                html = '<img src="' + resp + '" />';
                $("#item-img-output").html(html);
              },
              error: function(data){
                console.log("error");
                console.log(data);
              }
            });
          });
});

    </script>

   <!--  <script type="text/javascript">
        $(document).on('click', '.panel-heading2 span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel2').find('.panel-body2').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    } else {
        $this.parents('.panel2').find('.panel-body2').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    }
})
    </script> -->

   
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<!-- Twitter Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>     

        <!-- croppie   -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='http://foliotek.github.io/Croppie/croppie.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

    <script src="<?php echo base_url(); ?>assets/js/croppie2.js"></script>

                      <script>
                    $('select#jeniskelamin>option[value="<?php echo $a->jenis_kelamin; ?>"]').prop("selected", true);
                    $('select#statuspernikahan>option[value="<?php echo $a->status_pernikahan; ?>"]').prop("selected", true);
                    $('select#status_pendidikan>option[value="<?php echo $b->status; ?>"]').prop("selected", true);
                    </script>

                    <script>
                    $(document).ready(function() {
    $('input, textarea').on('keyup', function() {
        if (this.value[0] != this.value[0].toUpperCase()) {
            // store current positions in variables
            var start = this.selectionStart;
            var end = this.selectionEnd; 
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
            // restore from variables...
            this.setSelectionRange(start, end);
        }
    });
});
                    // http://jsfiddle.net/9zPTA/2/
</script>

                    <?php } ?>
                  
<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">HTML5 is a markup language</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Product Id: <span>51526</span></h4>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">Color</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                    <option value="gold">Gold</option>
                                    <option value="rose gold">Rose Gold</option>
                                </select>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="">Capacity</option>
                                    <option value="">16GB</option>
                                    <option value="">32GB</option>p
                                    <option value="">64GB</option>
                                    <option value="">128GB</option>
                                </select>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">QTY</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add To Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    




</body>



