<?php  

include "includes/header.php";

?>
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Vehicle Brands & Search App
			*************************************-->
			<section class="tg-haslayout tg-brands-searchapp">
				<div class="col-md-12 col-sm-12">
					<div class="row">
						<div class="tg-vehiclesearchapp">
							<form class="tg-form-searchapp" enctype="text/plain" action="#" method="post">
								<fieldset class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" class="form-control" value="post code" name="make" placeholder="Make">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" class="form-control" value="post code" name="model" placeholder="Model">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="text" class="form-control" value="post code" name="postcode" placeholder="Post Code">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<div class="tg-select">
												<select name="locations" class="locations">
													<option value="">Select Location</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-sm-12 tg-milagebox">
										<div class="form-group">
											<div id="tg-mileage-slider" class="tg-mileage-slider"></div>
										</div>
										<button class="tg-btn"><span>search now</span></button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Vehicle Brands & Search App
			*************************************-->

			
		</main>
		<!--************************************
				Main End
		*************************************-->


<?php  

include "includes/footer.php";

?>
		