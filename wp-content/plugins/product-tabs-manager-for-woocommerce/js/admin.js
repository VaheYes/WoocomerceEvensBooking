var br_saved_timeout;
var br_savin_ajax = false;
(function ($){
    $(document).ready( function () {
        $('.tab_manager_submit_form').submit( function(event) {
            event.preventDefault();
            if( !br_savin_ajax ) {
                br_savin_ajax = true;
                var form_data = $(this).serialize();
                form_data = 'action=br_tab_manager_settings_save&'+form_data;
                var url = ajaxurl;
                clearTimeout(br_saved_timeout);
                destroy_br_saved();
                $('body').append('<span class="br_saved br_saving"><i class="fa fa-refresh fa-spin"></i></span>');
                $.post(url, form_data, function (data) {
                    if($('.br_saved').length > 0) {
                        $('.br_saved').removeClass('br_saving').find('.fa').removeClass('fa-spin').removeClass('fa-refresh').addClass('fa-check');
                    } else {
                        $('body').append('<span class="br_saved"><i class="fa fa-check"></i></span>');
                    }
                    br_saved_timeout = setTimeout( function(){destroy_br_saved();}, 5000 );
                    br_savin_ajax = false;
                }, 'json').fail(function() {
                    if($('.br_saved').length > 0) {
                        $('.br_saved').removeClass('br_saving').addClass('br_not_saved').find('.fa').removeClass('fa-spin').removeClass('fa-refresh').addClass('fa-times');
                    } else {
                        $('body').append('<span class="br_saved br_not_saved"><i class="fa fa-times"></i></span>');
                    }
                    br_saved_timeout = setTimeout( function(){destroy_br_saved();}, 5000 );
                    $('.br_save_error').html(data.responseText);
                    br_savin_ajax = false;
                });
            }
        });
        function destroy_br_saved() {
            $('.br_saved').addClass('br_saved_remove');
            var $get = $('.br_saved');
            setTimeout( function(){$get.remove();}, 200 );
        }
        $(window).on('keydown', function(event) {
            if (event.ctrlKey || event.metaKey) {
                switch (String.fromCharCode(event.which).toLowerCase()) {
                case 's':
                    event.preventDefault();
                    $('.tab_manager_submit_form').submit();
                    break;
                }
            }
        });
        $('.br_settings .nav-tab').click(function(event) {
            event.preventDefault();
            $('.nav-tab-active').removeClass('nav-tab-active');
            $('.nav-block-active').removeClass('nav-block-active');
            $(this).addClass('nav-tab-active');
            $('.'+$(this).data('block')+'-block').addClass('nav-block-active');
        });
        $(document).on('click', '.br-tab_manager-header', function (event) {
            var $block = $(this).parents('.br-tab_manager-element').find('.br_hidden');
            var $caret = $(this).find('.br-show_next_hidden .fa');
            if ( $block.is('.br_display_none') ) {
                $block.removeClass('br_display_none');
                $caret.removeClass('fa-caret-down').addClass('fa-caret-up');
            } else {
                $block.addClass('br_display_none');
                $caret.removeClass('fa-caret-up').addClass('fa-caret-down');
            }
        });
        $(document).on('click', '.br-remove_tab', function (event) {
            event.stopPropagation();
            $(this).parents('.br-tab_manager-element').remove();
        });
        $('.br-add-tab').click( function() {
            var $parent = $(this).parents('.br_tab_manager_tab_editor');
            var tab_html_current = window['$tab_html'+$(this).data('randid')];
             if( $parent.find('.br-element-'+$parent.find('.br-add-tab-select').val()).length == 0 ) {
                $parent.find('.br-tab_manager-sortable').append( $( tab_html_current[$parent.find('.br-add-tab-select').val()] ) );
                $parent.find('.br-tab_manager-sortable div input[type=hidden]').each(function(i, o) {
                    jQuery(o).val(i);
                });
             }
        });
        $(document).on('change', '.berocket_change_tabs_options', function() {
            $('.berocket_tabs_for_cat').hide();
            $('.berocket_tabs_for_cat_'+$(this).val()).show();
        });
    });
})(jQuery);