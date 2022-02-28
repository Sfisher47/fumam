<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fumam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fumam' ); ?></a>

	<div class="top-bar hidden-md-down d-none d-lg-block">
		<div class="container clearfix">
			<div class="row py-2">
				<div class="col-md-6">
					<ul class="nav nav-inline float-start menu-top-bar-start">
						<li class="menu-item menu-item--custom">
							<i class="fa-solid fa-circle-info me-1"></i> 
							Livraison express et retour des produits en 24 heures
						</li>
					</ul>
				
				</div>
				<div class="col-md-6">
					<ul class="nav nav-inline float-end menu-top-bar-end">
						<li class="menu-item menu-item--custom">
							<i class="fa-solid fa-phone me-1"></i> 
							(+1) 416-961-0542
						</li>
						<li class="menu-item menu-item--custom">
							<i class="fa-solid fa-location-dot me-1"></i> 
							Quebec, Canada
						</li>
						<li class="menu-item menu-item--custom">
							<a href="<?php bloginfo('url')?>">
								<i class="fa-solid fa-user me-1"></i> 
								Mon Compte
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header">
		<div class="hidden-md-down d-none d-lg-block">
			<div class="container">
				<div class="masthead row align-items-center">
					<div class="header-logo-area">
						<a href="<?php bloginfo('url')?>">
						<?php // the_custom_logo(); ?>
							<img src="<?php echo get_assets('/images/fumam_logo.jpg')?>" alt="fumam-logo"/>
						</a>
					</div>
					<form action="" class="navbar-search col w-100">
						<label class="sr-only screen-reader-text visually-hidden" for="search">Rechercher:</label>
						<div class="input-group">
							<div class="input-search-product">
								<input type="text" class="form-control product-search-field" name="s" placeholder="Rechercher..." autocomplete="false">
							</div>
							<div class="input-group-addon input-seach-category">
								<select name="product_cat" class="form-control category-search-field">
									<option>Catégories</option>
								</select>
							</div>					
							<div class="input-group-btn input-seach-button">
								<input type="hidden" id="search-param" name="post_type" value="product">
								<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
							</div>
						</div>
					</form>
					<div class="header-icons col-auto">
						<a 	href="<?php echo esc_url(wc_get_cart_url()); ?>" 
							class="cart-customlocation dropdown-toggle" 
							title="<?php echo esc_html__( 'Voir le panier' ); ?>"
							data-bs-toggle="tooltip" data-bs-placement="bottom">
	
							<i class="fas fa-cart-shopping cart-items-icon"></i>
							<span class="cart-items-count count header-icon-counter">
								<?php echo sprintf( '%d', WC()->cart->get_cart_contents_count() ); ?>
								<!-- <?php  echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?> -->
							</span>
						</a>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<?php
					wp_nav_menu(
						array(
							'theme_location' 	   => 'menu-1',
							'menu_class'	 	   => 'navbar-nav' ,       
							'container'            => '',
							'li_class'			   => 'nav-item',
							'active_class'		   => 'active',
							'link_class'		   => 'nav-link text-reset',
							'depth'                => 0,
						)
					);
					?>
				</div>
			</nav>
		</div>
		<div class="handheld-header-wrap hidden-lg-up d-lg-none">
			<nav class="navbar navbar-light bg-white fixed-top py-3 px-2">
				<div class="container-fluid">
					<div class="navbar-brand header-logo-area">
						<a href="<?php bloginfo('url')?>">
						<?php // the_custom_logo(); ?>
							<img src="<?php echo get_assets('/images/fumam_logo.jpg')?>" alt="fumam-logo"/>
						</a>
					</div>
					<div class="header-icons ms-auto pt-2 me-5">
						<a href="#" class="text-fu-secondary fs-4" data-ref="btn-search-toggle"><i class="bi bi-search"></i></a>
						<a href="#" class="text-fu-secondary fs-3 ms-4"><i class="bi bi-person"></i></a>
						<a 	href="<?php echo esc_url(wc_get_cart_url()); ?>" 
							class="cart-customlocation dropdown-toggle fs-3 ms-4" 
							title="<?php echo esc_html__( 'Voir le panier' ); ?>">
	
							<!-- <i class="fas fa-cart-shopping cart-items-icon"></i> -->
							<i class="bi bi-cart3 text-fu-secondary"></i>
							<span class="cart-items-count count header-icon-counter">
								<?php echo sprintf( '%d', WC()->cart->get_cart_contents_count() ); ?>
								<!-- <?php  echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?> -->
							</span>
						</a>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<!-- <span class="navbar-toggler-icon"></span> -->
						<i class="bi bi-list"></i>
					</button>
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<!-- <div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div> -->
						<div class="offcanvas-body p-0">										
							<?php
								wp_nav_menu(
									array(
										'theme_location'   => 'menu-1',
										'menu_class'	   => 'navbar-nav justify-content-end flex-grow-1' ,       
										'container'        => '',
										'li_class'		   => 'nav-item',
										'active_class'	   => 'active',
										'link_class'	   => 'nav-link text-reset',
										'depth'            => 0,
									)
								);
							?>
						</div>
					</div>
				</div>
				<div class="search-form-container position-absolute top-100 start-0 end-0 py-4 bg-white border-top border-fu-primary" style="display: none;">
					<form action="" class="navbar-search col w-100">
						<label class="sr-only screen-reader-text visually-hidden" for="search">Rechercher:</label>
						<input type="text" class="form-control shadow-none border-0 px-5" name="s" placeholder="Rechercher..." autocomplete="false">
						<input type="hidden" id="search-param" name="post_type" value="product">
						<!-- <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button> -->
					</form>

					<div class="position-absolute top-0 bottom-0 end-0 d-flex align-items-center me-3"><i class="bi bi-search fs-3"></i></div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col-12">
					</div>
				</div>
			</div>
		</div>
		<?php if ( is_front_page() ): ?>
		<div class="hero">
			<div class="hero-cover position-absolute top-0 bottom-0 start-0 end-0">				
			</div>
			<div class="hero-content">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7 hero-content__box">
							<div class="mb-5">
								<p>Nos formateurs sont des professionnels</p>
								<h1>Offrir une expérience client au-delà des attentes</h1>
								<p>
									Nous nous engageons à vous offrir toujours notre excellent 
									service et des réponses solidement éprouvées. Avec son expérience dans le domaine de la formation médicale									
								</p>
							</div>
							<a class="hero-action text-reset text-white text-decoration-none">Explorer les produits</a>
						</div>
					</div>
				</div>
			</div>				
		</div>
		<?php endif; ?>
		<!-- <div class="site-branding">
			<?php
			
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fumam_description = get_bloginfo( 'description', 'display' );
			if ( $fumam_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fumam_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div> -->
		<!-- .site-branding -->
	</header><!-- #masthead -->
