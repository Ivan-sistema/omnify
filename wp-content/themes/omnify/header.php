<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <?php wp_head(); ?>
 		<title>	</title>

</head>



<body <?php body_class(); ?>>



<div id="header">
	<div class="nav">
		<ul>
			<li class="nav__content active" data-section="#banner">
				<a href="#banner">
					<div class="brand">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/brand-menu.png">
					</div>
				</a>
			</li>
			<li class="nav__content" data-section="#about">
				<a href="#about">
					<div class="icon">
						<img class="img__config--home" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/home.png">
					</div>
					<div class="link">
						<span>Home</span>
					</div>
				</a>
			</li>
			<li class="nav__content" data-section="#service">
				<a href="#service">
					<div class="icon">
						<img class="img__config--service" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/service.png">
					</div>
					<div class="link"><span>Serviços</span></div>
				</a>
			</li>
			<li class="nav__content">
				<a href="#beneficios">
					<div class="icon">
						<img class="img__config--beneficios" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/beneficios.png">
					</div>
					<div class="link"><span>Benefícios</span></div>
				</a>
			</li>

			<li class="nav__content">
				<a href="#cases">
					<div class="icon">
						<img class="img__config--cases" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/cases.png">
					</div>
					<div class="link"><span>Cases</span></div>
				</a>
			</li>
			<li class="nav__content">
				<a href="#orcamento">
					<div class="icon">
						<img class="img__config--orcamento" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/orcamento.png">
					</div>
					<div class="link">
						<span>Orçamento</span>
					</div>
				</a>
			</li>
			<li class="nav__content">
				<a href="#orcamento">
					<div class="icon">
						<img class="img__config--parceiro" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/parceiro.png">
					</div>
					<div class="link">
						<span>Parceiro</span>
					</div>
				</a>
			</li>
			<li class="nav__content">
				<a href="https://api.whatsapp.com/send?phone=5511975168813" target="_blank">
					<div class="icon icon__whatsapp">
						<img class="img__config--social" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones/whatsapp.png">
					</div>
					<div class="link link--green"><p>11<span> 97516-8813</p></div>
				</a>
			</li>
		</ul>

		</div>
	</div>
</div>


<div id="header-mobile">
	<div class="nav">
		<ul>
			<li class="have-border">
				<a hre="#about" title="Reformarq">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/home.png" alt="Reformarq">
					<span>Home</span>
				</a>
			</li>
			<li class="have-border">
				<a hre="#service" title="Reformarq | Serviços">
					<img class="img__config--service" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/service.png" alt="Reformarq | Serviços">
					<span>Serviços</span>
				</a>
			</li>
			<li class="have-border">
				<a hre="#beneficios" title="Reformarq | Diferenciais">
					<img class="img__config--diferenciais" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/diferenciais.png" alt="Reformarq | Diferenciais">
					<span>Diferenciais</span>
				</a>
			</li>
			<li class="have-border">
				<a hre="#cases" title="Reformarq | Cases">
					<img class="img__config--cases" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/cases.png" alt="Reformarq | Cases">
					<span>Cases</span>
				</a>
			</li>
			<li class="have-border">
				<a hre="#orcamento" title="Reformarq | Orçamento">
					<img class="img__config--orcamento" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/orcamento.png" alt="Reformarq | Orçamento">
					<span>Orcamento</span>
				</a>
			</li>
			<li class="have-border">
				<a hre="#parceiro" title="Reformarq | Parceiro">
					<img class="img__config--parceiro" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/parceiro.png" alt="Reformarq | Parceiro">
					<span>Parceiro</span>
				</a>
			</li>
			<li class="whatsapp-color">
				<a hre="https://api.whatsapp.com/send?phone=5511975168813" target="_blank" title="Reformarq | Whatsapp">
					<img class="img__config--whatsapp" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/whatsapp.png" alt="Reformarq | Whatsapp">
					<span>11 97516-8813</span>
				</a>
			</li>
			<li class="info">
				<p>Reformarq <br/>
				<span>Obras completas arquitetônicas</span></p>
				<div class="info-social">
					<a href="#" title="Reformarq | Email" target="__blank">
						<img class="img__config--email" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/email.png" alt="Reformarq | Email">
					</a>
					<a href="#" title="Reformarq | Facebook" target="__blank">
						<img class="img__config--facebook" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/facebook.png" alt="Reformarq | Facebook">
					</a>
					<a href="#" title="Reformarq | Instagram" target="__blank">
						<img class="img__config--instagram" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/instagram.png" alt="Reformarq | Instagram">
					</a>
					<a href="#" title="Reformarq | Linkedin" target="__blank">
						<img class="img__config--linkedin" src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/linkedin.png" alt="Reformarq | Linkedin">
					</a>
				</div>
			</li>
		</ul>
	</div>
	<div class="action">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icones-mobile/open-nav.png">
	</div>
	
</div>