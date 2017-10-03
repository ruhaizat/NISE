<?php $this->load->view('admin/partials/admin_header.php'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Senarai Peserta</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <hr>


                <!-- all models --> 
        <div class="row">
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Muat Naik Pukal Peserta</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div style="padding-left: 25%">
          
    </div>
    </div>
    
    <br>


<!--*************************  START  DISPLAY ALL THE RECODEDS *************************-->
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Sila pilih fail dokumen untuk dimuat naik.</h5>
        <span>(Format fail: .xls, .csv, .sql)</span>
        <br>
    </div>
      <div class="widget-content nopadding">
        <form action="#" method="get" class="form-horizontal">
        <div class="control-group">
          <label class="control-label"></label>
          <div class="controls">
          <input type="file" />
          </div>
          <br>
          <div align="left"> 
      <a href="<?php echo site_url('Admin/Kategorisijil/add_data'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Naik Pukal Peserta</a>
    </div>
        </div>
      </div>
</div>  
<!--*************************  END DISPLAY FORM *************************-->

<?php $this->load->view('admin/partials/admin_footer.php'); ?>



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