<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <?php wp_head(); ?>
 		<title>	</title>

</head>



<body <?php body_class(); ?>>

<section id="header">

	<div class="header-content">
		<div class="header-content__logotipo">
			<h1>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logotipo.png"></h1>
		</div>

		<div class="action">
			
		<div class="action__nav">
			<ul>
				<li>
					<a>Markets</a>
					<div class="ul-container">
						<div class="ul-container__content">
								<a>teste</a>
						</div>
					</div>
				</li>
				<li><a href="#">Our Products</a></li>
				<li><a href="#">Showcase</a></li>
				<li><a href="#">Education Hub</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
		<div class="action__search">
			<i class="fas fa-search"></i>
		</div>
		<div class="action__button">
			<a href="#" title="VIP PORTAL">VIP PORTAL</a>
		</div>
		</div>
	</div>	
	
</section>