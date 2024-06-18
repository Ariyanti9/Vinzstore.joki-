<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		$stickyheader = esc_attr(musicclass_sticky_menu());
		$topheader_phonetext = esc_attr(get_theme_mod('topheader_phonetext','1-222-2333-33'));

	?>
<div class="main">
    <header class="main-header site-header <?php echo esc_attr(musicclass_sticky_menu()); ?>">
		<div class="container-fluid"> 
			<div class="header-section">
				<div class="headfer-content ">
					<div class="row m-rl">
						<div class="col-lg-3 col-md-5 col-sm-6  pd-0 logo-box">
							<div class="site-logo">
								<?php
								if(has_custom_logo())
									{	
										the_custom_logo();
									}
									else { 
								?>
								<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
									<?php 
										echo esc_html(bloginfo('name'));
									?>
								</a>	
								<?php 						
									}
								?>
							</div>
							<div class="box-info">
								<?php
									$musicclass_site_desc = get_bloginfo( 'description');
									if ($musicclass_site_desc) : ?>
										<p class="site-description"><?php echo esc_html($musicclass_site_desc); ?></p>
								<?php endif; ?>
							</div>
						</div>
						
						<div class="col-lg-9 col-md-7 col-sm-6  topheadbx pd-0">
							<div class="bottomhead">
								<div class="row m-0">
									<div class="col-lg-10 col-md-12 col-sm-12">
										<div class="doticon">
											<i class="fa fa-circle" aria-hidden="true"></i>
										</div>
										<div class="menu">
											<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
												<span class="toggle-inner">
													<span class="toggle-icon">
														<i class="fa fa-bars"></i>
													</span>
												</span>
											</button><!-- .nav-toggle -->
											<div class="header-navigation-wrapper">

											<?php
											if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
											?>

												<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'music-class' ); ?>">

													<ul class="primary-menu reset-list-style">

													<?php
													if ( has_nav_menu( 'primary_menu' ) ) {

														wp_nav_menu(
															array(
																'container'  => '',
																'items_wrap' => '%3$s',
																'theme_location' => 'primary_menu',
															)
														);

													} elseif ( ! has_nav_menu( 'expanded' ) ) {

														wp_list_pages(
															array(
																'match_menu_classes' => true,
																'show_sub_menu_icons' => true,
																'title_li' => false,
																'walker'   => new MusicClass_Walker_Page(),
															)
														);

													}
													?>
													</ul>
												</nav><!-- .primary-menu-wrapper -->

											<?php } ?>
											</div><!-- .header-navigation-wrapper -->
											<?php
											// Output the menu modal.
											get_template_part( 'template-parts/sections/modal-menu' );
											?>

										</div>
										
									</div>
									<div class="col-lg-2 col-md-12 col-sm-12 pd-0">
										<?php if (get_theme_mod('topheader_btntext')) {?>
										<div class="mb-n">
											<div class="hbtn">
												<a class="btn" href="<?php echo esc_html(get_theme_mod('topheader_btnlink')); ?>"><?php echo esc_html(get_theme_mod('topheader_btntext')); ?><i class="fa fa-phone-square"></i>
												</a>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </header>
	<div class="clearfix"></div>
</div>

