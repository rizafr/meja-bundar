<?php
$mode		= $this->uri->segment(3);
if ($mode == "edit" || $mode == "act_edt") {
	$id			= $datpil->id;
	$act		= "save_edit";
	$title		= $datpil->title;
	$subTitle	= $datpil->subTitle;
	$overview	= $datpil->overview;
	$role		= $datpil->role;
	$linkUrl	= $datpil->linkUrl;
	$youtubeUrlID = $datpil->youtubeUrlId;

} else {
	$act		= "save_add";
	$id		= "";
	$$id		= "";
	$title		= "";
	$subTitle	= "";
	$overview	= "";
	$role		= "";
	$linkUrl	= "";
	$youtubeUrlID = "";
}
?>

<style type="text/css">
.gallery img {
    width: 100%;
    height: 200px;
    cursor: pointer;
    transition: .3s;
    border: 1px solid #ccc;
    margin: 10px;
}
.link--remove-image {
	text-align: center;
	display: block;
}
</style>
<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
    $('body').on('click', '.link--remove-image', function() {
    
    	/* Act on the event */
    	var token = $(this).data('token');
    	$.ajax({
    		type:"post",
    		data:{token:token},
    		url:"<?php echo base_url('image-upload/remove') ?>",
    		cache:false,
    		dataType: 'json',
    		success: function(data){
    			alert(data.status);
    			location.reload();
    		},
    		error: function (xhr, ajaxOptions, thrownError){
                alert(thrownError);
            }
    	});
    });
</script>
<div class="navbar navbar-inverse navJudul">
	<div class="container z0">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Portfolio Items</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->
<div class="well">
<form action="<?php echo base_URL()?>admin/portfolio/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="row-fluid " style="overflow: hidden">

		<div class="col-md-6">
			<table width="100%" class="table-form">
				<tr>
					<td width="20%">Judul</td>
					<td>
						<input type="text" autofocus tabindex="1"  name="title" value="<?php echo $title; ?>" class="form-control" required>
					</td>
				</tr>
				<tr>
					<td width="20%">Sub Judul</td>
					<td>
						<input type="text" autofocus tabindex="2"  name="subTitle" value="<?php echo $subTitle; ?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td width="20%">Overview</td>
					<td>
						<textarea tabindex="3" name="overview"  rows="10" class="form-control"><?php echo $overview; ?></textarea>
					</td>
				</tr>
				<tr>
					<td width="20%">Role</td>
					<td>
						<input type="text" autofocus tabindex="4"  name="role" value="<?php echo $role; ?>" class="form-control">
					</td>
				</tr>
			</table>
		</div>

		<div class="col-md-6">	
			<table width="100%" class="table-form">
				<tr>
					<td width="20%">Link Url</td>
					<td>
						<input type="text" autofocus tabindex="5"  name="linkUrl" value="<?php echo $linkUrl; ?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td width="20%">Youtube Url ID</td>
					<td>
						<input type="text" autofocus tabindex="6"  name="youtubeUrlId" value="<?php echo $youtubeUrlID; ?>" class="form-control">
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<?php $this->load->view('admin/portfolio/upload', ['id' => $id])?>
	</div>
	<div class="row">
		<?php 
		    $portfolioItems = $this->db->query("SELECT * FROM portfolioItems where portfolioId = '$id'")->result();
		?>
		<?php if ($portfolioItems):?>
		<ul class="gallery">
			<?php foreach($portfolioItems as $row => $value): ?>
		    <li class="col-md-3"><a href="<?= base_url() . $value->pictureUrl;?>" data-fancybox="group" data-token="<?= $value->token?>" data-caption="<?php echo $value->title; ?>" >
                <img src="<?= base_url() . $value->pictureUrl;?>" alt="" />
            </a>
            <a href="javascript:void(0)" class="link--remove-image"  data-token="<?= $value->token?>">Remove</a>
            </li>
        	<?php endforeach;?>
		</ul>
		<?php endif;?>
	</div>
	<div class="row">
		<div class="col-md-12">
		<br><button type="submit" class="btn btn-primary text-right" ><i class="icon icon-ok icon-white"></i> Simpan</button>
				<a href="<?php echo base_URL()?>admin/portfolio" class="btn btn-success text-right"><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
				
		</div>
	</div>
</form>
</div>