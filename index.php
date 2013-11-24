<?php session_start() ?>
<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Traclyst</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.js"></script>
	<style type="text/css">
		.drop{
			text-shadow: 0px 1px 1px #4d4d4d;
			font-size:20px;
			color: white;
			font-weight:100;
		}
		#BG{
			position: fixed; 
			top: 0; 
			left: 0; 
				
			/* Preserve aspet ratio */
			min-width: 100%;
			min-height: 100%;
		}
		.tbox{
			color:#fff;
		}
		.zbox{
			background-color: rgba(51, 51, 51, 0.7);
			border-radius: 10px;
		}
		.zbox p{
			color:#fff;
			/*font-weight: 100;*/
		}

		.ui-helper-hidden-accessible{
			display: none !important;
		}

		.ui-menu-item{
			list-style-type: none;
		}

		.ui-autocomplete{
			top:-450px !important;
		}
	</style>
  </head>
  <body>
	<img src="img/images_3137_1.jpg" id="bg" alt="">
	<?php include 'header.php'; ?>
		<div class= "panel" style="padding: 100px 10px; background-color: rgba(51, 51, 51, 0.7); position: relative; margin-top: 150px; border: none;">
			<div class = "row" style="margin-left: 250;">

				<div class="large-12 columns drop" style="margin-left: 7.5%;">
					<h1 class = "drop" style = "font-size: 70px; color: white; margin-left: 213; margin-right: 200; top: -50; position:relative;">Traclyst</h1>
					<h3 class = "drop" style = "font-size: 36px; color: white;margin-left: 10.5%; top: -20; position: relative;">Best Contractors. No Hassle. </h3>
				<div class="row drop" >
					<div class="large-4 medium-4 columns">
						<label class = "drop">Zip-Code</label>
						<input class="" id="next" type="text" placeholder="Enter Zip-Code" style="height:35px !important;" />
					</div>
				<div class="large-4 medium-4 columns">
					<label class = "drop" >Service</label>
					<!--<select id="option">
						<option value="plumbing">Plumber</option>
						<option value="electrical">Electrical</option>
						<option value="cleaning">Cleaning</option>
						<option value="landscape">Landing</option>
					  </select>-->
					  <input class="" id="next2" type="text" placeholder="Enter Service" style="height:35px !important;" />
				</div>
				<div class="large-4 medium-4 columns">
					<input type="submit" class="tiny button" value="Next" onclick="getData()" style="margin-top: 27.5px; height: 35px;" />
				</div>
			</div>
		</div>
		</div>
		</div>
			
		<div class="row text-center" id="box1" >
			<div class="small-2 large-4 columns text-center zbox" style="right:20" id="accordion">
				<h1 class="tbox">Testimonials</h1>

				<p>
					Single sign-on enables your customers to grant you access to their Google profile information. This data can then be used in the payment flow to simplify login and account creation on your site and help increase conversion rates.

				</p>
			</div>

  			<div class="small-4 large-4 columns text-center zbox">
  				<h1 class="tbox">Reliable</h1>

  				<p>
					Single sign-on enables your customers to grant you access to their Google profile information. This data can then be used in the payment flow to simplify login and account creation on your site and help increase conversion rates.
					
				</p>

  			</div>

 			<div class="small-6 large-4 columns text-center zbox" style="left:20">
 				<h1 class="tbox">Efficient</h1>

 				<p>
					Single sign-on enables your customers to grant you access to their Google profile information. This data can then be used in the payment flow to simplify login and account creation on your site and help increase conversion rates.
					
				</p>

 			</div>
		</div>

		<?php include 'footer.php'; ?>

	<script src="js/jquery.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/data/YelpParser.js"></script>
	<script>
	  $(document).foundation();
	  $(function() {
    	$( "#accordion" ).accordion();
  	  });
  	  $(function() {
		    options = ["Plumber","Electrical","Cleaning", "Landscape"];
		           $("#next2").autocomplete({
		        source: options
		    });
		});
	</script>
  </body>
</html>
