<!DOCTYPE html>
<html lang="en">



<body>
        <div id="page-wrapper" style ="background-color: #e5e6e7">

 <div class="row">
 <h1>Settings</h1>
    <hr>
        <div class="col-md-12">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                <h3 class="panel-title">Account settings</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body" >
                <div>
                    <form class="form-horizontal" role="form">
                      <div class="col-lg-3 text-center">
                 
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-8">
                          <input class="form-control" value="" type="password">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-lg-3 control-label">Language</label>
                        <div class="ui-select col-lg-8">
                            <select id="user_time_zone" class="form-control">
                              <option value="BahasaIndonesia">Bahasa Indonesia</option>
                              <option value="English">English</option>
                            </select>
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

         
      
       
       
        </div>
       
    </div>

<hr>

        </div>
        <!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->

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
            $('#myModal').modal('show');
        </script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<!-- Twitter Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>     

        <!-- croppie   -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='http://foliotek.github.io/Croppie/croppie.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

    <script src="<?php echo base_url(); ?>assets/js/croppie.js"></script>

</body>

</html>

