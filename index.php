<!DOCTYPE html>
<head>
	<?php wp_head(); ?>
</head>
<body>
	<header class="bg-light">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
			 	<a class="navbar-brand" href="#">Navbar</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    	<ul class="navbar-nav">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
			</nav>
			<div class="title-section">
				<h1 class="header-title">Restaurant Name</h1>
				<p class="header-subtitle">Subtitle</p>
			</div>
		</div>
	</header>
	<main role="main">
		<section class="container main-section mission-section">
			<header class="section-header">
				<h2 class="section-title">About Us</h2>
			</header>
			<p class="section-content">Insert some info here.</p>
		</section>
		<section class="container main-section menu-section">
			<header class="section-header">
				<h2 class="section-title">See Our Menu</h2>
			</header>
			<article class="menu-section-card">
				<h3 class="menu-section-card-title">Breakfast</h3>
				<p class="menu-section-card-content">Browse this page</p>
			</article>
			<article class="menu-section-card">
				<h3 class="menu-section-card-title">Lunch</h3>
				<p class="menu-section-card-content">Browse this page</p>
			</article>
			<article class="menu-section-card">
				<h3 class="menu-section-card-title">Dinner</h3>
				<p class="menu-section-card-content">Browse this page</p>
			</article>
			<article class="menu-section-card">
				<h3 class="menu-section-card-title">Beverages</h3>
				<p class="menu-section-card-content">Browse this page</p>
			</article>
		</section>
	</main>
	<footer class="page-footer bg-light">
		<div class="container">
			<div class="row">
				<div class="col">
					<section class="footer-section">
						<header class="footer-section-header">
							<h4 class="footer-section-title">Our Mission</h4>
						</header>
						<p class="footer-section-content">This is our mission statement.</p>
					</section>
					<section class="footer-section">
						<header class="footer-section-header">
							<h4 class="footer-section-title">Social Media</h4>
						</header>
						<ul class="footer-section-list">
							<li class="footer-section-list-item"><i class="fab fa-facebook-f"></i></li>
							<li class="footer-section-list-item"><i class="fab fa-twitter"></i></li>
							<li class="footer-section-list-item"><i class="fab fa-linkedin-in"></i></li>
							<li class="footer-section-list-item"><i class="fab fa-youtube"></i></li>
						</ul>
					</section>
				</div>
				<div class="col">
					<section class="footer-section">
						<header class="footer-section-header">
							<h4 class="footer-section-title">Location</h4>
						</header>
						<p class="footer-section-content">1234 Address St.<br />City, ST 12345</p>
					</section>
					<section class="footer-section">
						<header class="footer-section-header">
							<h4 class="footer-section-title">Hours</h4>
						</header>
						<p class="footer-section-content">8am - 10pm Mon-Fri<br />8am - 12am Sat<br />Closed Sundays</p>
					</section>
				</div>
				<div class="col">
					<section class="footer-section">
						<header class="footer-section-header">
							<h4 class="footer-section-title">Menu</h4>
						</header>
						<ul class="footer-section-list">
							<li class="footer-section-list-item">Breakfast</li>
							<li class="footer-section-list-item">Lunch</li>
							<li class="footer-section-list-item">Dinner</li>
							<li class="footer-section-list-item">Beverages</li>
						</ul>
					</section>
					<section class="footer-section">
						<header class="footer-section-header">
							<h4 class="footer-section-title">Other Links</h4>
						</header>
						<ul class="footer-section-list">
							<li class="footer-section-list-item">Careers</li>
						</ul>
					</section>
				</div>
				<div class="col">
					<section class="footer-section">
						<header class="footer-section-header">
							<h4 class="footer-section-title">Contact Us</h4>
						</header>
						<form>
							<div class="form-group">
		    					<label for="email">Email Address</label>
		    					<input type="email" id="email" class="form-control">
		    				</div>
		    				<div class="form-group">
		    					<label for="name">Name</label>
		    					<input type="text" id="name" class="form-control">
		    				</div>
		    				<div class="form-group">
		    					<label for="message">Message</label>
		    					<textarea name="message" id="message"></textarea>
		    				</div>
		    				<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</section>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>