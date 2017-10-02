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
                    </div>
                    <div id="container" class="container">

<div class="row">
 <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center"></h2>
        <br><br>
   <?php
      if(isset($edit_data) && is_array($edit_data) && count($edit_data)): $i=1;
      foreach ($edit_data as $key => $data) { 
    ?>

    <form method="post" action="<?php echo site_url('Admin/Kategorisijil/update_data/'.$data['kod_sijil'].''); ?>" >

        <label for="Name">Masukkan kod sijil</label>
        <input type="text" class="form-control" name="kod_sijil" value="<?php echo $data['kod_sijil']; ?>" required >
        <br>
        <label for="Nama Sijil">Masukkan nama sijil</label>
        <input type="text" class="form-control" name="nama_sijil" value="<?php echo $data['nama_sijil']; ?>" required>
        <br>
        <label for="Maklumat Sijil">Maklumat Sijil</label>
        <textarea name="maklumat_sijil" class="form-control" rows="2" required ><?php echo $data['maklumat_sijil']; ?></textarea>
        <br>
        <label for="tarikh_jana"></label>
        <input type="hidden" class="form-control" name="tarikh_jana" value="<?php echo $data['tarikh_jana']; ?>">
        <br>
        <br>
        <button type="submit" class="btn btn-primary pull-right">Kemaskini</button>
        <br><br>
    </form>
   <?php
        }endif;
     ?>
    <br><br>

<?php $this->load->view('admin/partials/admin_footer'); ?>