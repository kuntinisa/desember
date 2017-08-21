<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Croppie Modal error</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://foliotek.github.io/Croppie/croppie.css'>

    <link href="<?php echo base_url(); ?>assets/croppie/style.css" rel="stylesheet" type="text/css">

  
</head>

<body>
  <div class="container">
	<div class="row">
		<h1>Croppie + Bootstrap Modal</h1>
	</div>
  <div class="row">
    <input type="file" name="" class="item-img" accept="image/*"/>
  </div>
  <div class="row">
    <h3>Result Image</h3>
    <div class="image-output">
      <img src="" alt="" id="item-img-output" />
    </div>
  </div>
<!-- 	<div class="row">
		<h1>Croppie - Bootstrap Modal</h1>
	</div>
	<div class="row">
    <input type="file" name="" class="item-img2" accept="image/*"/>
  </div>
  <div class="row">
		<div class="col-xs-6">
			<h3>Result Image</h3>
			<div class="image-output">
				<img src="" alt="" id="item-img-output2" />
			</div>
		</div>
		<div class="col-xs-6">
			<div class="row">
				<div style="display: block; width: 300px; height: 300px;">
            <div id="upload-demo2"></div>
          </div>
			</div>
			<div class="row">
				<button id="cropBtn" class="btn btn-primary">Crop</button>
			</div>
		</div>
    
  </div> -->
</div>

<!-- Modal -->
<div id="cropImagePop" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Crop Image</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
          <div style="display: block; width: 300px; height: 300px;">
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='http://foliotek.github.io/Croppie/croppie.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

     <script src="<?php echo base_url(); ?>assets/croppie/index.js"></script>

</body>
</html>
