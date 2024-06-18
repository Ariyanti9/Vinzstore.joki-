<?php
function musicclass_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'musicclass_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'musicclass_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'musicclass_custom_header_setup' );

if ( ! function_exists( 'musicclass_header_style' ) ) :

function musicclass_header_style() {
	$header_text_color = get_header_textcolor();

	$aboutus_disable_section = esc_attr(get_theme_mod('aboutus_disable_section','YES'));
  	$service_disable_section = esc_attr(get_theme_mod('service_disable_section','YES'));
  	$blog_disable_section = esc_attr(get_theme_mod('blog_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		header .bottomhead {
			background: <?php echo esc_attr(get_theme_mod('header_bgcolor')); ?>;
		}

		header .bottomhead {
			border-color: <?php echo esc_attr(get_theme_mod('header_outerbordercolor')); ?>;
		}

		.header-section .doticon i{
			color: <?php echo esc_attr(get_theme_mod('header_dotcolor')); ?>;
		}

		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu > li > .icon {
			color: <?php echo esc_attr(get_theme_mod('header_menuiconcolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu ul::after {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?>;
		}

		header .hbtn a {
			color: <?php echo esc_attr(get_theme_mod('header_btntextcolor')); ?> !important;
		}

		header .hbtn a {
			background: transparent linear-gradient(90deg, <?php echo esc_attr(get_theme_mod('header_btnbgcolor1')); ?> 62%, <?php echo esc_attr(get_theme_mod('header_btnbgcolor2')); ?> 90%) 0% 0% no-repeat padding-box;
		}

		header .hbtn a:hover {
			color: <?php echo esc_attr(get_theme_mod('header_btntxthovercolor')); ?> !important;
		}

		header .hbtn a:hover {
			background: <?php echo esc_attr(get_theme_mod('header_btnbghovercolor')); ?> !important;
		}
	
	



		.hero-style .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}


		.hero-style .slide-text p {
			color: <?php echo esc_attr(get_theme_mod('slider_descriptioncolor')); ?>;
		}

		.hero-style a.ReadMore {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxt1color')); ?> !important;
		}

		.hero-style a.ReadMore {
			background: <?php echo esc_attr(get_theme_mod('slider_btnbg1color')); ?>;
		}

		.hero-style .slide-btns a:before,.hero-style .slide-btns a:after {
			background: <?php echo esc_attr(get_theme_mod('slider_btndotscolor')); ?>;
		}

		.hero-style a.ReadMore:hover {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxthovercolor')); ?> !important;
		}

		.hero-style .sl-r-img {
			background: <?php echo esc_attr(get_theme_mod('slider_imagebordercolor')); ?> !important;
		}

	


		#aboutus-section .box h4,#aboutus-section .box h5 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_imagetitlecolor')); ?>;
		}

		#aboutus-section .box {
			background: <?php echo esc_attr(get_theme_mod('aboutus_imagetitlebgcolor')); ?>;
		}

		#aboutus-section .box {
			border-color: <?php echo esc_attr(get_theme_mod('aboutus_imagetitlebgbrdcolor')); ?>;
		}

		#aboutus-section .abt-dbx h2 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_headingcolor')); ?>;
		}

		#aboutus-section .abtsubtitl {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('aboutus_headingcolor')); ?>;
		}

		#aboutus-section .abt-dbx h3 {
			color: <?php echo esc_attr(get_theme_mod('aboutus_titlecolor')); ?>;
		}

		#aboutus-section .abt-dbx p {
			color: <?php echo esc_attr(get_theme_mod('aboutus_descriptioncolor')); ?>;
		}

		#aboutus-section li {
			color: <?php echo esc_attr(get_theme_mod('aboutus_listcolor')); ?>;
		}

		#aboutus-section .abt-btn a{
			color: <?php echo esc_attr(get_theme_mod('aboutus_btntextcolor')); ?>;
		}

		#aboutus-section .abt-btn a:after, #aboutus-section .abt-btn a:before {
			background: <?php echo esc_attr(get_theme_mod('aboutus_btntextcolor')); ?>;
		}

		#aboutus-section .abt-btn a {
			background: <?php echo esc_attr(get_theme_mod('aboutus_btnbgcolor')); ?>;
		}

		#aboutus-section .abt-btn a:hover {
			background: <?php echo esc_attr(get_theme_mod('aboutus_btnbghovercolor')); ?>;
		}

		#aboutus-section .abtimg {
			background: transparent linear-gradient(90deg, <?php echo esc_attr(get_theme_mod('aboutus_imagebrdcolor1')); ?> 62%, <?php echo esc_attr(get_theme_mod('aboutus_imagebrdcolor2')); ?> 90%) 0% 0% no-repeat padding-box;
		}

		#aboutus-section {
			padding-top: <?php echo esc_attr(get_theme_mod('music_class_aboutus_top_padding')); ?>em !important;
		}

		#aboutus-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('music_class_aboutus_bottom_padding')); ?>em !important;
		}






		#service-section .section-subtitle,#service-section .sersubtitl:after {
			color: <?php echo esc_attr(get_theme_mod('service_headingcolor')); ?>;
		}
		#service-section .sersubtitl {
			border-color: <?php echo esc_attr(get_theme_mod('service_headingcolor')); ?>;
		}

		#service-section .section-title {
			color: <?php echo esc_attr(get_theme_mod('service_boxtitlecolorcolor')); ?>;
		}

		#service-section .single-service {
			background: <?php echo esc_attr(get_theme_mod('service_boxbgcolor')); ?> !important;
		}

		#service-section .h-section p {
			color: <?php echo esc_attr(get_theme_mod('service_boxdescriptioncolorcolor')); ?> !important;
		}

		#service-section .serv-btn a {
			color: <?php echo esc_attr(get_theme_mod('service_btntextcolor')); ?> !important;
		}

		#service-section .serv-btn a:before,#service-section .serv-btn a:after {
			background: <?php echo esc_attr(get_theme_mod('service_btntextcolor')); ?>;
		}

		#service-section .serv-btn a {
			background: transparent linear-gradient(285deg,<?php echo esc_attr(get_theme_mod('service_btnbgcolor1')); ?> 0%,<?php echo esc_attr(get_theme_mod('service_btnbgcolor2')); ?> 51%);
		}

		#service-section .serv-btn a:hover {
			background: <?php echo esc_attr(get_theme_mod('service_btnbghovercolor')); ?> !important;
		}

		#service-section .imageBox i {
			color: <?php echo esc_attr(get_theme_mod('service_inboxiconcolor')); ?> !important;
		}

		#service-section .single-service h3 {
			color: <?php echo esc_attr(get_theme_mod('service_inboxtitlecolor')); ?>;
		}

		#service-section .single-service .description p {
			color: <?php echo esc_attr(get_theme_mod('service_inboxdescriptioncolor')); ?>;
		}

		#service-section .serbtn a {
			color: <?php echo esc_attr(get_theme_mod('service_inboxbtntextcolor')); ?>;
		}


		#service-section .serbtn a:hover {
			color: <?php echo esc_attr(get_theme_mod('service_btntexthrvcolor')); ?>;
		}

		#service-section {
			padding-top: <?php echo esc_attr(get_theme_mod('music_class_service_top_padding')); ?>em !important;
		}

		#service-section {
			padding-bottom: <?php echo esc_attr(get_theme_mod('music_class_service_bottom_padding')); ?>em !important;
		}



		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.footer-area {
			background: transparent linear-gradient(0deg, <?php echo esc_attr(get_theme_mod('footer_bgcolor1')); ?> 42%, <?php echo esc_attr(get_theme_mod('footer_bgcolor2')); ?> 100%) 0% 0% no-repeat padding-box;
		}

		.copy-right {
			border-top-color: <?php echo esc_attr(get_theme_mod('footer_bordercolor')); ?>;
		}

		.footer-area .footer-widget .w-title {
			color: <?php echo esc_attr(get_theme_mod('footer_widegtstitlecolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a,
		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		.scroll-top i{
			color: <?php echo esc_attr(get_theme_mod('footer_backtotopiconcolor')); ?>;
		}

		.scroll-top{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbgcolor')); ?>;
		}

		.scroll-top:hover, .scroll-top:focus{
			background: <?php echo esc_attr(get_theme_mod('footer_backtotopbghrvcolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>


	<?php
        if ($aboutus_disable_section == 1):
	?>
		#aboutus-section {
			display: none;
		}
	<?php
		else :
	?>
		#aboutus-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($service_disable_section == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>


	<?php
        if ($blog_disable_section == 1):
	?>
		#blog-section {
			display: none;
		}
	<?php
		else :
	?>
		#blog-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
