<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
class Portfolio_Gallery_Install {

    /**
     * Install Portfolio Gallery.
     */
    public static function install() {
        if (!defined('PORTFOLIO_GALLERY_INSTALLING')) {
            define('PORTFOLIO_GALLERY_INSTALLING', true);
        }
        self::create_tables();
        // Flush rules after install
        flush_rewrite_rules();
        // Trigger action
        do_action('portfolio_gallery_installed');
    }

    private static function create_tables() {
        global $wpdb;
        $charset = $wpdb->get_charset_collate();

        $sql_huge_itportfolio_images = "
CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "huge_itportfolio_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `portfolio_id` varchar(200) DEFAULT NULL,
  `description` text,
  `image_url` text,
  `sl_url` text DEFAULT NULL,
  `sl_type` text NOT NULL,
  `link_target` text NOT NULL,
  `ordering` int(11) NOT NULL,
  `published` tinyint(4) unsigned DEFAULT NULL,
  `published_in_sl_width` tinyint(4) unsigned DEFAULT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
  ) " . $charset . " AUTO_INCREMENT=5";

        $sql_huge_itportfolio_portfolios = "
CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "huge_itportfolio_portfolios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `sl_height` int(11) unsigned DEFAULT NULL,
  `sl_width` int(11) unsigned DEFAULT NULL,
  `pause_on_hover` text,
  `portfolio_list_effects_s` text,
  `description` text,
  `param` text,
  `sl_position` text NOT NULL,
  `ordering` int(11) NOT NULL,
  `published` text,
  `categories` text NOT NULL,
  `ht_show_sorting` varchar(3) NOT NULL DEFAULT 'off',
  `ht_show_filtering` varchar(3) NOT NULL DEFAULT 'off',
  `autoslide` varchar(5) NOT NULL DEFAULT 'on',
  `show_loading` varchar(3) NOT NULL DEFAULT 'on',
  `loading_icon_type` int(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) " . $charset . " AUTO_INCREMENT=2";

        $table_name = $wpdb->prefix . "huge_itportfolio_images";
        $sql_2 = "
INSERT INTO 
`" . $table_name . "` (`id`, `name`, `portfolio_id`, `description`, `image_url`, `sl_url`, `sl_type`, `link_target`, `ordering`, `published`, `published_in_sl_width`) VALUES
(1, 'Cutthroat & Cavalier', '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/1.1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/1.2.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 0, 1, NULL),
(2, 'Nespresso', '1', '<h6>Lorem Ipsum </h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><ul><li>lorem ipsum</li><li>dolor sit amet</li><li>lorem ipsum</li><li>dolor sit amet</li></ul>', '" . "https://vimeo.com/76602135" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/9.1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/9.2.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'video', 'on', 1, 1, NULL),
(3, 'Nexus', '1', '<h6>Lorem Ipsum </h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><ul><li>lorem ipsum</li><li>dolor sit amet</li><li>lorem ipsum</li><li>dolor sit amet</li></ul>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/3.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/3.1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/3.2.jpg" . ":" . "https://www.youtube.com/watch?v=YMQdfGFK5XQ" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 2, 1, NULL),
(4, 'De7igner', '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><h7>Dolor sit amet</h7><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/4.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/4.1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/4.2.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 3, 1, NULL),
(5, 'Autumn / Winter Collection', '1', '<h6>Lorem Ipsum</h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/2.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 4, 1, NULL),
(6, 'Retro Headphones', '1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/6.jpg" . ";" . "https://vimeo.com/80514062" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/6.1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/6.2.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 5, 1, NULL),
(7, 'Take Fight', '1', '<h6>Lorem Ipsum</h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident , sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/7.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/7.2.jpg" . ";" . "https://www.youtube.com/watch?v=SP3Dgr9S4pM" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/7.3.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 6, 1, NULL),
(8, 'The Optic', '1', '<h6>Lorem Ipsum </h6><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><ul><li>lorem ipsum</li><li>dolor sit amet</li><li>lorem ipsum</li><li>dolor sit amet</li></ul>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/8.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/8.1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/8.3.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 7, 1, NULL),
(9, 'Cone Music', '1', '<ul><li>lorem ipsumdolor sit amet</li><li>lorem ipsum dolor sit amet</li></ul><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/5.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/5.1.jpg" . ";" . Portfolio_Gallery()->plugin_url() . "/assets/images/Front_images/projects/5.2.jpg" . ";', 'http://huge-it.com/fields/order-website-maintenance/', 'image', 'on', 8, 1, NULL)";

        $table_name = $wpdb->prefix . "huge_itportfolio_portfolios";
        $wpdb->query($sql_huge_itportfolio_images);
        $wpdb->query($sql_huge_itportfolio_portfolios);

        if (!$wpdb->get_var("select count(*) from " . $wpdb->prefix . "huge_itportfolio_images")) {
            $wpdb->query($sql_2);
        }
        if (!$wpdb->get_var("select count(*) from " . $wpdb->prefix . "huge_itportfolio_portfolios")) {
        	$wpdb->insert(
        		$table_name,
		        array(
			        'id' => 1,
					'name' => 'My First Portfolio',
					'sl_height' => 375,
					'sl_width' => 600,
					'pause_on_hover' => 'on',
					'portfolio_list_effects_s' => '2',
					'description' => '4000',
					'param' => '1000',
					'sl_position' => 'off',
					'ordering' => 1,
					'published' => '300',
			        'categories'=>'My_First_Category,My_Second_Category,My_Third_Category,',
		        )
	        );
        }
    }

	public static function db_update(){
		global $wpdb;
		$query = "SELECT ht_show_filtering FROM ".$wpdb->prefix."huge_itportfolio_portfolios WHERE id=1";
		$ht_show_filtering = $wpdb->get_var($query);
		if( $ht_show_filtering != 'on'){
			$wpdb->update(
				$wpdb->prefix."huge_itportfolio_portfolios",
				array('ht_show_filtering' => 'off'),
				array('id' => 1)
			);
		}
	}
}