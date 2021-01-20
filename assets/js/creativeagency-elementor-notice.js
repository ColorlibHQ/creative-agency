/**
 * Notice for Elementor
 *
 * @package Creative_Agency
 */

/* global creativeagencyElementorNotice */

jQuery( document ).ready(
	function () {

			var style = '<style>.creativeagency-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.creativeagency-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.creativeagency-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.creativeagency-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.creativeagency-elementor-notice-buttons{border-top:1px solid #e6e9ec}.creativeagency-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.creativeagency-elementor-notice-buttons>a.creativeagency-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.creativeagency-elementor-notice-buttons>a.creativeagency-disable-default-styles{color:#9b0a46}</style>';

			var dialog = style + '<div class="creativeagency-disable-elementor-styling">' +
				'<div class="creativeagency-elementor-notice-wrapper">' +
					'<div class="creativeagency-elementor-notice-header">Creative_Agency supports default styling for Elementor widgets</div>' +
					'<div class="creativeagency-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
					'<div class="creativeagency-elementor-notice-buttons">' +
						'<a href="#" class="creativeagency-do-nothing" data-reply="no">No</a>' +
						'<a href="#" class="creativeagency-disable-default-styles" data-reply="yes">Yes</a>' +
					'</div>' +
				'</div>' +
			'</div>';

			jQuery( 'body' ).prepend( dialog );
			jQuery( '.creativeagency-elementor-notice-buttons > a' ).on(
				'click', function() {

					var reply = jQuery( this ).data( 'reply' );

					jQuery.ajax(
						{
							url: creativeagencyElementorNotice.ajaxurl,
							data: {
								reply: reply,
								nonce: creativeagencyElementorNotice.nonce,
								action: 'elementor_desiable_default_style'
							},
							type: 'post',
							success: function () {

								if ( reply === 'yes' ) {
									parent.location.reload();
								} else {
									jQuery( '.creativeagency-disable-elementor-styling' ).fadeOut( 500, function() { jQuery( this ).remove(); } );
								}
							}
						}
					);
				}
			);
	}
);
