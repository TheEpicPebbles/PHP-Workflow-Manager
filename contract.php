<?php
date_default_timezone_set("America/Chicago");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	      <meta name="author" content="Juan Carlos Mancilla Jr">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	      
		<!--CSS-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

		<!--JS-->
	      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Terms Of Service Printout 📜</title>
</head>
<body class="d-inline-block justify-content-center bg-light">
	<div class="d-inline-block justify-content-center">
		<div class="d-flex justify-content-center">
				<img src="images\siteImages\Sherlock_Logo.png" style="border-radius: 8px;">
			</div>
		<div class="d-flex justify-content-center">
			<?php
				echo "
				<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
				<link href=\"https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap\" rel=\"stylesheet\">
				<style>
					* { font-family: 'DM Serif Display', serif; }
				</style>
				<p class=\"text-center text-dark\" style=\"width: 75%; line-height: 5vh; margin-top: 5%; font-size: 16px;\">
						<br>
						We have the right to reject Repairs. We take the device as is, all problems that are permitted for repair
                              must be mentioned, otherwise what is written in the problem description is what we work on to repair. There is a NON-REFUNDABLE 💲30 deposit for the repair attempt fee, if we are able to succesfully repair your device, the deposit goes towards the total cost of the repair.
                              Unless otherwise stated, we have a 90 day warranty based on the completed repair date, we will only accept warranty with a valid receipt. We do not accept warranty on liquid damage repairs. We can not gauruntee water-proof devices, only water-resistance. We have the right to take ownership of a device if it hasn't been picked up after 90 days after the repair has been completed, with no contact from the customer. We can't gauruntee what we aren't able to test will work after the repair.
						<br>
						<br>
						I the customer of DPC Computer Repair Inc. , agrees to the Terms of Service aforementioned by DPC Computer Repair Inc.
						<br>
						Name: _____________________Signature: _________________________ Date: 
						<br>
						<br>
					</p>";
			?>
		</div>
	</div>
</body>
<footer>
	<a style="position:absolute; left: 50%; top: 70%;" class="btn-light p-1 rounded" href="javascript: alert('Please remember to press F11 to make the window fullscreen, to set printer to print in landscape mode & make sure to go to: More Settings > Options > Enable Background Graphics! & NO MARGINS!'); window.print()">🖨️</a>
</footer>
</html>