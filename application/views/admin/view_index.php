<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
          <!--  <div class="col-md-12 col-sm-12 col-xs-12">
				  <div class="row tile_count"> 
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
						  <span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Vehicles </span>
						  <div class="count"><?php echo count($kursus); ?></div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
						  <span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Employees </span>
						  <div class="count"><?php echo count($employees); ?></div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
						  <span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Customer </span>
						  <div class="count"><?php echo count($customers); ?></div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
					  	<span class="count_top"><i class="glyphicon glyphicon-bed"></i> Total Sold</span>
					  	<div class="count">
					  		<?php $price = 0; ?>
					  		<?php foreach($vehicles as $vehicle) : ?>
					  			<?php $price += $vehicle['selling_price']; ?>
					  		<?php endforeach; ?>
					  		<?= 'BDT ' . $price ?>
					  	</div>
					</div>
				  </div>-->
            </div> <!-- /col --> 
        </div><!-- /row -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"">
            <h2>Dashboard Utama</h2>
                  <div class="row tile_count"> 
                  <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="glyphicon glyphicon-list"></i> Jumlah Program </span>
                          <div class="count"><?php echo count($kursus); ?></div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                          <span class="count_top"><i class="glyphicon glyphicon-certificate"></i> Jumlah Sijil</span>
                          <div class="count"><?php echo count($kursus); ?></div>
                    </div>
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_250">
                    <div class="x_title fixed_height_100">
                        <h4><i class="glyphicon glyphicon-info-sign"></i> Makluman Penting</h4>
                            <ul class="nav navbar-right panel_toolbox">
                            
                            <li></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div><br>
                    <p>1. Sijil hanya boleh dimuat turun apabila bayaran yuran telah selesai.</p>
                    <p>2. Selepas log masuk kali pertama, sila tukar kata laluan anda.<a href="<?php echo base_url() . 'Admin/ChangePwd'; ?>"><strong> Klik disini.</strong></a></p>
                        <div class="clearfix"></div>
                    </div>
                
                            
                        <ul class="nav navbar-right panel_toolbox"></ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    </div>

        


    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->

<?php $this->load->view('admin/partials/admin_footer'); ?>

<script>
	// Bar chart
	var ctx = document.getElementById("mybarChart");
	var mybarChart = new Chart(ctx, {
	  type: 'bar',
	  data: {
	    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
	    datasets: [{
	      label: 'Invest $',
	      backgroundColor: "#26B99A",
	      data: [0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0,  34000500]
	    }, {
	      label: 'Sold $',
	      backgroundColor: "#03586A",
	      data: [0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0,  25000200]
	    }]
	  },

	options: {
	    scales: {
	      yAxes: [{
	        ticks: {
	          beginAtZero: true
	        }
	      }]
	    }
	  }
	});

</script>