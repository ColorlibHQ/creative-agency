/**
 * Notice for Elementor, in the Elementor preview: offers to switch off
 * Elementor's default styles in favour of the theme's. No jQuery.
 *
 * @package Creative_Agency
 */

/* global creativeagencyElementorNotice */

(function () {
  'use strict';

  function run() {
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

    document.body.insertAdjacentHTML('afterbegin', dialog);
    Array.prototype.forEach.call(document.querySelectorAll('.creativeagency-elementor-notice-buttons > a'), function (link) {
      link.addEventListener('click', function () {
        var UI = window.ColorlibUI;
        if (!UI) return;
        var reply = link.getAttribute('data-reply');

        UI.request(creativeagencyElementorNotice.ajaxurl, {
          method: 'POST',
          data: {
            reply: reply,
            nonce: creativeagencyElementorNotice.nonce,
            action: 'elementor_desiable_default_style'
          }
        }).then(function () {
          if (reply === 'yes') {
            parent.location.reload();
          } else {
            UI.fade('.creativeagency-disable-elementor-styling', 'out', 500, function () {
              this.parentNode.removeChild(this);
            });
          }
        });
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', run);
  } else {
    run();
  }
}());
