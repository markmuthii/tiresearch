<?php 
include "config/db.php";
include "includes/header.php";

$all_cars = $db->query("SELECT * FROM car_information LIMIT 150");

?>
		<!--************************************
				Banner Start
		*************************************-->
		<div id="tg-banner" class="tg-banner tg-haslayout">
			<div class="tg-banner-parallax parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/img-01.jpg"></div>
			<div class="tg-banner-content">
				<h1>Vehicle Search</h1>
				<ul class="tg-breadcrumb">
					<li><a href="./">Home</a></li>
					<li>Vehicle Search</li>
				</ul>
			</div>
		</div>
		<!--************************************
				Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-vehiclesearchapp">
				<form class="tg-form-searchapp" method="post" id="carSearchForm">
					<fieldset class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" class="form-control" id="make" name="make" placeholder="Make">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" class="form-control" id="model" name="model" placeholder="Model">
							</div>
						</div>
						<div class="col-sm-12 tg-milagebox">
							<div class="form-group">
								<div id="tg-mileage-slider" class="tg-mileage-slider"></div>
							</div>
							<input type="submit" name="search" value="Search" class="btn">
						</div>
					</fieldset>
				</form>
			</div>
			<br><br>

			<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Make</th>
		        <th>Model</th>
		        <th>Model (Platform) Years</th>
		        <th>Model Version</th>
		        <th>Body Type</th>
		        <th>Doors</th>
		        <th>Tire Size</th>
		        <th>Tire Size Rear</th>
		        <th>Engine Type</th>
		      </tr>
		    </thead>
		    <tbody id="tableBody">
	    	<!-- <?php if($cars->num_rows > 0): ?>
    		<?php foreach($cars as $car): ?>
		      <tr>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		        <td><?php echo $car["id"]; ?></td>
		      </tr>
	      <?php endforeach ?>
	      <?php else: ?> -->
	      	<tr>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		        <td>--</td>
		      </tr>
	      <!-- <?php endif ?> -->
		    </tbody>
		  </table>
		  <br>
		  <div>
		  	<h3>Search All Vehicles:</h3>
		  </div>
			<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>#</th>
		        <th>Make</th>
		        <th>Model</th>
		        <th>Model (Platform) Years</th>
		        <th>Model Version</th>
		        <th>Body Type</th>
		        <th>Doors</th>
		        <th>Tire Size</th>
		        <th>Tire Size Rear</th>
		        <th>Engine Type</th>
		      </tr>
		    </thead>
		    <tbody>
	      <?php foreach($all_cars as $s_car): ?>
		      <tr>
		        <td><?php echo $s_car["id"]; ?></td>
		        <td><?php echo $s_car["make"]; ?></td>
		        <td><?php echo $s_car["model"]; ?></td>
		        <td><?php echo $s_car["model_platform_years"]; ?></td>
		        <td><?php echo $s_car["model_version"]; ?></td>
		        <td><?php echo $s_car["body_type"]; ?></td>
		        <td><?php echo $s_car["doors"]; ?></td>
		        <td><?php echo $s_car["tire_size"]; ?></td>
		        <td><?php echo $s_car["tire_size_rear"]; ?></td>
		        <td><?php echo $s_car["engine_type"]; ?></td>
		      </tr>
	      <?php endforeach ?>
		    </tbody>
		  </table>
		</main>
		<!--************************************
				Main End
		*************************************-->


		

<?php 

include "includes/footer.php";

?>