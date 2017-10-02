<?php
$mode		= $this->uri->segment(3);
if ($mode == "edit" || $mode == "act_edt") {
	$id			= $datpil->id;
	$act		= "save_edit";
	$name		= $datpil->name;
	$pictureBwUrl	= $datpil->pictureBwUrl;
	$pictureColorUrl	= $datpil->pictureColorUrl;

} else {
	$act		= "save_add";
	$id		= "";
	$name		= "";
	$pictureBwUrl	= "";
	$pictureColorUrl	= "";
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
<div class="navbar navbar-inverse navJudul">
	<div class="container z0">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Client</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->
<div class="well">
<form action="<?php echo base_URL()?>admin/client/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="pictureColorUrlHidden" value="<?php echo $pictureColorUrl; ?>">
	<input type="hidden" name="pictureBwUrlHidden" value="<?php echo $pictureBwUrl; ?>">

	<div class="row-fluid " style="overflow: hidden">

		<div class="col-md-12">
			<table width="100%" class="table-form">
				<tr>
					<td width="20%">Nama</td>
					<td>
						<input type="text" autofocus tabindex="1"  name="name" value="<?php echo $name; ?>" class="form-control" required>
					</td>
				</tr>
				<tr>
                    <td width="20%">Logo Bewarna</td>
                    <td>
                        <b>
                            <input type="file" name="pictureColorUrl" tabindex="10" class="form-control" style="width: 100%"></b>
                        <br/>
                        <?php
                        if ($pictureColorUrl) {
                            echo "<img src='" . base_url() . $pictureColorUrl . "'  width='200px' />";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
	                <td width="20%">Logo Hitam Putih</td>
	                <td>
	                    <b>
	                        <input type="file" name="pictureBwUrl" tabindex="10" class="form-control" style="width: 100%"></b>
	                    <br/>
	                    <?php
	                    if ($pictureBwUrl) {
	                        echo "<img src='" . base_url() . $pictureBwUrl . "'  width='200px' />";
	                    }
	                    ?>
	                </td>
	            </tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		<br><button type="submit" class="btn btn-primary text-right" ><i class="icon icon-ok icon-white"></i> Simpan</button>
				<a href="<?php echo base_URL()?>admin/client" class="btn btn-success text-right"><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
				
		</div>
	</div>
</form>
</div>