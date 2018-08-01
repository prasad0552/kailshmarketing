<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Portfolio_Gallery_Admin {

	/**
	 * Array of pages in admin
	 * @var array
	 */
	public $pages = array();

	/**
	 * Instance of Portfolio_Gallery_General_Options class
	 *
	 * @var Portfolio_Gallery_General_Options
	 */
	public $general_options = null;

	/**
	 * Instance of Portfolio_Gallery_Portfolios class
	 *
	 * @var Portfolio_Gallery_Portfolios
	 */
	public $portfolios = null;

	/**
	 * Instance of Portfolio_Gallery_Lightbox_Options class
	 *
	 * @var Portfolio_Gallery_Lightbox_Options
	 */
	public $lightbox_options = null;

	/**
	 * Instance of Portfolio_Gallery_Featured_Plugins class
	 *
	 * @var Portfolio_Gallery_Featured_Plugins
	 */
	public $featured_plugins = null;

	/**
	 * Instance of Portfolio_Gallery_Licensing class
	 *
	 * @var Portfolio_Gallery_Licensing $licensing
	 */
	public $licensing;

	/**
	 * Portfolio_Gallery_Admin constructor.
	 */
	public function __construct(){
		$this->init();
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'wp_loaded', array( $this, 'wp_loaded' ) );
		add_action( 'wp_loaded', array( $this, 'wp_loaded_add_video' ) );
		add_action( 'wp_loaded', array( $this, 'wp_loaded_edit_video' ) );
		add_action( 'wp_loaded', array( $this, 'wp_loaded_remove_video' ) );
	}

	/**
	 * Initialize Portfolio Gallery's admin
	 */
	protected function init(){
		$this->general_options = new Portfolio_Gallery_General_Options();
		$this->portfolios = new Portfolio_Gallery_Portfolios();
		$this->lightbox_options = new Portfolio_Gallery_Lightbox_Options();
		$this->featured_plugins = new Portfolio_Gallery_Featured_Plugins();
		$this->licensing = new Portfolio_Gallery_Licensing();
	}

	/**
	 * Prints Portfolio Menu
	 */
	public function admin_menu(){
		$this->pages[] = add_menu_page( __( 'Huge-IT Portfolio Gallery', 'portfolio-gallery' ),  __( 'Huge-IT Portfolio', 'portfolio-gallery' ), 'delete_pages', 'portfolios_huge_it_portfolio', array( Portfolio_Gallery()->admin->portfolios,'load_portfolio_page' ), PORTFOLIO_GALLERY_IMAGES_URL."/admin_images/huge_it_portfolioLogoHover -for_menu.png" );
		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __('Portfolios','portfolio-gallery'), __('Portfolios','portfolio-gallery'), 'delete_pages', 'portfolios_huge_it_portfolio', array( Portfolio_Gallery()->admin->portfolios,'load_portfolio_page' ));

		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __( 'General Options', 'portfolio-gallery' ), __( 'General Options', 'portfolio-gallery' ), 'delete_pages', 'Options_portfolio_styles', array( Portfolio_Gallery()->admin->general_options ,'load_page' ) );
		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __( 'Lightbox Options', 'portfolio-gallery' ), __( 'Lightbox Options', 'portfolio-gallery' ), 'delete_pages', 'Options_portfolio_lightbox_styles', array( Portfolio_Gallery()->admin->lightbox_options,'load_page' ) );

		$this->pages[] =add_submenu_page( 'portfolios_huge_it_portfolio', __( 'Featured Plugins', 'portfolio-gallery' ), __( 'Featured Plugins', 'portfolio-gallery' ), 'delete_pages', 'huge_it__portfolio_featured_plugins', array( Portfolio_Gallery()->admin->featured_plugins,'show_page' ) );
		$this->pages[] =add_submenu_page( 'portfolios_huge_it_portfolio', __( 'Licensing', 'portfolio-gallery' ), __( 'Licensing', 'portfolio-gallery' ), 'delete_pages', 'huge_it__portfolio_licensing', array( Portfolio_Gallery()->admin->licensing,'show_page' ) );
	}


	public function wp_loaded() {
		global $wpdb;
		if (isset($_GET['task'])) {
			$task = $_GET['task'];
			if ($task == 'add_portfolio') {

				if (!isset($_REQUEST['hugeit_portfolio_add_portfolio_nonce']) || !wp_verify_nonce($_REQUEST['hugeit_portfolio_add_portfolio_nonce'], 'add_new_portfolio')) {
					wp_die('Security check failure.');
				}

				$table_name = $wpdb->prefix . "huge_itportfolio_portfolios";
				$wpdb->insert(
					$table_name,
					array(
						'name' => 'New portfolio',
						'sl_height' => '375',
						'sl_width' => '600',
						'pause_on_hover' => 'on',
						'portfolio_list_effects_s' => '2',
						'description' => '4000',
						'param' => '1000',
						'sl_position' => 'off',
						'ordering' => '1',
						'published' => '300',
						'categories' => 'My First Category,My Second Category,My Third Category,',
						'ht_show_sorting' => 'off',
						'ht_show_filtering' => 'off',
					)
				);

				$apply_portfolio_safe_link = wp_nonce_url(
					'admin.php?page=portfolios_huge_it_portfolio&id=' . $wpdb->insert_id . '&task=apply',
					'apply_portfolio_' . $wpdb->insert_id,
					'hugeit_portfolio_apply_portfolio_nonce'
				);

				$apply_portfolio_safe_link = htmlspecialchars_decode($apply_portfolio_safe_link);

				header( 'Location: ' . $apply_portfolio_safe_link );
			}
		}
	}

	/**
	 * Insert portfolio video
	 *
	 * @param $id
	 */
	function wp_loaded_add_video() {
		if ( portfolio_gallery_get_portfolio_task() == 'portfolio_video' ) {

			if ( isset( $_REQUEST['portfolio_add_video_nonce'] ) ) {
				if ( ! wp_verify_nonce( $_REQUEST['portfolio_add_video_nonce'], 'portfolio_add_video_nonce' ) ) {
					wp_die( 'Security check failure' );
				}
			}
			global $wpdb;
			$id = portfolio_gallery_get_portfolio_id();
			if ( isset( $_POST["huge_it_add_video_input"] ) && $_POST["huge_it_add_video_input"] != '' ) {
				$query        = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id= %d", $id );
				$row          = $wpdb->get_row( $query );//wp_die($query);exit;
				$query        = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images where portfolio_id = %d ", $row->id );
				$rowplusorder = $wpdb->get_results( $query );

				foreach ( $rowplusorder as $key => $rowplusorders ) {

					if ( $rowplusorders->ordering == 0 ) {
						$rowplusorderspl = 1;
						$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET ordering = %d WHERE id = %s ", $rowplusorderspl, $rowplusorders->id ) );
					} else {
						$rowplusorderspl = $rowplusorders->ordering + 1;
						$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET ordering = %d WHERE id = %s ", $rowplusorderspl, $rowplusorders->id ) );
					}

				}
				$_POST["huge_it_add_video_input"] .= ";";
				$_POST["show_title"]              = sanitize_text_field( $_POST["show_title"] );
				$id                               = absint( $id );
				$_POST["show_description"]        = wp_kses_post( $_POST["show_description"] );
				$_POST["huge_it_add_video_input"] = explode( ';', $_POST["huge_it_add_video_input"] );
				$_POST["huge_it_add_video_input"] = array_map( 'esc_url', $_POST["huge_it_add_video_input"] );
				$_POST["huge_it_add_video_input"] = array_map( 'htmlspecialchars_decode', $_POST["huge_it_add_video_input"] );
				$_POST["huge_it_add_video_input"] = implode( ';', $_POST["huge_it_add_video_input"] );

				$_POST["show_url"] = esc_url( $_POST["show_url"] );
				$table_name        = $wpdb->prefix . "huge_itportfolio_images";
				$wpdb->insert(
					$table_name,
					array(
						'name'                  => $_POST["show_title"],
						'portfolio_id'          => $id,
						'description'           => $_POST["show_description"],
						'image_url'             => $_POST["huge_it_add_video_input"],
						'sl_url'                => $_POST["show_url"],
						'sl_type'               => 'video',
						'link_target'           => 'on',
						'ordering'              => '0',
						'published'             => '1',
						'published_in_sl_width' => '1',
						'category'              => '',
					)
				);
			} elseif ( isset( $_POST["huge_it_add_video_input_thumb"] ) && $_POST["huge_it_add_video_input_thumb"] != '' ) {
				if ( isset( $_REQUEST['add_thumb_video_nonce'] ) ) {
					if ( ! wp_verify_nonce( $_REQUEST['add_thumb_video_nonce'], 'add_thumb_video_nonce' . absint( $_GET['thumb_parent'] ) ) ) {
						wp_die( 'Security check failure' );
					}
				}
				if ( isset( $_GET['thumb_parent'] ) || $_GET['thumb_parent'] != null ) {
					$query          = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id= %d", $id );
					$row            = $wpdb->get_row( $query );
					$query          = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images where portfolio_id = %d and id = %d", $row->id, absint( $_GET['thumb_parent'] ) );
					$get_proj_image = $wpdb->get_row( $query );
					$get_proj_image->image_url .= sanitize_text_field( $_POST["huge_it_add_video_input_thumb"] ) . ";";
					$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET image_url = '%s' where portfolio_id = %s and id = %d", $get_proj_image->image_url, $row->id, $_GET['thumb_parent'] ) );
				}
			}

			$apply_portfolio_safe_link = wp_nonce_url(
				'admin.php?page=portfolios_huge_it_portfolio&id=' . $id . '&task=apply',
				'apply_portfolio_' . $id,
				'hugeit_portfolio_apply_portfolio_nonce'
			);
			$apply_portfolio_safe_link = htmlspecialchars_decode( $apply_portfolio_safe_link );
			header( 'Location: ' . $apply_portfolio_safe_link );
		}
	}

	function wp_loaded_edit_video() {

		if ( portfolio_gallery_get_portfolio_task() == 'portfolio_video_edit' ) {
			$thumb = sanitize_text_field( $_GET["thumb"] );
			$id    = absint( $_GET["id"] );
			if ( isset( $_REQUEST['portfolio_video_edit_nonce'] ) ) {
				if ( ! wp_verify_nonce( $_REQUEST['portfolio_video_edit_nonce'], 'edit_thumb_video_nonce' . $id . $thumb ) ) {
					wp_die( 'Security check failure' );
				}
			}
			global $wpdb;
			$portfolio_id     = absint( $_GET["portfolio_id"] );
			$query            = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images where portfolio_id = %s and id = %d", $portfolio_id, $id );
			$get_proj_image   = $wpdb->get_row( $query );
			$input_edit_video = explode( ";", $get_proj_image->image_url );
			if ( isset( $_POST["huge_it_edit_video_input"] ) && $_POST["huge_it_edit_video_input"] != '' ) {
				$input_edit_video[ $thumb ] = sanitize_text_field( $_POST["huge_it_edit_video_input"] );
				array_map( 'esc_url', $input_edit_video );
				$new_url = implode( ";", $input_edit_video );
				$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET image_url = '%s' where portfolio_id = %s and id = %d", $new_url, $portfolio_id, $id ) );
			}
			$apply_portfolio_safe_link = wp_nonce_url(
				'admin.php?page=portfolios_huge_it_portfolio&id=' . $portfolio_id . '&task=apply',
				'apply_portfolio_' . $portfolio_id,
				'hugeit_portfolio_apply_portfolio_nonce'
			);
			$apply_portfolio_safe_link = htmlspecialchars_decode( $apply_portfolio_safe_link );
			header( 'Location: ' . $apply_portfolio_safe_link );
		}
	}

	function wp_loaded_remove_video() {
		if ( portfolio_gallery_get_portfolio_task() == 'remove_cat' ) {
			$id = portfolio_gallery_get_portfolio_id();
			if ( ! isset( $_REQUEST['hugeit_portfolio_remove_portfolio_nonce'] ) || ! wp_verify_nonce( $_REQUEST['hugeit_portfolio_remove_portfolio_nonce'], 'remove_portfolio_' . $id ) ) {
				wp_die( 'Security check failure' );
			}
			global $wpdb;
			$sql_remov_tag   = $wpdb->prepare( "DELETE FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id = %d", $id );
			$sql_remov_image = $wpdb->prepare( "DELETE FROM " . $wpdb->prefix . "huge_itportfolio_images WHERE portfolio_id = %d", $id );
			if ( ! $wpdb->query( $sql_remov_tag ) ) {
				setcookie( 'deleted', 'fail', time()+2 );
			} else {
				$wpdb->query( $sql_remov_image );
				setcookie( 'deleted', 'success',time()+2 );
			}
			header( 'Location: admin.php?page=portfolios_huge_it_portfolio' );
		}
	}
}

