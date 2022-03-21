<!DOCTYPE html>
<html lang="en">

<head>
 	<title>Feedback Form</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">		
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Style2.css">

</head>

<body>	

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
			<h1 class="text-center mt-5 font-weight-bold">Provide your feedback below</h1>
			<hr class="bg-white">
			<h3 class="mt-4">Express your experience?</h3>
             
			<form class= "formf"action = "php/feedbacksubmission.php" method = "POST">
				<label class="radio-inline"><input type="checkbox" name="experience" value="bad">Bad</label>
				<label class="radio-inline"><input type="checkbox" name="experience" value="average">Average</label>
				<label class="radio-inline"><input type="checkbox" name="experience" value="good">Good</label>

			</div>
			</div>					

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-4">Full Name*<br>
					<input type="text" id="text" name="fullname" ></label>

					<label class="col-md-4">Email*<br>
					<input type="text" id="text" name="email" ></label>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<label class="col-md-8">Message*<br>
					<textarea id="message" name="message" placeholder="Write yor message here" cols="48" rows="5"></textarea></label>
			</div>

            <div class="row">
				<div class="col-md-2"></div>
				<button class="Submit">Submit</button>
			</div>
            <div class="row">
				<div class="col-md-2"></div>
				<button class="Back">Back</button>
			</div>
			</form>
</div>

</body>
</html>  