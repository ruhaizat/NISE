<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Profil Saya</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kemaskini Profil</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <label></label>
                          <?php foreach($profil as $profil) : ?>
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    Nama : <input class="form-control" placeholder="Nama Peserta" name="nama_peserta" type="text" value="<?php echo $profil['nama_peserta']; ?>" required>
                                </div>
                                <div class="form-group">
                                    No. MyKad/Pasport : <input class="form-control" placeholder="Nombor Kad Pengenalan" name="no_mykad" type="text" value="<?php echo $profil['no_mykad']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    No. Telefon : <input class="form-control" placeholder="No Telefon" name="no_tel" type="text" value="<?php echo $profil['no_tel']; ?>" required>
                                </div>
                                <div class="form-group">
                                    No. Tel Bimbit : <input class="form-control" placeholder="No Tel Bimbit" name="no_tel" type="text" value="<?php echo $profil['no_telbimbit']; ?>" required>
                                </div>
                                <div class="form-group">
                                    Alamat Emel : <input class="form-control" placeholder="Emel" name="emel" type="text" value="<?php echo $profil['emel']; ?>" required>
                                </div>
                                <br/>
                                <input type="submit" name="buttonSubmit" value="Simpan" />
                                <input type="hidden" name="u_id" value="<?php echo $profil['id'] ?>">
                            </fieldset>
                             <?php endforeach; ?>  
                        </form>
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col --> 
        </div> <!-- /row --> 
    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer'); ?>

<?php if($this->session->flashdata('message') != NULL) : ?>
<script>
    swal({
      title: "Success",
      text: "<?php echo $this->session->flashdata('message'); ?>",
      type: "success",
      timer: 1500,
      showConfirmButton: false
    });
</script>
<?php endif ?>