/**
 * This file is part of the TinyMCE Advanced WordPress plugin and is released under the same license.
 * For more information please see tinymce-advanced.php.
 *
 * Copyright (c) 2007-2019 Andrew Ozz. All rights reserved.
 */

jQuery( document ).ready( function( $ ) {
	var $importElement = $('#tadv-import');
	var $importError = $('#tadv-import-error');

	function sortClassic() {
		var container = $('.container');

		if ( container.sortable( 'instance' ) ) {
			container.sortable( 'destroy' );
		}

		container.sortable({
			connectWith: '.container',
			items: '> li',
			cursor: 'move',
			stop: function( event, ui ) {
				var toolbar_id;

				if ( ui && ( toolbar_id = ui.item.parent().attr('id') ) ) {
					ui.item.find('input.tadv-button').attr('name', toolbar_id + '[]');
				}
			},
			activate: function( event, ui ) {
				$(this).parent().addClass( 'highlighted' );
			},
			deactivate: function( event, ui ) {
				$(this).parent().removeClass( 'highlighted' );
			},
			revert: 300,
			opacity: 0.7,
			placeholder: 'tadv-placeholder',
			forcePlaceholderSize: true
		});
	}

	function sortBlock() {
		var classicBlock = $( '.container-classic-block' );
		var block = $( '.container-block' );
		var blockToolbar = $( '#toolbar_block' );

		if ( classicBlock.sortable( 'instance' ) ) {
			classicBlock.sortable( 'destroy' );
		}

		if ( block.sortable( 'instance' ) ) {
			block.sortable( 'destroy' );
		}

		if ( blockToolbar.sortable( 'instance' ) ) {
			blockToolbar.sortable( 'destroy' );
		}

		classicBlock.sortable({
			connectWith: '.container-classic-block',
			items: '> li',
			cursor: 'move',
			stop: function( event, ui ) {
				var toolbar_id;

				if ( ui && ( toolbar_id = ui.item.parent().attr( 'id' ) ) ) {
					ui.item.find( 'input.tadv-button' ).attr( 'name', toolbar_id + '[]' );
				}
			},
			activate: function( event, ui ) {
				$(this).parent().addClass( 'highlighted' );
			},
			deactivate: function( event, ui ) {
				$(this).parent().removeClass( 'highlighted' );
			},
			revert: 300,
			opacity: 0.7,
			placeholder: 'tadv-placeholder',
			forcePlaceholderSize: true
		});

		blockToolbar.sortable({
			connectWith: '.container-block',
			items: '> li',
			cursor: 'move',
			stop: function( event, ui ) {
				var parent = ui.item.parent();
				var toolbar_id = parent.attr( 'id' );

				if ( ui.item.is( '.core-link' ) && parent.is( '#toolbar_block_side' ) ) {
					blockToolbar.sortable( 'cancel' );
					return;
				}

				if ( toolbar_id ) {
					ui.item.find( 'input[type="hidden"]' ).attr( 'name', toolbar_id + '[]' );
				}

				sortBlockToolbar();
			},
			activate: function( event, ui ) {
				$(this).parent().addClass( 'highlighted' );
			},
			deactivate: function( event, ui ) {
				$(this).parent().removeClass( 'highlighted' );
			},
			revert: 300,
			opacity: 0.7,
			placeholder: 'tadv-placeholder',
			forcePlaceholderSize: true
		});

		block.sortable({
			connectWith: '.container-block, #toolbar_block',
			items: '> li',
			cursor: 'move',
			stop: function( event, ui ) {
				var parent = ui.item.parent();
				var toolbar_id = parent.attr( 'id' );

				if ( ui.item.is( '.core-link' ) && parent.is( '#toolbar_block_side' ) ) {
					block.sortable( 'cancel' );
				}

				if ( toolbar_id ) {
					ui.item.find( 'input[type="hidden"]' ).attr( 'name', toolbar_id + '[]' );
				}

				blockToolbar.css( 'min-width', '' );
				sortBlockToolbar();
			},
			activate: function( event, ui ) {
				$(this).parent().addClass( 'highlighted' );
			},
			deactivate: function( event, ui ) {
				$(this).parent().removeClass( 'highlighted' );
			},
			start: function( event, ui ) {
				var width = parseInt( blockToolbar.css( 'width' ), 10 );

				if ( width ) {
					blockToolbar.css( 'min-width', 36 + width );
				}
			},
			revert: 300,
			opacity: 0.7,
			placeholder: 'tadv-block-placeholder',
			forcePlaceholderSize: true
		});
	}

	function sortBlockToolbar() {
		var toolbar = $( '#toolbar_block' );
		var sort = [ 'core-strikethrough', 'core-link', 'core-italic', 'core-bold' ];

		$.each( sort, function( i, className ) {
			var button = toolbar.find( '> li.' + className )

			if ( button.length ) {
				button.prependTo( toolbar );
			}

		} );
	}

	// Make block editor tab sortable on load
	sortBlock();

	$( '.settings-toggle.block' ).on( 'focus', function( event ) {
		$( '.wrap' ).removeClass( 'classic-active' ).addClass( 'block-active' );
		sortBlock();
	});

	$( '.settings-toggle.classic' ).on( 'focus', function( event ) {
		$( '.wrap' ).removeClass( 'block-active' ).addClass( 'classic-active' );
		sortClassic();
	});

	$( '#menubar' ).on( 'change', function() {
		$( '.tadv-mce-menu.tadv-classic-editor' ).toggleClass( 'enabled', $(this).prop('checked') );
	});

	$( '#menubar_block' ).on( 'change', function() {
		$( '.tadv-mce-menu.tadv-block-editor' ).toggleClass( 'enabled', $(this).prop('checked') );
	});

	$( '#tadvadmins' ).on( 'submit', function() {
		$( 'ul.container' ).each( function( i, node ) {
			$( node ).find( '.tadv-button' ).attr( 'name', node.id ? node.id + '[]' : '' );
		});
	});

	$( 'input[name="selected_text_color"]' ).on( 'change', function() {
		if ( this.id === 'selected_text_color_yes' ) {
			$( '.panel-block-text-color' ).removeClass( 'disabled' );
		} else {
			$( '.panel-block-text-color' ).addClass( 'disabled' );
		}
	} );

	$( 'input[name="selected_text_background_color"]' ).on( 'change', function() {
		if ( this.id === 'selected_text_background_color_yes' ) {
			$( '.panel-block-background-color' ).removeClass( 'disabled' );
		} else {
			$( '.panel-block-background-color' ).addClass( 'disabled' );
		}
	} );
	
	$( '.tadv-popout-help-toggle, .tadv-popout-help-close' ).on( 'click', function( event ) {
		$( '.tadv-popout-help' ).toggleClass( 'hidden' );
	} );

	$('#tadv-export-select').click( function() {
		$('#tadv-export').focus().select();
	});

	$importElement.change( function() {
		$importError.empty();
	});

	$('#tadv-import-verify').click( function() {
		var string;

		string = ( $importElement.val() || '' ).replace( /^[^{]*/, '' ).replace( /[^}]*$/, '' );
		$importElement.val( string );

		try {
			JSON.parse( string );
			$importError.text( 'No errors.' );
		} catch( error ) {
			$importError.text( error );
		}
	});

	function translate( str ) {
		if ( window.tadvTranslation.hasOwnProperty( str ) ) {
			return window.tadvTranslation[str];
		}
		return str;
	}

	if ( typeof window.tadvTranslation === 'object' ) {
		$( '.tadvitem' ).each( function( i, element ) {
			var $element = $( element ),
				$descr = $element.find( '.descr' ),
				text = $descr.text();

			if ( text ) {
				text = translate( text );
				$descr.text( text );
				$element.find( '.mce-ico' ).attr( 'title', text );
			}
		});

		$( '.tadv-mce-menu .tadv-translate' ).each( function( i, element ) {
			var $element = $( element ),
				text = $element.text();

			if ( text ) {
				$element.text( translate( text ) );
			}
		});
	}
});
