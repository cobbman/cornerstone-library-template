<?php

// Adv Accordion
// =============================================================================

function csl_shortcode_template_name( $atts, $content = null ) {
  extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => ''
  ), $atts, 'csl_template_name' ) );

  $id    = ( $id    != '' ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class = ( $class != '' ) ? 'class="csl-template-name ' . esc_attr( $class ) . '"' : 'csl-template-name';
  $style = ( $style != '' ) ? 'style="' . $style . '"' : '';

  $output = "<div {$id} {$class} {$style}>" . do_shortcode( $content ) . "</div>";

  return $output;
}

add_shortcode( 'csl_template_name', 'csl_shortcode_template_name' );



// Adv Accordion Item
// =============================================================================

function csl_shortcode_template_name_item( $atts, $content = null ) {
  extract( shortcode_atts( array(
    'id'        => '',
    'class'     => '',
    'style'     => '',
    'parent_id' => '',
    'title'     => '',
  ), $atts, 'csl_template_name_item' ) );

  $id        = ( $id        != ''     ) ? 'id="' . esc_attr( $id ) . '"' : '';
  $class     = ( $class     != ''     ) ? 'class="csl-template-name-item ' . esc_attr( $class ) : 'csl-template-name-item';
  $style     = ( $style     != ''     ) ? 'style="' . $style . '"' : '';
  $parent_id = ( $parent_id != ''     ) ? 'data-parent="#' . $parent_id . '"' : '';
  $title     = ( $title     != ''     ) ? $title : 'Make Sure to Set a Title';
  $open      = ( $open      == 'true' ) ? 'collapse in' : 'collapse';

  static $count = 0; $count++;

  if ( $open == 'collapse in' ) {

    $output = "<div {$id} {$class} {$style}>"
              . '<div class="x-accordion-heading">'
                . "<a class=\"x-accordion-toggle\" {$color} data-toggle=\"collapse\" {$parent_id} href=\"#collapse-{$count}\"><span class=\"adv-title\">{$title}</span> <span class=\"extra-title\">{$title_extra}</span></a>"
              . '</div>'
              . "<div id=\"collapse-{$count}\" class=\"accordion-body {$open}\">"
                . '<div class="x-accordion-inner">'
                  . do_shortcode( $content )
                . '</div>'
              . '</div>'
            . '</div>';

  } else {

    $output = "<div {$id} class=\"{$class}\" {$style}>"
              . '<div class="x-accordion-heading">'
                . "<a class=\"x-accordion-toggle collapsed\" {$color} data-toggle=\"collapse\" {$parent_id} href=\"#collapse-{$count}\"><span class=\"adv-title\">{$title}</span> <span class=\"extra-title\">{$title_extra}</span></a>"
              . '</div>'
              . "<div id=\"collapse-{$count}\" class=\"accordion-body {$open}\">"
                . '<div class="x-accordion-inner">'
                  . do_shortcode( $content )
                . '</div>'
              . '</div>'
            . '</div>';

  }

  return $output;
}

add_shortcode( 'csl_template_name_item', 'csl_shortcode_template_name_item' );