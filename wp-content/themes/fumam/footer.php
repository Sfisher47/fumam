<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fumam
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3 mb-5 mb-md-0">
						<h5 class="title">Service Client</h5>
						<div class="fs-4 d-flex align-items-center py-3">
							<!-- <i class="fa-solid fa-headphones fa-2x me-3"></i> -->
							<i class="bi bi-headset fs-1 me-3"></i>
							(+1) 416-961-0542
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur <br> 
							adipisicing elit tempore assumenda.
						</p>
						<div class="network">

						</div>
					</div>
					<div class="col-md-3 mb-5 mb-md-0">
						<h5 class="title">Aide & Support</h5>
						<ul class="nav flex-column">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0">FAQ</a> 
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0">Vie privée</a> 
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0">Nous Contactez</a> 
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0">Terms &amp; conditions</a> 
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0"></a> 
							</li>
						</ul>
					</div>
					<div class="col-md-3 mb-5 mb-md-0">
						<h5 class="title">Mon Compte</h5>
						<ul class="nav flex-column">
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0">Mon Compte</a> 
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0">Mes Commandes</a> 
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0">Favoris</a> 
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link text-reset ps-0"></a> 
							</li>
						</ul>
					</div>
					<div class="col-md-3 mb-5 mb-md-0">
						<h5 class="title">Contact Infos</h5>
						<ul class="nav flex-column">
							<li class="nav-item">
								<a href="tel:(+1) 416-961-0542" class="nav-link text-reset ps-0">
									<i class="fas fa-location-dot me-2 text-primary"></i>
									(+1) 416-961-0542
								</a> 
							</li>
							<li class="nav-item">
								<a href="mailto:IdellaRGregg@jourrapide.com" class="nav-link text-reset ps-0">
									<i class="fas fa-envelope me-2 text-primary"></i>
									IdellaRGregg@jourrapide.com
								</a> 
							</li>
							<li class="nav-item">
								<span href="#" class="nav-link text-reset ps-0">
									<i class="fas fa-phone me-2 text-primary"></i>
									4417 St Jean Baptiste St
									St Ephrem De Beauce, QC G0M 1R0
								</span> 
							</li>
						</ul>
					</div>
					<div class="col-12 pt-4 d-flex justify-content-start">
						<a href="#" class="network-link text-white text-decoration-none border border-white d-flex justify-content-center align-items-center">
							<i class="fa-brands fa-facebook-f"></i>
						</a>
						<a href="#" class="network-link text-white text-decoration-none border border-white d-flex justify-content-center align-items-center ms-3">
							<i class="fa-brands fa-twitter"></i>
						</a>
						<a href="#" class="network-link text-white text-decoration-none border border-white d-flex justify-content-center align-items-center ms-3">
							<i class="fa-brands fa-linkedin-in"></i>
						</a>
						<a href="#" class="network-link text-white text-decoration-none border border-white d-flex justify-content-center align-items-center ms-3">
							<i class="fa-brands fa-instagram"></i>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="footer-bar">
			<div class="container">
				<div class="row">
					<div class="col-12 site-info">
						<div class="">Copyright &copy; 2022 - Sfisher47 | Douala, Cameroun</div>
					</div>
				</div>
			</div>
		</section>

		
		
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fumam' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fumam' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fumam' ), 'fumam', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
