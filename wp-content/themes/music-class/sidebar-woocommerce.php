<?php
/**
 * side bar template
 *
 * @package Music Class
 */
?>
<?php if ( ! is_active_sidebar( 'music-class-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('music-class-woocommerce-sidebar'); ?>
	</div>
</div>