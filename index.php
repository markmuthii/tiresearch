<?php  

include "includes/header.php";

?>

<form style="margin: 50px 0" method="post" action="controllers/controller.login.php">
	<div class="row">
	<!-- <?php if (isset($_SESSION["login_error"])): ?>
		<div class="col-md-12">
			<div class="alert alert-danger">
				<?php echo $_SESSION["login_error"]; ?>
				<?php session_unset($_SESSION["login_error"]) ?>
			</div>
		</div>
	<?php endif ?> -->
		<div class="col-md-6">
		  <div class="form-group">
		    <label for="email">Username:</label>
		    <input type="text" class="form-control" id="username" name="username">
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="password" id="password">
		  </div>
	  </div>
	  <div class="col-md-12">
	  	<input name="login" value="Submit" type="submit" class="btn btn-primary btn-block">
	  </div>
	  <p>Don't have an account? <a href="signup.php">Signup Here</a></p>
	</div>
</form>

<?php  

include "includes/footer.php";

?>