
<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>The Blurb</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.js"></script>
	<style type="text/css">
		.drop{
			text-shadow: 0px 1px 1px #4d4d4d;
			font-size:20px;
			color: #EFEFEF;
			font-weight:600;
		}
		#BG{
			position: fixed; 
			top: 0; 
			left: 0; 
				
			/* Preserve aspet ratio */
			min-width: 100%;
			min-height: 100%;
		}
		body{
			background-color: #272727;
		}
	</style>
  </head>
  <body>
	<!-- <img src="img/images_3137_1.jpg" id="bg" alt=""> -->
		
		<?php include 'header.php' ?>
		<div class = "row">
				<div class="large-12 columns">
					<br>
					<br>
						<H5 style="color: white; font-size: 40px">Register</H5>
								
				</div>
		</div>

		<div>
			<div class="row">
				<div class="large-12 columns">
					<div class="large-6 columns">
						<label class = "drop">First Name</label>
						<input type="text" placeholder="" />
					</div>
					<div class="large-6 columns">
						<label class = "drop">Last Name</label>
						<input type="text" placeholder="" />
					</div>
				</div>
			</div>

			<div class = "row">
				<div class="large-12 columns">
					<br>
					<br>
						<div class="large-4 medium-4 columns">
							<label class = "drop">Username</label>
							<input type="text" placeholder="Username" id="uname" />
						</div>
						<div class="large-4 medium-4 columns">
							<label class = "drop">Password</label>
							<input type="text" placeholder="Password" id="pass"/>
						</div>
						<div class="large-4 medium-4 columns">
							<label class="drop">Enter again</label>
							<input type="text" placeholder="Password Again" id="pass2" />
						</div>
				</div>

			</div>
			<div class = "row">
				<div class="large-12 columns">
						<div class="large-12 columns">
							<label class = "drop">Email</label>
							<input type="text" placeholder="E-Mail" />
						</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 large-centered columns">
					<br>
					<input type="submit" class="small button" value="                 Login                 " />
				</div>
			</div>
			
		</div>
		
	<?php include 'footer.php' ?>
	<script src="js/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
	<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
	<script>
	  $(document).foundation();
	 	var username = ("#uname").value;
	 	var password1 = ("pass").value;
	 	var password2 = ("pass2").value;
	 	var icon;

	 	function passIsValid (password1, password2) {
	 		if (password1 === password2){

	 		}
	 	}
	</script>
  </body>
</html>