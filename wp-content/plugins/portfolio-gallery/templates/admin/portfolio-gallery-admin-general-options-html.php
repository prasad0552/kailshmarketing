<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wrap">
<div>
	<?php require( PORTFOLIO_GALLERY_TEMPLATES_PATH . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'portfolio-gallery-admin-free-banner.php' ); ?>
	<div id="poststuff">
		<div id="post-body-content" class="portfolio-options">
			<p class="pro_info">
				These features are available in the Professional version of the plugin only.
				<a href="http://huge-it.com/portfolio-gallery/" target="_blank" class="button button-primary">Enable</a>
			</p>
			<img style="width: 100%;" src="<?php echo esc_attr( PORTFOLIO_GALLERY_IMAGES_URL . '/admin_images/portfolio_options.jpg' ); ?>">
		</div>
	</div>
</div>
</div>
<input type="hidden" name="option" value=""/>
<input type="hidden" name="task" value=""/>
<input type="hidden" name="controller" value="options"/>
<input type="hidden" name="op_type" value="styles"/>
<input type="hidden" name="boxchecked" value="0"/>