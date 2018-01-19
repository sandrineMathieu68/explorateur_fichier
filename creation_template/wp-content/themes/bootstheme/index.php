<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="descrition" content="Ceci est un premier template wordpress en utilisant bootstrap 4"/>
	

	<?php wp_head(); ?>
</head>
<body>

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

<?php
        wp_nav_menu( array(
        	'menu'              => 'top-menu',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbar',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
?>


		</div><!-- /container -->
	</nav>
</header>




	<div class="container mar">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/n2.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>
						
					</div>
					
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/fond3.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>
						
					</div>
					
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/n10.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>	
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/n3.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>
						
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/card1.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/card2.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>	
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/n2.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card mb-4">
					<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/image/card2.jpg" alt="une image">
					<div class="card-body text-center">
						<p class="titi">Oneness</p>
						<h6 class="tititi">Velvet Sequins Open Back</h6>
						<p class="price">$5<span class="biais">9,9</span>0</p>
					</div>
				</div>
			</div>

		</div>		
	</div>



	<?php wp_footer(); ?>

</body>
</html>