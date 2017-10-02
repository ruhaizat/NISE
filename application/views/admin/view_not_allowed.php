<?php $this->load->view('admin/partials/admin_header.php'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <h2><?php echo $moduleStr;?></h2>
                  <div class="row tile_count">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_250">
                    <div class="x_title fixed_height_100">
                        <h4><i class="glyphicon glyphicon-info-sign"></i> Akses Dihalang</h4>
                            <ul class="nav navbar-right panel_toolbox">
                            
                            <li></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div><br>
                    <p>Anda tiada akses ke modul ini. Sila <a href="<?php echo base_url() . 'Admin/Dashboard'; ?>"><strong>klik disini</strong></a> untuk kembali ke paparan utama.</p>
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