<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footer-info">
				<div class="container">
					<div class="col-md-8 col-sm-12">
						<div class="row">
							<div class="tg-footer-infobox">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="tg-fbox">
											<strong class="tg-logo">
												<a href="#">
													<img src="images/logo2.png" alt="auto search">
												</a>
											</strong>
											<div class="tg-description">
												<p>Sed do eiusmod tempoar inont ut labore agua enimad it minim veniam nostrud eation ullamco.</p>
											</div>
											<ul>
												<li>
													<i class="fa fa-home"></i>
													<address>123 Eccles Old Road, New Salford Road, East London, Uk, M6 7AF</address>
												</li>
												<li>
													<i class="fa fa-envelope-o"></i>
													<a href="info%40company.html">info@company.com</a>
												</li>
												<li>
													<i class="fa fa-phone"></i>
													<span>+44 123 456 788 - 9</span>
												</li>
												
											</ul>
										</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="tg-fbox">
											<div class="tg-border-heading">
												<h3>By top Make</h3>
											</div>
											<ul>
												<li><a href="#">Alfa Romeo</a></li>
												<li><a href="#">Koenigsegg</a></li>
												<li><a href="#">Lamborghini</a></li>
												<li><a href="#">Mercedes-Benz</a></li>
												<li><a href="#">Volkswagen</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="tg-fbox">
											<div class="tg-border-heading">
												<h3>by top cities</h3>
											</div>
											<ul>
												<li><a href="#">Manchester</a></li>
												<li><a href="#">Bristol</a></li>
												<li><a href="#">Liverpool</a></li>
												<li><a href="#">Nottingham</a></li>
												<li><a href="#">Glasgow</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="row">
							<div class="tg-newsletter tg-curvedark">
								<div class="tg-border-heading">
									<h3>subscribe Newsletter</h3>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed doings eiuod tempor incididunt dolore magna aliqua.</p>
								</div>
								<form class="tg-form-newsletter">
									<fieldset>
										<div class="form-group">
											<input type="text" class="form-control" name="email" placeholder="Email">
										</div>
										<button class="tg-btn" type="submit" name="submit"><span>submit</span></button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<span class="tg-copyright">&copy; 2015 | All Rights Reserved</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/data.json"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
	<script src="js/markerclusterer.min.js"></script>
	<script src="js/infobox.js"></script>
	<script src="js/map.js"></script>
	<script src="js/nicescroll.js"></script>
	<script src="js/swiper.jquery.js"></script>
	<script src="js/canvasjs.min.js"></script>
	<script src="js/datepicker.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/main.js"></script>
	<script>

		$("#carSearchForm").submit((e)=>{
			e.preventDefault();
			// alert("Form Submitted");
			searchCar();
		});

		function searchCar(){
			var make = $("#make").val(),
					model = $("#model").val();

			var searchData = {
		    make: make,
		    model: model,
		    search: true
		  };

		  $.ajax({
		    type: "POST",
		    url: "controllers/controller.user.php",
		    dataType: "json",
		    data: searchData,
		    success: (res) => {
		      console.log(res);
		      if (res == undefined || res == "" || res == null) {
		      	return;
		      }
		      var output = `
						<tr>
		        <td>${res.id}</td>
		        <td>${res.make}</td>
		        <td>${res.model}</td>
		        <td>${res.model_platform_years}</td>
		        <td>${res.model_version}</td>
		        <td>${res.body_type}</td>
		        <td>${res.doors}</td>
		        <td>${res.tire_size}</td>
		        <td>${res.tire_size_rear}</td>
		        <td>${res.engine_type}</td>
		      </tr>
		      `;

		      $("#tableBody").html(output);

		    },
		    error: (err) => {
		      console.log(err);
		    },
		    complete: () => {
		      console.log("Search Complete");
		    }
		  });
		}
	</script>
</body>
</html>