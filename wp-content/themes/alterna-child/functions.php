<?php
/**
 * alterna child theme functions and definitions
 *
 * @since alterna 9.4
 */
// ビジュアルエディタ用CSS
add_editor_style('editor-style.css');
function custom_editor_settings( $initArray ) {
  $initArray['body_class'] = 'editor-area';
  return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );
// FancyBox
function add_fancyBox_class( $html, $id = '', $caption = '', $title = '', $align = '', $url = '', $size = '', $alt = '' ) {
    return str_replace( '><img src', ' class="fancyBox"><img src', $html );
}
add_filter( 'image_send_to_editor', 'add_fancyBox_class' );
