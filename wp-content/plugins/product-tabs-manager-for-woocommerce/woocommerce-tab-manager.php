<?php
/**
 * Plugin Name: Product Tabs Manager for WooCommerce
 * Plugin URI: https://wordpress.org/plugins/product-tabs-manager-for-woocommerce/
 * Description: With WooCommerce Product Tabs Manager You can create any tabs for products that you want.
 * Version: 1.0.12
 * Author: BeRocket
 * Requires at least: 4.0
 * Author URI: http://berocket.com
 * Text Domain: BeRocket_tab_manager_domain
 * Domain Path: /languages/
 * WC tested up to: 3.4.6
 */
define( "BeRocket_tab_manager_version", '1.0.12' );
define( "BeRocket_tab_manager_domain", 'BeRocket_tab_manager_domain');
define( "tab_manager_TEMPLATE_PATH", plugin_dir_path( __FILE__ ) . "templates/" );
load_plugin_textdomain('BeRocket_tab_manager_domain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/');
require_once(plugin_dir_path( __FILE__ ).'includes/admin_notices.php');
require_once(plugin_dir_path( __FILE__ ).'includes/functions.php');
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

class BeRocket_tab_manager {
    public static $core_tabs;
    public static $info = array( 
        'id'        => 10,
        'version'   => BeRocket_tab_manager_version,
        'plugin'    => '',
        'slug'      => '',
        'key'       => '',
        'name'      => ''
    );

    /**
     * Defaults values
     */
    public static $defaults = array(
        'custom_css'        => '',
        'script'            => array(
            'js_page_load'      => '',
        ),
        'sortable'          => array('description' => 0, 'additional_information' => 1, 'reviews' => 2),
        'sortable_name'     => array(),
        'plugin_key'        => '',
    );
    public static $values = array(
        'settings_name' => 'br-tab_manager-options',
        'option_page'   => 'br-tab_manager',
        'premium_slug'  => 'woocommerce-product-tabs-manager',
        'free_slug'     => 'product-tabs-manager-for-woocommerce',
    );
    
    function __construct () {
        self::$core_tabs = array(
            'description'            => array( 'id' => 'description',            'type' => 'core', 'title' => __( 'Description', 'BeRocket_tab_manager_domain' ) ),
            'additional_information' => array( 'id' => 'additional_information', 'type' => 'core', 'title' => __( 'Additional Information', 'BeRocket_tab_manager_domain' ) ),
            'reviews'                => array( 'id' => 'reviews',                'type' => 'core', 'title' => __( 'Reviews (%d)', 'BeRocket_tab_manager_domain' ), 'description' => __( 'Use %d in the Title to substitute the number of reviews for the product.', 'BeRocket_tab_manager_domain' ) )
        );
        register_uninstall_hook(__FILE__, array( __CLASS__, 'deactivation' ) );
        add_filter( 'BeRocket_updater_add_plugin', array( __CLASS__, 'updater_info' ) );
        add_filter( 'berocket_admin_notices_rate_stars_plugins', array( __CLASS__, 'rate_stars_plugins' ) );

        if ( ( is_plugin_active( 'woocommerce/woocommerce.php' ) || is_plugin_active_for_network( 'woocommerce/woocommerce.php' ) ) && 
            br_get_woocommerce_version() >= 2.1 ) {
            $options = self::get_option();
            
            add_action ( 'init', array( __CLASS__, 'init' ) );
            add_action ( 'wp_head', array( __CLASS__, 'set_styles' ) );
            add_action ( 'admin_init', array( __CLASS__, 'admin_init' ) );
            add_action ( 'admin_enqueue_scripts', array( __CLASS__, 'admin_enqueue_scripts' ) );
            add_action ( 'admin_menu', array( __CLASS__, 'options' ) );
            add_action( 'current_screen', array( __CLASS__, 'current_screen' ) );
            add_action( "wp_ajax_br_tab_manager_settings_save", array ( __CLASS__, 'save_settings' ) );
            add_filter( 'woocommerce_product_tabs', array( __CLASS__, 'woocommerce_product_tabs' ), 299 );
            remove_filter( 'woocommerce_product_tabs', 'woocommerce_sort_product_tabs', 99 );
            add_action( 'save_post', array( __CLASS__, 'wc_save_product' ) );
            add_filter( 'plugin_row_meta', array( __CLASS__, 'plugin_row_meta' ), 10, 2 );
            $plugin_base_slug = plugin_basename( __FILE__ );
            add_filter( 'plugin_action_links_' . $plugin_base_slug, array( __CLASS__, 'plugin_action_links' ) );
            add_filter( 'is_berocket_settings_page', array( __CLASS__, 'is_settings_page' ) );
        }
        add_filter('berocket_admin_notices_subscribe_plugins', array(__CLASS__, 'admin_notices_subscribe_plugins'));
    }

    public static function rate_stars_plugins($plugins) {
        $info = get_plugin_data( __FILE__ );
        self::$info['name'] = $info['Name'];
        $plugin = array(
            'id'            => self::$info['id'],
            'name'          => self::$info['name'],
            'free_slug'     => self::$values['free_slug'],
        );
        $plugins[self::$info['id']] = $plugin;
        return $plugins;
    }

    public static function updater_info ( $plugins ) {
        self::$info['slug'] = basename( __DIR__ );
        self::$info['plugin'] = plugin_basename( __FILE__ );
        self::$info = self::$info;
        $info = get_plugin_data( __FILE__ );
        self::$info['name'] = $info['Name'];
        $plugins[] = self::$info;
        return $plugins;
    }
    public static function admin_notices_subscribe_plugins($plugins) {
        $plugins[] = self::$info['id'];
        return $plugins;
    }
    public static function is_settings_page($settings_page) {
        if( ! empty($_GET['page']) && $_GET['page'] == self::$values[ 'option_page' ] ) {
            $settings_page = true;
        }
        return $settings_page;
    }
    public static function plugin_action_links($links) {
		$action_links = array(
			'settings' => '<a href="' . admin_url( 'admin.php?page='.self::$values['option_page'] ) . '" title="' . __( 'View Plugin Settings', 'BeRocket_products_label_domain' ) . '">' . __( 'Settings', 'BeRocket_products_label_domain' ) . '</a>',
		);
		return array_merge( $action_links, $links );
    }
    public static function plugin_row_meta($links, $file) {
        $plugin_base_slug = plugin_basename( __FILE__ );
        if ( $file == $plugin_base_slug ) {
			$row_meta = array(
				'docs'    => '<a href="http://berocket.com/docs/plugin/'.self::$values['premium_slug'].'" title="' . __( 'View Plugin Documentation', 'BeRocket_products_label_domain' ) . '" target="_blank">' . __( 'Docs', 'BeRocket_products_label_domain' ) . '</a>',
				'premium'    => '<a href="http://berocket.com/product/'.self::$values['premium_slug'].'" title="' . __( 'View Premium Version Page', 'BeRocket_products_label_domain' ) . '" target="_blank">' . __( 'Premium Version', 'BeRocket_products_label_domain' ) . '</a>',
			);

			return array_merge( $links, $row_meta );
		}
		return (array) $links;
    }
    public static function init () {
        $options = self::get_option();
        wp_enqueue_script("jquery");
        wp_enqueue_style( 'berocket_tab_manager_style' );
        register_post_type( "br_product_tab",
			array(
				'labels' => array(
					'name'               => __( 'Tabs', 'BeRocket_tab_manager_domain' ),
					'singular_name'      => __( 'Tab', 'BeRocket_tab_manager_domain' ),
					'menu_name'          => _x( 'Tabs', 'Admin menu name', 'BeRocket_tab_manager_domain' ),
					'add_new'            => __( 'Add Tab', 'BeRocket_tab_manager_domain' ),
					'add_new_item'       => __( 'Add New Tab', 'BeRocket_tab_manager_domain' ),
					'edit'               => __( 'Edit', 'BeRocket_tab_manager_domain' ),
					'edit_item'          => __( 'Edit Tab', 'BeRocket_tab_manager_domain' ),
					'new_item'           => __( 'New Tab', 'BeRocket_tab_manager_domain' ),
					'view'               => __( 'View Tabs', 'BeRocket_tab_manager_domain' ),
					'view_item'          => __( 'View Tab', 'BeRocket_tab_manager_domain' ),
					'search_items'       => __( 'Search Tabs', 'BeRocket_tab_manager_domain' ),
					'not_found'          => __( 'No Tabs found', 'BeRocket_tab_manager_domain' ),
					'not_found_in_trash' => __( 'No Tabs found in trash', 'BeRocket_tab_manager_domain' ),
				),
				'description'     => __( 'This is where you can add new tabs that you can add to products.', 'BeRocket_tab_manager_domain' ),
				'public'          => true,
				'show_ui'         => true,
				'capability_type' => 'post',
				'publicly_queryable'  => false,
				'exclude_from_search' => true,
				'show_in_menu'        => 'edit.php?post_type=product',
				'hierarchical'        => false,
				'rewrite'             => false,
				'query_var'           => false,
				'supports'            => array( 'title', 'editor' ),
				'show_in_nav_menus'   => false,
			)
		);
    }
    /**
     * Function set styles in wp_head WordPress action
     *
     * @return void
     */
    public static function set_styles () {
        $options = self::get_option();
        echo '<style>'.$options['custom_css'].'</style>';
    }
    /**
     * Load template
     *
     * @access public
     *
     * @param string $name template name
     *
     * @return void
     */
    public static function br_get_template_part( $name = '' ) {
        $template = '';

        // Look in your_child_theme/woocommerce-tab_manager/name.php
        if ( $name ) {
            $template = locate_template( "woocommerce-tab_manager/{$name}.php" );
        }

        // Get default slug-name.php
        if ( ! $template && $name && file_exists( tab_manager_TEMPLATE_PATH . "{$name}.php" ) ) {
            $template = tab_manager_TEMPLATE_PATH . "{$name}.php";
        }

        // Allow 3rd party plugin filter template file from their plugin
        $template = apply_filters( 'tab_manager_get_template_part', $template, $name );

        if ( $template ) {
            load_template( $template, false );
        }
    }

    public static function admin_enqueue_scripts() {
        if ( function_exists( 'wp_enqueue_media' ) ) {
            wp_enqueue_media();
        } else {
            wp_enqueue_style( 'thickbox' );
            wp_enqueue_script( 'media-upload' );
            wp_enqueue_script( 'thickbox' );
        }
    }

    /**
     * Function adding styles/scripts and settings to admin_init WordPress action
     *
     * @access public
     *
     * @return void
     */
    public static function admin_init () {
        wp_enqueue_script( 'berocket_tab_manager_admin', plugins_url( 'js/admin.js', __FILE__ ), array( 'jquery' ), BeRocket_tab_manager_version );
        wp_register_style( 'berocket_tab_manager_admin_style', plugins_url( 'css/admin.css', __FILE__ ), "", BeRocket_tab_manager_version );
        wp_enqueue_style( 'berocket_tab_manager_admin_style' );
        add_filter( 'bulk_actions-edit-br_product_tab', array( __CLASS__, 'bulk_actions_edit' ) );
        add_filter( 'views_edit-br_product_tab', array( __CLASS__, 'views_edit' ) );
        add_filter( 'manage_edit-br_product_tab_columns', array( __CLASS__, 'manage_edit_columns' ) );
        add_action( 'manage_br_product_tab_posts_custom_column', array( __CLASS__, 'columns_replace' ), 2 );
        add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
        wp_register_style( 'font-awesome', plugins_url( 'css/font-awesome.min.css', __FILE__ ) );
        wp_enqueue_style( 'font-awesome' );
    }
    public static function product_edit_tab_button () {
        echo '<li class="product_tab_manager"><a href="#br_tab_manager">' . __( 'Product Tabs', 'BeRocket_tab_manager_domain' ) . '</a></li>';
    }
    public static function product_edit_tab () {
        global $post, $typenow;
        $options = BeRocket_tab_manager::get_option();
        $tabs = BeRocket_tab_manager::get_all_tabs($post->ID);
        set_query_var( 'tabs', $tabs ); 
        set_query_var( 'options', $options );
        set_query_var( 'tabs_typenow', $typenow );
        include tab_manager_TEMPLATE_PATH . "tabs.php";
    }
    public static function wc_save_product( $product_id ) {
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }
        update_post_meta( $product_id, 'br-tab_manager-options', 'hi' );
        if ( isset( $_POST['br-tab_manager-options'] ) ) {
            update_post_meta( $product_id, 'br-tab_manager-options', $_POST['br-tab_manager-options'] );
        } else {
            delete_post_meta( $product_id, 'br-tab_manager-options' );
        }
        if ( isset( $_POST['br_use_specific_tabs'] ) ) {
            update_post_meta( $product_id, 'br_use_specific_tabs', $_POST['br_use_specific_tabs'] );
        } else {
            update_post_meta( $product_id, 'br_use_specific_tabs', '0' );
        }
        if( isset($_POST['br_product_tab_parent']) ) {
            $post = array(
                'ID' => $product_id,
                'post_parent' => $_POST['br_product_tab_parent']
            );
            unset($_POST['br_product_tab_parent']);
            wp_update_post($post);
        }
    }
    public static function woocommerce_product_tabs ( $tabs ) {
        global $product;
        $product_id = br_wc_get_product_id($product);
        if( isset($product_id) ) {
            $options = BeRocket_tab_manager::get_option();
            $custom_tabs = BeRocket_tab_manager::get_all_tabs($product_id);
            foreach( $custom_tabs as $tab => $tab_data ) {
                if( ! isset($tabs[$tab]) ) {
                    $tabs[$tab] = array('title' => $tab_data['title'], 'priority' => 10, 'callback' => array( __CLASS__, 'get_custom_tab'), 'id' => $tab_data['id']);
                }
            }
            foreach ( $tabs as $tab => &$tab_name ) {
                if ( array_key_exists ( $tab , $custom_tabs ) ) {
                    if( isset( $options['sortable'][$tab] ) && is_numeric($options['sortable'][$tab]) ) {
                        $tab_name['priority'] = $options['sortable'][$tab];
                        if( isset( $options['sortable_name'][$tab] ) && $options['sortable_name'][$tab] != '' ) {
                            $title = $options['sortable_name'][$tab];
                            if ( $tab == 'reviews' ) {
                                global $product;
                                $reviews = $product->get_review_count();
                                $title = str_replace('%d', $reviews, $title);
                            }
                            $tab_name['title'] = $title;
                        }
                    } else {
                        unset($tabs[$tab]);
                    }
                } else {
                    $tab_name['priority'] = $tab_name['priority'] * 1000;
                }
            }
            
            if ( ! function_exists( '_sort_priority_callback' ) ) {
                function _sort_priority_callback( $a, $b ) {
                    if ( $a['priority'] == $b['priority'] )
                        return 0;
                    return ( $a['priority'] < $b['priority'] ) ? -1 : 1;
                }
            }

            uasort( $tabs, '_sort_priority_callback' );
        }
        return $tabs;
    }
    public static function get_custom_tab($id) {
        global $wp_embed;
        $post = get_post( $id );
        if ( $post ) {
            $post_content = $wp_embed->run_shortcode($post->post_content);
            $post_content = do_shortcode($post_content);
            $post_content = $wp_embed->autoembed($post_content);
            $post_content = wptexturize($post_content);
            $post_content = wpautop($post_content);
            $post_content = shortcode_unautop($post_content);
            $post_content = prepend_attachment($post_content);
            $post_content = wp_make_content_images_responsive($post_content);
            $post_content = convert_smilies($post_content);
            if ( strpos( $post_content, '\<\!\-\-more\-\-\>' ) !== false ) {
                list( $first_content, $second_content ) = explode( '<!--more-->', $post_content, 2 );
                if ( $second_content = preg_replace("#^\s*\<\/p\>#", "", $second_content) ) {
                    echo preg_replace("#\<p\>\s*$#", "", $first_content);
                    echo '<a href="#" class="br_more_content_button" >' . __( 'Read More...', 'BeRocket_tab_manager_domain' ) . '</a>';
                    echo '<div style="display:none;">' . $second_content . '</div>';
                    echo '
                    <script>
                        jQuery(document).on( "click", ".br_more_content_button", function (e) {
                            e.preventDefault();
                            jQuery(this).next().show(0);
                            jQuery(this).hide(0);
                        });
                    </script>';
                } else {
                    echo $post_content;
                }
            } else {
                echo $post_content;
            }
        }
    }
    public static function bulk_actions_edit ( $actions ) {
        unset( $actions['edit'] );
        return $actions;
    }
    public static function views_edit ( $view ) {
        unset( $view['publish'], $view['private'], $view['future'] );
        return $view;
    }
    public static function manage_edit_columns ( $columns ) {
        $columns = array();
        $columns["cb"]   = '<input type="checkbox" />';
        $columns["name"] = __( "Tab Name", 'BeRocket_tab_manager_domain' );
        $columns["products"] = __( "Products", 'BeRocket_tab_manager_domain' );
        return $columns;
    }
    public static function add_meta_boxes () {
        add_meta_box( 'submitdiv', __( 'Save tab content', 'BeRocket_tab_manager_domain' ), array( __CLASS__, 'meta_box' ), 'br_product_tab', 'side', 'high' );
    }
    public static function meta_box($post) {
        ?>
        <div class="submitbox" id="submitpost">

            <div id="minor-publishing">
                <div id="major-publishing-actions">
                    <?php 
                    if( $post->post_parent ) {
                        $parent = wc_get_product( $post->post_parent );
                        $parent_id = br_wc_get_product_id($parent);
                        echo '<div><em>'.__('This tab available only for ', 'BeRocket_tab_manager_domain').'<a href="' . get_edit_post_link( $parent_id ) . '">' . $parent->get_title() . '</a></em></div>';
                    }
                    ?>
                    <div id="delete-action">
                        <?php
                        global $pagenow;
                        if( in_array( $pagenow, array( 'post-new.php' ) ) ) {
                            if( isset($_GET['post_parent']) && is_numeric($_GET['post_parent']) ) {
                                echo '<input type="hidden" name="br_product_tab_parent" value="'.$_GET['post_parent'].'">';
                                $parent = wc_get_product( $_GET['post_parent'] );
                                $parent_id = br_wc_get_product_id($parent);
                                echo '<div><em>'.__('This tab will be available only for ', 'BeRocket_tab_manager_domain').'<a href="' . get_edit_post_link( $parent_id ) . '">' . $parent->get_title() . '</a></em></div>';
                            }
                        } else {
                            if ( current_user_can( "delete_post", $post->ID ) ) {
                                if ( ! EMPTY_TRASH_DAYS )
                                    $delete_text = __( 'Delete Permanently', 'BeRocket_tab_manager_domain' );
                                else
                                    $delete_text = __( 'Move to Trash', 'BeRocket_tab_manager_domain' );
                                ?>
                                <a class="submitdelete deletion" href="<?php echo esc_url( get_delete_post_link( $post->ID ) ); ?>"><?php echo esc_attr( $delete_text ); ?></a>
                            <?php 
                            }
                        } ?>
                    </div>

                    <div id="publishing-action">
                        <span class="spinner"></span>
                        <input type="submit" class="button button-primary tips" name="publish" value="<?php _e( 'Save Tab', 'BeRocket_tab_manager_domain' ); ?>" data-tip="<?php _e( 'Save/update tab', 'BeRocket_tab_manager_domain' ); ?>" />
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <?php
    }
    public static function columns_replace ( $column ) {
        global $post;
        switch ( $column ) {
            case "name":

			$edit_link = get_edit_post_link( $post->ID );
			$title = '<a class="row-title" href="' . $edit_link . '">' . _draft_or_post_title() . '</a>';

			echo '<strong>' . $title . '</strong>';

			// Get actions
			$actions = array();

			$post_type_object = get_post_type_object( $post->post_type );

			if ( current_user_can( $post_type_object->cap->delete_post, $post->ID ) ) {
				if ( 'trash' == $post->post_status )
					$actions['untrash'] = "<a title='" . __( 'Restore this item from the Trash', 'BeRocket_tab_manager_domain' ) . "' href='" . wp_nonce_url( admin_url( sprintf( $post_type_object->_edit_link . '&amp;action=untrash', $post->ID ) ), 'untrash-post_' . $post->ID ) . "'>" . __( 'Restore', 'BeRocket_tab_manager_domain' ) . "</a>";
				elseif ( EMPTY_TRASH_DAYS )
					$actions['trash'] = "<a class='submitdelete' title='" . __( 'Move this item to the Trash', 'BeRocket_tab_manager_domain' ) . "' href='" . get_delete_post_link( $post->ID ) . "'>" . __( 'Trash', 'BeRocket_tab_manager_domain' ) . "</a>";
				if ( 'trash' == $post->post_status || ! EMPTY_TRASH_DAYS )
					$actions['delete'] = "<a class='submitdelete' title='" . __( 'Delete this item permanently', 'BeRocket_tab_manager_domain' ) . "' href='" . get_delete_post_link( $post->ID, '', true ) . "'>" . __( 'Delete Permanently', 'BeRocket_tab_manager_domain' ) . "</a>";
			}

			$actions = apply_filters( 'post_row_actions', $actions, $post );

			echo '<div class="row-actions">';

			$i = 0;
			$action_count = count( $actions );

			foreach ( $actions as $action => $link ) {
				( $i == $action_count - 1 ) ? $sep = '' : $sep = ' | ';
				echo '<span class="' . sanitize_html_class( $action ) . '">' . $link . $sep . '</span>';
				$i++;
			}
			echo '</div>';
                
                break;
            case "products":
                if ( $post->post_parent ) {
                    $parent = wc_get_product( $post->post_parent );
                    $parent_id = br_wc_get_product_id($parent);
                    echo '<a href="' . get_edit_post_link( $parent_id ) . '">' . $parent->get_title() . '</a>';
                } 
                break;
        }
    }

    public static function get_all_tabs($product_id = false) {
        $tabs = array();
        $tabs = self::$core_tabs;
        $post_parent_in = array(0);
        global $post;
        $old_post = $post;
        if ( $product_id !== false ) {
            $post_parent_in[] = $product_id;
        }
        $args = array(
            'post_type'       => 'br_product_tab',
            'post_parent__in' => $post_parent_in,
            'posts_per_page'  => -1
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $post_slug = get_the_ID();
                $tabs[$post_slug] = array( 'id' => $post_slug, 'type' => 'global', 'title' => get_the_title(), 'description' => '' );
            }
        }
        if ( is_admin() ) {
            remove_filter( 'woocommerce_product_tabs', 'woocommerce_default_product_tabs' );
            remove_filter( 'woocommerce_product_tabs', 'woocommerce_sort_product_tabs', 99 );
        }
        remove_filter( 'woocommerce_product_tabs', array( __CLASS__, 'woocommerce_product_tabs' ), 299 );
        $third_party_tabs = apply_filters( 'woocommerce_product_tabs', array() );
        add_filter( 'woocommerce_product_tabs', array( __CLASS__, 'woocommerce_product_tabs' ), 299 );
        if( is_array($third_party_tabs) ) {
            foreach( $third_party_tabs as $tab => $tab_data ) {
                if( ! isset( $tabs[$tab] ) ) {
                    $tabs[$tab] = array( 'id' => $tab, 'type' => '3party', 'title' => $tab_data['title'], 'description' => '' );
                }
            }
        }
        wp_reset_query();
        $post = $old_post;
        return $tabs;
    }

    /**
     * Function add options button to admin panel
     *
     * @access public
     *
     * @return void
     */
    public static function options() {
        add_submenu_page( 'woocommerce', __('Product Tabs settings', 'BeRocket_tab_manager_domain'), __('Product Tabs', 'BeRocket_tab_manager_domain'), 'manage_options', 'br-tab_manager', array(
            __CLASS__,
            'option_form'
        ) );
    }
    /**
     * Function add options form to settings page
     *
     * @access public
     *
     * @return void
     */
    public static function option_form() {
        $plugin_info = get_plugin_data(__FILE__, false, true);
        $paid_plugin_info = self::$info;
        include tab_manager_TEMPLATE_PATH . "settings.php";
    }
    /**
     * Function remove settings from database
     *
     * @return void
     */
    public static function deactivation () {
        delete_option( self::$values['settings_name'] );
    }
    public static function save_settings () {
        if( current_user_can( 'manage_options' ) ) {
            if( isset($_POST[self::$values['settings_name']]) ) {
                update_option( self::$values['settings_name'], self::sanitize_option($_POST[self::$values['settings_name']]) );
                echo json_encode($_POST[self::$values['settings_name']]);
            }
        }
        wp_die();
    }

    public static function current_screen() {
        $screen = get_current_screen();
        if(strpos($screen->id, 'br-tab_manager') !== FALSE) {
            wp_enqueue_script( 'jquery-ui-sortable' );
        }
    }

    public static function sanitize_option( $input ) {
        $default = self::$defaults;
        $result = self::recursive_array_set( $default, $input );
        return $result;
    }
    public static function recursive_array_set( $default, $options ) {
        $result = array();
        foreach( $default as $key => $value ) {
            if( array_key_exists( $key, $options ) ) {
                if( is_array( $value ) ) {
                    if( is_array( $options[$key] ) ) {
                        $result[$key] = self::recursive_array_set( $value, $options[$key] );
                    } else {
                        $result[$key] = self::recursive_array_set( $value, array() );
                    }
                } else {
                    $result[$key] = $options[$key];
                }
            } else {
                if( is_array( $value ) ) {
                    $result[$key] = self::recursive_array_set( $value, array() );
                } else {
                    $result[$key] = '';
                }
            }
        }
        foreach( $options as $key => $value ) {
            if( ! array_key_exists( $key, $result ) ) {
                $result[$key] = $value;
            }
        }
        return $result;
    }
    public static function get_option() {
        $options = get_option( self::$values['settings_name'] );
        if ( @ $options && is_array ( $options ) ) {
            $options = array_merge( self::$defaults, $options );
        } else {
            $options = self::$defaults;
        }
        return $options;
    }
}

new BeRocket_tab_manager;

berocket_admin_notices::generate_subscribe_notice();

/**
 * Creating admin notice if it not added already
 */
if( ! function_exists('BeRocket_generate_sales_2018') ) {
    function BeRocket_generate_sales_2018($data = array()) {
        if( time() < strtotime('-7 days', $data['end']) ) {
            $close_text = 'hide this for 7 days';
            $nothankswidth = 115;
        } else {
            $close_text = 'not interested';
            $nothankswidth = 90;
        }
        $data = array_merge(array(
            'righthtml'  => '<a class="berocket_no_thanks">'.$close_text.'</a>',
            'rightwidth'  => ($nothankswidth+20),
            'nothankswidth'  => $nothankswidth,
            'contentwidth'  => 400,
            'subscribe'  => false,
            'priority'  => 15,
            'height'  => 50,
            'repeat'  => '+7 days',
            'repeatcount'  => 3,
            'image'  => array(
                'local' => plugin_dir_url( __FILE__ ) . 'images/44p_sale.jpg',
            ),
        ), $data);
        new berocket_admin_notices($data);
    }
    BeRocket_generate_sales_2018(array(
        'start'         => 1529532000,
        'end'           => 1530392400,
        'name'          => 'SALE_LABELS_2018',
        'for_plugin'    => array('id' => 18, 'version' => '2.0', 'onlyfree' => true),
        'html'          => 'Save <strong>$20</strong> with <strong>Premium Product Labels</strong> today!
     &nbsp; <span>Get your <strong class="red">44% discount</strong> now!</span>
     <a class="berocket_button" href="https://berocket.com/product/woocommerce-advanced-product-labels" target="_blank">Save $20</a>',
    ));
    BeRocket_generate_sales_2018(array(
        'start'         => 1530396000,
        'end'           => 1531256400,
        'name'          => 'SALE_MIN_MAX_2018',
        'for_plugin'    => array('id' => 9, 'version' => '2.0', 'onlyfree' => true),
        'html'          => 'Save <strong>$20</strong> with <strong>Premium Min/Max Quantity</strong> today!
     &nbsp; <span>Get your <strong class="red">44% discount</strong> now!</span>
     <a class="berocket_button" href="https://berocket.com/product/woocommerce-minmax-quantity" target="_blank">Save $20</a>',
    ));
    BeRocket_generate_sales_2018(array(
        'start'         => 1531260000,
        'end'           => 1532120400,
        'name'          => 'SALE_LOAD_MORE_2018',
        'for_plugin'    => array('id' => 3, 'version' => '2.0', 'onlyfree' => true),
        'html'          => 'Save <strong>$20</strong> with <strong>Premium Load More Products</strong> today!
     &nbsp; <span>Get your <strong class="red">44% discount</strong> now!</span>
     <a class="berocket_button" href="https://berocket.com/product/woocommerce-load-more-products" target="_blank">Save $20</a>',
    ));
}
