<?php get_header(); ?>
	<main role="main">
		<section class="main-section about-section">
			<div class="container about-section-container">
				<header class="section-header">
					<h2 class="section-title">About Us</h2>
				</header>
				<p class="section-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
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