<?php
$id		= $this->uri->segment(4);
?>
<!DOCTYPE HTML>

<html>
<head>
	<title>Multiple Upload</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/basic.min.css') ?>">

<script type="text/javascript" src="<?php echo base_url('assets/dropzone.min.js') ?>"></script>

<style type="text/css">

body{
	background-color: #E8E9EC;
}

.dropzone {
	border: 2px dashed #0087F7;
	margin: 30px auto;
}

</style>

</head>
<body>

<?php if (!empty($id)):?>
<h4>
	Upload Gallery
</h4>
<input type="hidden" name="porfolioId" class="portofolio-hidden-id" data-value="<?= $id?>" value="<?= $id?>">

<div class="dropzone">
  <div class="dz-message">
  	<h3> Klik atau Drop gambar disini</h3>
  </div>

</div>
<?php else:?>
	<div class="alert alert-danger col-md-6 col-md-push-3" style="margin-top:30px;">
	  <strong>Info!</strong> Silakan buat terlebih dahulu portofolio untuk mengupload gallery
	</div>
<?php endif;?>

<script type="text/javascript">

Dropzone.autoDiscover = false;
var id = $('.portofolio-hidden-id').data('value');
var url = '<?php echo base_url('image-upload/post/') ?>' + '/' + id;

var foto_upload= new Dropzone(".dropzone",{
	url: url,
	maxFilesize: 2,
	method: "post",
	acceptedFiles: "image/*",
	paramName: "userfile",
	dictInvalidFileType:"Type file ini tidak dizinkan",
	addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
	a.token = Math.random();
	c.append("portfolioId",<?= $id?>); //Menmpersiapkan token untuk masing masing foto
	c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
	var token = a.token;
	$.ajax({
		type:"post",
		data:{token:token},
		url:"<?php echo base_url('image-upload/remove') ?>",
		cache:false,
		dataType: 'json',
		success: function(){
			console.log("Foto terhapus");
		},
		error: function(){
			console.log("Error");

		}
	});
});


</script>

</body>
</html>