<!DOCTYPE html>
<head>
	<?php wp_head(); ?>
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
</head>
<body>
	<header class="page-header">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
			 	<a class="navbar-brand" href="#">Restaurant</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    	<i class="fas fa-bars navbar-toggler-icon"></i>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="#">Home</a>
					    </li>
					    <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
			        		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          			<a class="dropdown-item" href="#">Breakfast</a>
			          			<a class="dropdown-item" href="#">Lunch</a>
			          			<a class="dropdown-item" href="#">Dinner</a>
			          			<a class="dropdown-item" href="#">Beverages</a>
			        		</div>
			      		</li>
			      		<li class="nav-item active">
			        		<a class="nav-link" href="#">Contact</a>
					    </li>
			    	</ul>
			  	</div>
			</div>
		</nav>
		<section class="title-section">
					<div class="container h-100">
						<div class="title-section-content">
							<h1 class="header-title">Name</h1>
							<p class="header-subtitle">This is a subtitle.</p>
						</div>
					</div>
		</section>
	</header>