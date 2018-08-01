<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<!--<label class="screen-reader-text"><?php /* echo _x( 'Search for:', 'label', 'twentysixteen' ); */ ?></label>-->
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <input type="submit" id="searchsubmit"value=""/>
            <!--<span class="screen-reader-text"><?php /* echo _x( 'Search', 'submit button', 'twentysixteen' ); */ ?></span>-->
        <!--</button>-->
	</div>	
</form>
