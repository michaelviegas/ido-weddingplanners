﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>I do. Wedding planners</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="content/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="content/custom.css">
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php 
	if(isset($_POST['submit'])){
		$to = "idowedplanners@gmail.com";
		$from = $_POST['email'];
		$name = $_POST['name'];
		$subject = "CONTACT";
		$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
		$headers = "From:" . $from;
		mail($to, $subject, $message, $headers);		
		echo "<script>
		alert('Mail Sent. Thank you " . $name . ", we will contact you shortly.');
		</script>";
	}
	?>
	<nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
				<div class="container">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-button-text">Menu</span>
					</button>	
				</div>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav nav-justified">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contatos</a></li>
                </ul>				
            </div>			
        </div>
    </nav>
	
    <div class="container body-content">

		<div class="logo-mobile">
			<img src="images/logo.png" />
		</div>	
	
		<div class="carousel-container">
		
			<div id="ido-carousel" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="hover">		
				<div class="logo-carousel">
					<img src="images/logo.png" />
				</div>
				<ol class="carousel-indicators">
					<li data-target="#ido-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#ido-carousel" data-slide-to="1"></li>
					<li data-target="#ido-carousel" data-slide-to="2"></li>				
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/carrousel-1.jpg" alt="" style="height: 100%; width: 100%;" />
					</div>
					<div class="item">
						<img src="images/carrousel-2.jpg" alt="" style="height: 100%; width: 100%;" />
					</div>
					<div class="item">
						<img src="images/carrousel-3.jpg" alt="" style="height: 100%; width: 100%;" />
					</div>
				</div>			
			</div> 	
			<div class="spacer"></div>
		</div>
		
        <div id="portfolio" class="page-header">
            <h2>Portfolio</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="images/row-1.jpg" alt="" style="height: 100%; width: 100%;" />
            </div>
            <div class="col-md-4">
                <img src="images/row-2.jpg" alt="" style="height: 100%; width: 100%;" />
            </div>
            <div class="col-md-4">
                <img src="images/row-3.jpg" alt="" style="height: 100%; width: 100%;" />
            </div>
        </div>

        <div id="services" class="page-header">
            <h2>Services</h2>
        </div>
		<div class="row">
			<div class="col-md-4">
				<h3>The month-of planning</h3>
				<p>The month-of planning is a perfect solution for the bride who is organized and is looking to plan her wedding, but needs someone to step in to finalize all major details the month before the big day. We will contact all of your vendors and make sure nothing has slipped through the cracks. We will also provide your day-of coordinating from start to finish.</p>				
			</div>
			<div class="col-md-4">
				<h3>The partial planning package</h3>
				<p>The partial planning package is for the client that has already booked the venue, but needs help through the rest of the planning process. This package does not include our design service, but you can add it on separately.</p>
			</div>
			<div class="col-md-4">
				<h3>The full-service planning package</h3>
				<p>The full-service planning package is for the busy bride that wants to relay her ideas and vision, but allow us to handle every single detail from start to finish. We will also design your event so everything is cohesive and just the way you envisioned it.</p>
			</div>		
		</div>		  
		
        <div id="contact" class="page-header">
            <h2>Contacts</h2>
        </div>
		<form id="contactForm" action="" method="post" class="form-horizontal" data-toggle="validator" role="form">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input class="form-control" name="name" id="name" required>
				</div>
			</div>		
		
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">E-mail address</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="email" required>
				</div>
			</div>
		
			<div class="form-group">
				<label for="message" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="message" id="message" required></textarea>
				</div>
			</div>	
		
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="submit" class="btn btn-default">Send message</button>
				</div>
			</div>
		</form>		
	</div>

    <script src="scripts/jquery-2.1.3.min.js"></script>
    <script src="scripts/bootstrap.js"></script>
    <script src="scripts/respond.js"></script>
	<script src="scripts/validator.js"></script>
</body>
</html>
