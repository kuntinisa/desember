<div id="page-wrapper" style ="background-color: #e5e6e7">

 <div class="row">
 <h1>Edit Profile</h1>
 <?php echo $this->session->userdata('id_member')?>
    <hr>
<!-- Button trigger modal -->

<!-- <button id="myBtnes">Open Modal</button> -->

<!-- The Modal -->
<div id="myModales" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <!-- <p>Some text in the Modal..</p> -->

<form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/education" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;">
                     <div class="form-group">                          
                     <label class="col-lg-3 control-label"><?php echo $tingpend ?>:</label>                          
                     <div class="col-lg-8">                            
                     <input class="form-control"  type="text" name="tingkat_pendidikan">                          
                     </div>                        
                     </div>                        
                     <div class="form-group">                          
                     <label class="col-lg-3 control-label"><?php echo $namskol ?>:</label>                          
                     <div class="col-lg-8">                            
                     <input class="form-control" type="text" name="nama_pendidikan">                          
                     </div>                        
                     </div>                        
                     <div class="form-group">                          
                     <label class="col-lg-3 control-label">Status:</label>                          
                     <div class="ui-select col-lg-8">                              
                     <select name="status_pendidikan" id="status_pendidikan" class="form-control">                                
                     <option value="graduated"><?php echo $lulus ?></option>                                
                     <option value="Deferred"><?php echo $ditunda ?></option>                                
                     <option value="transferred"><?php echo $ditransfer ?></option>                              
                     </select>
                     </div>                        
                     </div>                        
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $tanglul ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" type="date" name="completion_date">                          </div>                                              </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $lokasi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control" value="" type="text" name="location_pendidikan"></textarea>                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description_pendidikan"></textarea>                          </div>                        </div>                           <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><button type="button" class="btn btn-default" id="myclose">Close</button>                            </div>                        
                     </div>                        </form>

    
  </div>

</div>
<!-- The Modal -->
<div id="myModalemployment" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <!-- <p>Some text in the Modal..</p> -->
  <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/employment" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 

                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $nampek ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="job_title" type="text">                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $namper ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" name="company" type="text">                          </div>                        </div>
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $lokasi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="location"></textarea>                          </div>                        </div>
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $startdate ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="start_date" type="date" >                          </div>                                              </div>
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $enddate ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="start_date" type="date" >                          </div></div>
                      
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $compensasion ?>:</label>                          <div class="col-lg-8"><input class="form-control"  name="compensasion" type="text"></div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $mata_uang ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="mata_uang" type="text"></div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $interval ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="interval_waktu" type="text">                       </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description_pendidikan"></textarea>                          </div>                        </div>

                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><button type="button" class="btn btn-default" id="mycloseemployment">Close</button>                            </div>                        </div>                        </form>                   
     </div>
</div>
<!-- The Modal -->
<div id="myModalskill" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <!-- <p>Some text in the Modal..</p> -->
  <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/skill" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 

                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $skill_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="skill_name" type="text">                          </div>                        </div>              
                     <div class="form-group">                          
                     <label class="col-lg-3 control-label">Level:</label>                          
                     <div class="ui-select col-lg-8">                              
                     <select name="level" id="level" class="form-control">                                
                     <option value="beginner"><?php echo $beginner ?></option>                                
                     <option value="intermediate"><?php echo $intermediate ?></option>                                
                     <option value="advanced"><?php echo $advanced ?></option>                              
                     <option value="expert"><?php echo $expert ?></option>                              
                     </select>
                     </div>                        
                     </div>
<!-- <div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"></textarea>                          </div>                        </div> -->

                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><button type="button" class="btn btn-default" id="mycloseskill">Close</button>                            </div>                        </div>                        </form>                   
  
  </div>
</div>
<!-- The Modal -->
<div id="myModallanguage" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <!-- <p>Some text in the Modal..</p> -->
  <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/language" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 

                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $language_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="language_name" type="text">                          </div>                        </div>              
                     <div class="form-group">                          
                     <label class="col-lg-3 control-label">Level:</label>                          
                     <div class="ui-select col-lg-8">                              
                     <select name="level" id="level" class="form-control">                                
                     <option value="beginner"><?php echo $beginner ?></option>                                
                     <option value="conversational"><?php echo $conversational ?></option>                                
                     <option value="fluent"><?php echo $fluent ?></option>                              
                     <option value="native"><?php echo $native ?></option>                              
                     </select>
                     </div>                        
                     </div>
<!-- <div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"></textarea>                          </div>                        </div> -->

                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><button type="button" class="btn btn-default" id="mycloselanguage">Close</button>                            </div>                        </div>                        </form>                   

  </div>
</div>
<!-- The Modal -->
<div id="myModalaward" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <!-- <p>Some text in the Modal..</p> -->
  <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/award" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 

                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $award_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="award_name" type="text">                          </div>                        </div>              
<div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"></textarea>                          </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $year ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="year" type="text">                          </div>                        </div>

                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span> <button type="button" class="btn btn-default" id="mycloseaward">Close</button>                           </div>                        </div>                        </form>                   
    
  </div>
</div>
<!-- The Modal -->
<div id="myModalreference" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <!-- <p>Some text in the Modal..</p> -->
  <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/reference" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 

                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $reference_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="reference_name" type="text">                          </div>                        </div>
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $namper ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="company" type="text">                          </div>                        </div>
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $telepon ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="phone" type="number">                          </div>                        </div>
                                   
<div class="form-group"><label class="col-lg-3 control-label"><?php echo $alamat ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="address"></textarea>                          </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $relationship ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="relationship" type="text">                          </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $email ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="email" type="email">                          </div>                        </div>
<div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"></textarea>                          </div>                        </div>


                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><button type="button" class="btn btn-default" id="myclosereference">Close</button>                            </div>                        </div>                        </form>                   
    
  </div>
</div>
        <div class="col-md-12">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                <h3 class="panel-title">Personal identity</h3>
                    <span class="clickable pull-right"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body" >
                <div >
                    
                      <div class="col-lg-3 text-center">
                      <div class="row">
                        <form action="<?php echo base_url();?>biodata/ajaxpro" method="POST">
                          <label class="control-label">Photo profile</label>
                          <div class="image-output">
                            <img src="" alt="" id="item-img-output" style="width:250px; height:250px; border:0px"/> 
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
                                  <!-- width: 250px; height: 400px; -->
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
                        <label class="col-lg-3 control-label">Hobbies and interest</label>
                        <div class="col-lg-8">
                          <textarea class="form-control" name="hobiminat"><?php echo $a->alamat_jalan; ?></textarea>
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
<div class="panel-primary panel2" id="education_fields">                      <div class="panel-heading2" style= "background-color: #007eb5; color:white; padding: 10px;">                      <h3 class="panel-title">&nbsp</h3><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>                      </div><div class="panel-body2">                             <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/edit_education" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 
<input type="hidden" name="increment" value="<?php echo $b->increment?>">
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $tingpend ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $b->tingkat_pendidikan?>" name="tingkat_pendidikan" type="text">                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $namskol ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $b->nama_pendidikan?>" name="nama_pendidikan" type="text">                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label">Status:</label>                          <div class="ui-select col-lg-8">                              <select id="statuspendidikan" class="form-control" name="statuspendidikan">                                <option value="Graduated"><?php echo $lulus ?></option>                                <option value="Deferred"><?php echo $ditunda ?></option>                                <option value="Transferred"><?php echo $ditransfer ?></option>                              </select>                            </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $tanglul ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $b->completion_date?>" name="completion_date" type="date" >                          </div>                                              </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $lokasi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control" value="" type="text" name="location_pendidikan"><?php echo $b->location?></textarea>                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control" value="" type="text" name="description_pendidikan"><?php echo $b->description?></textarea>                          </div>                        </div>                           <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><a href="<?php echo base_url()?>biodata/delete/education/<?php echo $b->increment?>"><button type="button" class="btn btn-danger" onclick="<?php echo base_url()?>biodata/delete/education/<?php echo $b->increment?>"><?php echo $hapus ?></button></a>                             </div>                        </div>                        </form>                                              </div>                      </div>
                        <?php } ?>
                     <div class="panel-primary panel2" id="education_fields">
                     </div>
                     <div class="input-group-btn">
                        <button id="myBtnes" class="btn btn-success" type="button" >
                        <!-- onclick="education_fields();" -->
                         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><label>&nbsp;lkujythdfghjk</label></button>
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
                      <?php foreach ($employment as $c) { ?>
<div class="panel-primary panel2" id="employment_fields">                      <div class="panel-heading2" style= "background-color: #007eb5; color:white; padding: 10px;">                      <h3 class="panel-title">&nbsp</h3><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>                      </div><div class="panel-body2">                             <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/edit_employment" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 
<input type="hidden" name="id_employment" value="<?php echo $c->id_employment?>">
<input type="hidden" name="presently_employed" value="0">
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $nampek ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $c->job_title?>" name="job_title" type="text">                          </div>                        </div>                        <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $namper ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $c->company?>" name="company" type="text">                          </div>                        </div>
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $lokasi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control" value="" type="text" name="location"><?php echo $c->location?></textarea>                          </div>                        </div>
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $startdate ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $c->start_date?>" name="start_date" type="date" >                          </div>                                              </div>
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $enddate ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $c->end_date?>" name="start_date" type="date" >                          </div></div>
                      
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $compensasion ?>:</label>                          <div class="col-lg-8"><input class="form-control" value="<?php echo $c->compensasion?>" name="compensasion" type="text"></div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $mata_uang ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $c->mata_uang?>" name="mata_uang" type="text"></div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $interval ?>:</label>                          <div class="col-lg-8">                            <input class="form-control" value="<?php echo $c->interval_waktu?>" name="interval_waktu" type="text">                       </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control" value="" type="text" name="description_pendidikan"><?php echo $c->description?></textarea>                          </div>                        </div>

                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><a href="<?php echo base_url()?>biodata/delete/employment/<?php echo $c->id_employment?>"><button type="button" class="btn btn-danger"><?php echo $hapus ?></button></a>                            </div>                        </div>                        </form>                                              </div>                      </div>
                        <?php } ?>
                     
                     <div class="input-group-btn">
                        <button id="tambah_employment" class="btn btn-success" type="button" >
                        <!-- onclick="employment_fields();" -->
                         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true" style="margin-top: 100px">
                    
                              </div> -->

                      </div>
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
                      <?php foreach ($skills as $d) { ?>
<div class="panel-primary panel2" id="">                      <div class="panel-heading2" style= "background-color: #007eb5; color:white; padding: 10px;">                      <h3 class="panel-title">&nbsp</h3><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>                      </div><div class="panel-body2">                             <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/edit_skill" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 
<input type="hidden" name="id_skills" value="<?php echo $d->id_skills?>">
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $skill_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="skill_name" type="text" value="<?php echo $d->skill_name?>">                          </div>                        </div>              
                     <div class="form-group">                          
                     <label class="col-lg-3 control-label">Level:</label>                          
                     <div class="ui-select col-lg-8">                              
                     <select name="level" id="level" class="form-control">                                
                     <option value="beginner"><?php echo $beginner ?></option>                                
                     <option value="intermediate"><?php echo $intermediate ?></option>                                
                     <option value="advanced"><?php echo $advanced ?></option>                              
                     <option value="expert"><?php echo $expert ?></option>                              
                     </select>
                     </div>                        
                     </div>
<!-- <div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"><?php echo $d->description?></textarea>                          </div>                        </div> -->
                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><a href="<?php echo base_url()?>biodata/delete/skills/<?php echo $d->id_skills?>"><button type="button" class="btn btn-danger"><?php echo $hapus ?></button></a>                            </div>                        </div>                        </form>                                              </div>                      </div>
                        <?php } ?>
                     
                     <div class="input-group-btn">
                        <button id="tambah_skill" class="btn btn-success" type="button" >
                        <!-- onclick="employment_fields();" -->
                         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true" style="margin-top: 100px">
                    
                              </div> -->

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
                      <?php foreach ($languages as $e) { ?>
<div class="panel-primary panel2" id="">                      <div class="panel-heading2" style= "background-color: #007eb5; color:white; padding: 10px;">                      <h3 class="panel-title">&nbsp</h3><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>                      </div><div class="panel-body2">                             <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/edit_language" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 
<input type="hidden" name="id_languages" value="<?php echo $e->id_languages?>">
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $language_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="language_name" type="text" value="<?php echo $e->language_name?>">                          </div>                        </div>              
                     <div class="form-group">                          
                     <label class="col-lg-3 control-label">Level:</label>                          
                     <div class="ui-select col-lg-8">                              
                     <select name="level" id="level" class="form-control">                                
                     <option value="beginner"><?php echo $beginner ?></option>                                
                     <option value="conversational"><?php echo $conversational ?></option>                                
                     <option value="fluent"><?php echo $fluent ?></option>                              
                     <option value="native"><?php echo $native ?></option>                              
                     </select>
                     </div>                        
                     </div>
<!-- <div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"><?php echo $d->description?></textarea>                          </div>                        </div> -->
                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span>  <a href="<?php echo base_url()?>biodata/delete/languages/<?php echo $e->id_languages?>"><button type="button" class="btn btn-danger"><?php echo $hapus ?></button></a>                          </div>                        </div>                        </form>                                              </div>                      </div>
                        <?php } ?>
                     
                     <div class="input-group-btn">
                        <button id="tambah_language" class="btn btn-success" type="button" >
                        <!-- onclick="employment_fields();" -->
                         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true" style="margin-top: 100px">
                    
                              </div> -->

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
                      <?php foreach ($awards as $f) { ?>
<div class="panel-primary panel2" id="">                      <div class="panel-heading2" style= "background-color: #007eb5; color:white; padding: 10px;">                      <h3 class="panel-title">&nbsp</h3><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>                      </div><div class="panel-body2">                             <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/edit_award" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 
<input type="hidden" name="id_awards" value="<?php echo $f->id_awards?>">
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $award_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="language_name" type="text" value="<?php echo $f->award_name?>">                          </div>                        </div>              
<div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"><?php echo $f->description?></textarea>                          </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $year ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="language_name" type="text" value="<?php echo $f->year?>">                          </div>                        </div>              
                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span><a href="<?php echo base_url()?>biodata/delete/awards/<?php echo $f->id_awards?>"><button type="button" class="btn btn-danger"><?php echo $hapus ?></button></a>                            </div>                        </div>                        </form>                                              </div>                      </div>
                        <?php } ?>
                     
                     <div class="input-group-btn">
                        <button id="tambah_award" class="btn btn-success" type="button" >
                        <!-- onclick="employment_fields();" -->
                         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true" style="margin-top: 100px">
                    
                              </div> -->

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
                      <?php foreach ($references as $g) { ?>
<div class="panel-primary panel2" id="">                      <div class="panel-heading2" style= "background-color: #007eb5; color:white; padding: 10px;">                      <h3 class="panel-title">&nbsp</h3><span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>                      </div><div class="panel-body2">                             <form class="form-horizontal" role="form" action="<?php echo base_url() ?>biodata/edit_reference" method="post" style=" border: 1px solid; border-color: #009EE3; padding: 20px;"> 
<input type="hidden" name="id_references" value="<?php echo $g->id_references?>">
                     <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $reference_name ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="reference_name" type="text" value="<?php echo $g->reference_name?>">                          </div>                        </div>              
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $namper ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="company" type="text" value="<?php echo $g->company?>">                          </div>                        </div>
                      <div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $telepon ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="phone" type="number" value="<?php echo $g->phone?>">                          </div>                        </div>

<div class="form-group"><label class="col-lg-3 control-label"><?php echo $alamat ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="address"><?php echo $g->address?></textarea>                          </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $relationship ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="relationship" type="text" value="<?php echo $g->relationship?>">                          </div>                        </div>
<div class="form-group">                          <label class="col-lg-3 control-label"><?php echo $email ?>:</label>                          <div class="col-lg-8">                            <input class="form-control"  name="email" type="email" value="<?php echo $g->email?>">                          </div>                        </div>

<div class="form-group"><label class="col-lg-3 control-label"><?php echo $deskripsi ?>:</label>                          <div class="col-lg-8">                            <textarea class="form-control"  type="text" name="description"><?php echo $g->description?></textarea>                          </div>                        </div>


            
                      <div class="form-group">                          <label class="col-md-3 control-label"></label>                          <div class="col-md-8">                            <input class="btn btn-primary" value="<?php echo $simpan ?>" type="submit">                            <span></span> <a href="<?php echo base_url()?>biodata/delete/references/<?php echo $g->id_references?>"><button type="button" class="btn btn-danger"><?php echo $hapus ?></button></a>                           </div>                        </div>                        </form>                                              </div>                      </div>
                        <?php } ?>
                     
                     <div class="input-group-btn">
                        <button id="tambah_reference" class="btn btn-success" type="button" >
                        <!-- onclick="employment_fields();" -->
                         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true" style="margin-top: 100px">
                    
                              </div> -->

                      </div>
            </div>
        </div>
        </div>
        
       
    </div>

<hr>

        </div>
        <!-- /#page-wrapper -->
        <script>
          // Get the modal
var modal = document.getElementById('myModales');

// Get the button that opens the modal
var btn = document.getElementById("myBtnes");

// Get the <span> element that closes the modal
var span = document.getElementById("myclose");;

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
        </script>
        <script>
          // Get the modal
var modalemployment = document.getElementById('myModalemployment');

// Get the button that opens the modal
var btnemployment = document.getElementById("tambah_employment");

// Get the <span> element that closes the modal
var spanemployment = document.getElementById("mycloseemployment");;

// When the user clicks on the button, open the modal
btnemployment.onclick = function() {
    modalemployment.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanemployment.onclick = function() {
    modalemployment.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalemployment) {
        modalemployment.style.display = "none";
    }
} 
        </script>
        <script>
          // Get the modal
var modalskill = document.getElementById('myModalskill');

// Get the button that opens the modal
var btnskill = document.getElementById("tambah_skill");

// Get the <span> element that closes the modal
var spanskill = document.getElementById("mycloseskill");;

// When the user clicks on the button, open the modal
btnskill.onclick = function() {
    modalskill.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanskill.onclick = function() {
    modalskill.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalskill) {
        modalskill.style.display = "none";
    }
} 
        </script>
        <script>
          // Get the modal
var modallanguage = document.getElementById('myModallanguage');

// Get the button that opens the modal
var btnlanguage = document.getElementById("tambah_language");

// Get the <span> element that closes the modal
var spanlanguage = document.getElementById("mycloselanguage");;

// When the user clicks on the button, open the modal
btnlanguage.onclick = function() {
    modallanguage.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanlanguage.onclick = function() {
    modallanguage.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modallanguage) {
        modallanguage.style.display = "none";
    }
} 
        </script>
        <script>
          // Get the modal
var modalaward = document.getElementById('myModalaward');

// Get the button that opens the modal
var btnaward = document.getElementById("tambah_award");

// Get the <span> element that closes the modal
var spanaward = document.getElementById("mycloseaward");;

// When the user clicks on the button, open the modal
btnaward.onclick = function() {
    modalaward.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanaward.onclick = function() {
    modalaward.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalaward) {
        modalaward.style.display = "none";
    }
} 
        </script>
        <script>
          // Get the modal
var modalreference = document.getElementById('myModalreference');

// Get the button that opens the modal
var btnreference = document.getElementById("tambah_reference");

// Get the <span> element that closes the modal
var spanreference = document.getElementById("myclosereference");;

// When the user clicks on the button, open the modal
btnreference.onclick = function() {
    modalreference.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanreference.onclick = function() {
    modalreference.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalreference) {
        modalreference.style.display = "none";
    }
} 
        </script>
        


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
                  




</body>

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


<script language="javascript">
    function open_container()
    {
      var size=document.getElementById('mysize').value;
      var content = '<form role="form"><div class="form-group"><label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"></div><div class="form-group"><label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"></div><div class="form-group"><label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile"><p class="help-block">Example block-level help text here.</p></div><div class="checkbox"><label><input type="checkbox"> Check me out</label></div><button type="submit" class="btn btn-default">Submit</button></form>';
      var title = 'My dynamic modal dialog form with bootstrap';
      var footer = '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button>';
      setModalBox(title,content,footer,size);
      $('#myModal').modal('show');
    }
    function setModalBox(title,content,footer,$size)
    {
      document.getElementById('modal-bodyku').innerHTML=content;
      document.getElementById('myModalLabel').innerHTML=title;
      document.getElementById('modal-footerq').innerHTML=footer;
      if($size == 'large')
      {
        $('#myModal').attr('class', 'modal fade bs-example-modal-lg')
                 .attr('aria-labelledby','myLargeModalLabel');
        $('.modal-dialog').attr('class','modal-dialog modal-lg');
      }
      if($size == 'standart')
      {
        $('#myModal').attr('class', 'modal fade')
                 .attr('aria-labelledby','myModalLabel');
        $('.modal-dialog').attr('class','modal-dialog');
      }
      if($size == 'small')
      {
        $('#myModal').attr('class', 'modal fade bs-example-modal-sm')
                 .attr('aria-labelledby','mySmallModalLabel');
        $('.modal-dialog').attr('class','modal-dialog modal-sm');
      }
    }
    </script>