<div id="br_tab_manager" class="panel wc-metaboxes-wrapper br_specific_tabs_div">
<div style="padding:1em;">
    <?php 
    if( !isset($fields_name) ) {
        $fields_name = 'sortable';
    }
    $randid = rand();
    $product_tabs = false;
    if ( 'product' == $tabs_typenow ) {
        global $post;
        $product_tabs = get_post_meta( $post->ID, 'br-tab_manager-options', true );
        if( isset($product_tabs['sortable'] ) && is_array($product_tabs) && count($product_tabs) > 0 ) {
            $options['sortable'] = $product_tabs['sortable'];
            if( isset($product_tabs['sortable_name']) ) {
                $options['sortable_name'] = $product_tabs['sortable_name'];
            } else {
                $options['sortable_name'] = array();
            }
        }
        $use_product_tabs = get_post_meta( $post->ID, 'br_use_specific_tabs', true );
        echo '<div><label><input class="br_use_specific_tabs" name="br_use_specific_tabs" type="checkbox" value="1" ', ($use_product_tabs ? 'checked' : ''), '>', __( 'Use specific tabs for this product', 'BeRocket_tab_manager_domain' ), '</label></div>';
    } elseif ( 'category' == $tabs_typenow ) {
        $use_product_tabs = @ $options['use_cat_tabs'][$fields_name];
        echo '<div><label><input class="br_use_specific_tabs" name="br-tab_manager-options[use_cat_tabs]['.$fields_name.']" type="checkbox" value="1" ', ($use_product_tabs ? 'checked' : ''), '>', __( 'Use specific tabs for this category', 'BeRocket_tab_manager_domain' ), '</label></div>';
    }
    $sortable = @ $options[$fields_name];
    $sortable_name = @ $options[$fields_name.'_name'];
    ?>
    <div class="br_tab_manager_tab_editor">
        <div id="br_tab_manager_sortable-<?php echo $randid; ?>" class="br-tab_manager-sortable">
        <?php 
            if( @ $sortable ) {
                asort($sortable, SORT_NUMERIC);
            }
            $tab_html = array();
            foreach( $tabs as $tab => $tabs_data ) {
                $edit = '';
                if( $tabs_data['type'] == 'global' ) {
                    $edit_link = get_edit_post_link( $tabs_data['id'] );
                    $edit = '<div><a class="button" href="' . $edit_link . '">' . __('Edit', 'woocommerce') . '</a></div>';
                }
                $tab_html[$tab] = '<div class="br-tab_manager-element br-element-'. $tab. '">
                        <input type="hidden" name="br-tab_manager-options['.$fields_name.']['. $tab. ']" value="">
                        <div class="br-tab_manager-header">
                            <h3>'. $tabs_data['title']. '</h3>
                            <span class="br-show_next_hidden"><i class="fa fa-caret-down"></i></span>
                            <span class="br-remove_tab button">'. __('Remove', 'BeRocket_tab_manager_domain'). '</span>
                        </div>
                        <div class="br_hidden br_display_none">
                        <h2>Title: '. ( $tabs_data['type'] == 'core' ? '<input name="br-tab_manager-options['.$fields_name.'_name]['. $tab. ']" type="text" value="'. ( ( isset($sortable_name[$tab]) && $sortable_name[$tab] != '' ) ? $sortable_name[$tab] : $tabs_data['title'] ). '">' : $tabs_data['title'] ). '</h2>
                        ' . $edit . '
                        <div>'.( isset($tabs_data['description']) ? $tabs_data['description'] : '' ).'</div>
                        </div>
                    </div>';
            }
            if( @ $sortable ) {
                foreach( $sortable as $tab => $position ) {
                    if( isset($tabs[$tab]) && is_numeric($position) ) {
                        echo $tab_html[$tab];
                    }
                }
            }
            ?>
        </div>
        <div>
            <select class="br-add-tab-select">
                <?php 
                foreach ($tabs as $tab => $tab_data) {
                    echo '<option value="', $tab, '">', $tab_data['title'], '</option>';
                }
                ?>
            </select>
            <script>var $tab_html<?php echo $randid;?> = <?php echo json_encode($tab_html); ?></script>
            <button type="button" class="button button-primary br-add-tab" data-randid="<?php echo $randid; ?>">Add Tab</button>
            <?php
            if ( 'product' == $tabs_typenow ) {
                echo '<a class="button" href="'.admin_url( 'post-new.php?post_type=br_product_tab&post_parent='.$post->ID ).'">'.__('Create new tab', 'BeRocket_tab_manager_domain').'</a><em>'.__('This tab will be available only for this product', 'BeRocket_tab_manager_domain').'</em>';
            } else {
                echo '<a class="button" href="'.admin_url( 'post-new.php?post_type=br_product_tab' ).'">'.__('Create new tab', 'BeRocket_tab_manager_domain').'</a>';
            }
            ?>
        </div>
        <?php 
        if ( ('product' == $tabs_typenow || 'category' == $tabs_typenow) && ! $use_product_tabs ) {
            echo '<div class="br_tab_editor_blocker"></div>';
        }
        ?>
    </div>
    <script>
    jQuery(function() {
        jQuery( "#br_tab_manager_sortable-<?php echo $randid; ?>" ).sortable({
            axis: "y",
            helper: "clone",
            opacity: 0.5,
            handle: ".br-tab_manager-header h3",
            stop: function( event, ui ) {
                jQuery('#br_tab_manager_sortable-<?php echo $randid; ?> div input[type=hidden]').each(function(i, o) {
                    jQuery(o).val(i);
                });
            }
        });
        jQuery('#br_tab_manager_sortable-<?php echo $randid; ?> div input[type=hidden]').each(function(i, o) {
            jQuery(o).val(i);
        });
        jQuery(document).on('change', '.br_use_specific_tabs', function() {
            if( jQuery(this).prop('checked') ) {
                jQuery(this).parents('.br_specific_tabs_div').find('.br_tab_editor_blocker').remove();
            } else {
                if( jQuery(this).parents('.br_specific_tabs_div').find('.br_tab_editor_blocker').length == 0 ) {
                    jQuery(this).parents('.br_specific_tabs_div').find('.br_tab_manager_tab_editor').append(jQuery('<div class="br_tab_editor_blocker"></div>'));
                }
            }
        });
    });
    </script>
</div>
</div>
<?php
$fields_name = 'sortable';
set_query_var( 'fields_name', $fields_name );
?>