<div class="wrap">
<?php 
$dplugin_name = 'WooCommerce Product Tabs Manager';
$dplugin_link = 'http://berocket.com/product/woocommerce-product-tabs-manager';
$dplugin_price = 22;
$dplugin_lic   = 19;
$dplugin_desc = '';
@ include 'settings_head.php';
@ include 'discount.php';
?>
<div class="wrap br_settings br_tab_manager_settings show_premium">
    <div id="icon-themes" class="icon32"></div>
    <h2>Tab Manager Settings</h2>
    <?php settings_errors(); ?>

    <h2 class="nav-tab-wrapper">
        <a href="#general" class="nav-tab nav-tab-active general-tab" data-block="general"><?php _e('General', 'BeRocket_tab_manager_domain') ?></a>
        <a href="#css" class="nav-tab css-tab" data-block="css"><?php _e('CSS', 'BeRocket_tab_manager_domain') ?></a>
    </h2>

    <form class="tab_manager_submit_form" method="post" action="options.php">
        <?php 
        $options = BeRocket_tab_manager::get_option(); ?>
        <div class="nav-block general-block nav-block-active">
            <?php 
            $tabs = BeRocket_tab_manager::get_all_tabs();
            set_query_var( 'tabs', $tabs ); 
            set_query_var( 'options', $options );
            $tabs_typenow = 'main';
            set_query_var( 'tabs_typenow', $tabs_typenow );
            echo '<div class="berocket_tabs_for_cat berocket_tabs_for_cat_main">';
            include tab_manager_TEMPLATE_PATH . "tabs.php";
            echo '</div>';
            ?>
        </div>
        <div class="nav-block css-block">
            <table class="form-table license">
                <tr>
                    <th scope="row"><?php _e('Custom CSS', 'BeRocket_tab_manager_domain') ?></th>
                    <td>
                        <textarea name="br-tab_manager-options[custom_css]"><?php echo $options['custom_css']?></textarea>
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'BeRocket_tab_manager_domain') ?>" />
    </form>
</div>
<?php
$feature_list = array(
    'Tabs for specific products',
    'Tabs for specific categories',
    'Question/Answer type of tabs',
    'Products type of tabs',
);
@ include 'settings_footer.php';
?>
</div>
