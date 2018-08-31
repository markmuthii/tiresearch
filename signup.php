<?php  

include "includes/header.php";

?>

<form style="margin: 50px 0" method="post" action="controllers/controller.signup.php">
	<div class="row">
		<div class="col-md-6">
		  <div class="form-group">
		    <label for="email">First Name:</label>
		    <input type="text" class="form-control" id="firstname" name="firstname">
		  </div>
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Username:</label>
		    <input type="text" class="form-control" id="username" name="username">
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group">
		    <label for="email">Last Name:</label>
		    <input type="text" class="form-control" id="lastname" name="lastname">
		  </div>
		  <div class="form-group">
		    <label for="email">Phone Number:</label>
		    <input type="text" class="form-control" id="phonenumber" name="phonenumber">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="password" id="password">
		  </div>
	  </div>
	  <div class="col-md-12">
	  	<input name="signup" value="Submit" type="submit" class="btn btn-primary btn-block">
	  </div>
	</div>
</form>



<?php  

include "includes/footer.php";

?>