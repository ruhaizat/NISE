<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Selenggara</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kemaskini Kategori Sijil</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>

<div id="container" class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center">Masukkan Maklumat Kategori Sijil Baru</h2>
			<br><br>
		  <form method="post" action="<?php echo site_url('Admin/Kategorisijil/submit_data'); ?>" name="data_register">
			<label for="Kod Sijil">Masukkan kod sijil</label>
			  <input type="text" class="form-control" name="kod_sijil" required >
			<br>
			<label for="Nama Sijil">Masukkan nama sijil</label>
			  <input type="text" class="form-control" name="nama_sijil">
			<br>
			<label for="Keterangan Sijil">Keterangan Sijil</label><br>
			  <textarea name="maklumat_sijil" class="form-control" rows="2" required ></textarea>
			<br><br>
			  <button type="submit" class="btn btn-primary pull-right">Submit</button>
			<br><br>
		  </form>
		</div>
	</div>
</div>
<?php $this->load->view('admin/partials/admin_footer.php'); ?>