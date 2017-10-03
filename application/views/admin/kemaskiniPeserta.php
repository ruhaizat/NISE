<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Peserta</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kemaskini Maklumat Peserta</h2>
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

    <form method="post" action="<?php echo site_url('Admin/Peserta/update_data/'.$data['id'].''); ?>" >

        <label for="Name">Nama Peserta</label>
        <input type="text" class="form-control" name="nama_peserta" value="<?php echo $data['nama_peserta']; ?>" required >
        <br>
        <label for="Nama Sijil">Nombor MyKad</label>
        <input type="text" class="form-control" name="no_mykad" value="<?php echo $data['no_mykad']; ?>" required>
        <br>
        <label for="Maklumat Sijil">No. Tel Bimbit</label>
        <input type="text" class="form-control" name="no_telbimbit" value="<?php echo $data['no_telbimbit']; ?>" required>
        <br>
        <label for="Status Bayaran">Status Bayaran</label>
        <select class="form-control" name="kod_stsbyrn" >
                                <option value="1" <?php if($data['kod_stsbyrn'] == 1):echo 'selected';endif;?>>SELESAI</option>
                                <option value="2" <?php if($data['kod_stsbyrn'] == 2):echo 'selected';endif;?>>BELUM SELESAI</option>
                                <option value="3" <?php if($data['kod_stsbyrn'] == 3):echo 'selected';endif;?>>PERCUMA</option>
                            </select>
        <label for="tarikh_kemaskini"></label>
        <input type="hidden" class="form-control" name="tarikh_kemaskini" value="<?php echo $data['tarikh_kemaskini']; ?>">
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