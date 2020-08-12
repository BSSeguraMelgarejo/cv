<!DOCTYPE html>
<html>
<head>
	<title>Brayan Segura</title>

	<meta charset="utf-8">
	<meta name="description" content="This is the Brayan Segura's Curriculum Vitae"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="css/all.min.css" rel="stylesheet">

	<link rel="stylesheet" href="styles.css">

</head>
<body>

<?php
require_once('navbar.php');
?>

<header class="v-header">
	<div class="background-wrap">
		<video id="video" preload="auto" autoplay="auto" loop="loop" muted="muted">
			<source src="video/background.mp4" type="video/mp4">
		</video>
	</div>
	<div class="overlay"></div>
	<div class="inter">
		<img src="img/pic.jpg" alt="image" class="imgBrayan">
		<h1 class="name">Brayan Segura</h1>
	</div>
</header>

<main class="container">
	<div class="row d-flex justify-content-center profile">
		<h2 class="col-12 profileTitle Title">
		PROFILE
		</h2>
		<p class="col-12 profileText Text">I am a ninth semester student of Multimedia Engineering
at the Universidad Militar Nueva Granada. I am part of the
Research Seedbed "La Tramoya" where I carry out a
research project in animation and digital narratives. Media
producer in the "Cero Crisis Films" photography and video
group at the same University. I made an academic
exchange with the Universidad Autónoma de Entre Ríos
in Argentina during the first semester of 2019, being part
of the research group "Increasing Capacities" as a
multimedia designer and studying subjects in the careers
of Lic. In Automation and Control of Industrial Processes
and Lic. In Information Systems. I am currently doing my
undergraduate work in artificial intelligence applied to
image processing.</p>
	</div>
	
	<div class="row d-flex justify-content-center work">
		<h2  class="col-12 Title">
			MY WORK
		</h2>
		<p class="col-12 Text">I've work in a differents projects. Let me show you:</p>
	
		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 itemWork">
			<div class="row">
				 <h3 class="col-12">
				 	2D Animation REEL 2018
				 </h3>
				 <iframe class="col-12" width="560" height="315" src="https://www.youtube.com/embed/MU1zwVmFy-o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
			</div>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 itemWork">
			<div class="row">
				 <h3 class="col-12">
				 	Render (The Shining) 2020
				 </h3>
				 <iframe class="col-12" width="560" height="315" src="https://www.youtube.com/embed/1GeEAj6gVD8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
			</div>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 itemWork">
			<a href="https://www.comercializadoramass.com" target="_blank"><div class="row">
				 <h3 class="col-12">
				 	WEB Comercializadora MASS 2020
				 </h3>
				 <img class="col-12" src="img/comercializadoramass.png" alt="comercializadoramass">
				
			</div></a>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 itemWork">
			<a href="http://relumbra.000webhostapp.com/" target="_blank"><div class="row">
				 <h3 class="col-12">
				 	WEB Relumbra project 2019
				 </h3>
				 <img class="col-12" src="img/relumbra.png" alt="relumbra">
				
			</div></a>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 itemWork">
			<a href="https://www.artstation.com/brayansegura/" target="_blank"><div class="row">
				 <h3 class="col-12">
				 	Render/Modeling Artstation
				 </h3>
				 <img class="col-12" src="img/artstation.jpg" alt="artstation">
				
			</div></a>
		</div>

		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 itemWork">
			<a href="https://brayansegura.carbonmade.com/blog" target="_blank"><div class="row">
				 <h3 class="col-12">
				 	Illustration Carbonmade
				 </h3>
				 <img class="col-12" src="img/carbonmade.png" alt="Illustration">
				
			</div></a>
		</div>
		
	</div>

</main>

<?php
require_once('footer.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>