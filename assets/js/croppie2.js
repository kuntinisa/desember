var $uploadCrop,
		tempFilename,
		rawImg,
		imageId;
		function readFile(input) {
 			if (input.files && input.files[0]) {
              var reader = new FileReader();
	            reader.onload = function (e) {
					$('.upload-demo').addClass('ready');
					$('#cropImagePop').modal('show');
		            rawImg = e.target.result;
	            }
	            reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        swal("Sorry - you're browser doesn't support the FileReader API");
		    }
		}

		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 300,
				height: 300,
			},
			enforceBoundary: false,
			enableExif: true
		});
		$('#cropImagePop').on('shown.bs.modal', function(){
			// alert('Shown pop');
			$uploadCrop.croppie('bind', {
        		url: rawImg
        	}).then(function(){
        		console.log('jQuery bind complete');
        	});
		});
		
		$('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
	 	$('#cancelCropBtn').data('id', imageId); readFile(this); });
		$('#cropImageBtn').on('click', function (ev) {
			$uploadCrop.croppie('result', {
				type: 'base64',
				format: 'jpeg',
				size: {width: 300, height: 300}
			}).then(function (resp) {
// $.ajax({
// url: "biodata/ajaxpro",
// type: "POST",
// data: {"image":resp},
// success: function (data) {
// html = '<img src="' + resp + '" />';
// $("#item-img-output").html(html);
// }
// });
				$('#item-img-output').attr('src', resp);
				$('.item-img').attr('name', 'image');
				$('#cropImagePop').modal('hide');
			});
		});