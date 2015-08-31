<?php
/**
 *
 * To discover more fields you can use, see examples from current Cornerstone elements! Here's where you'll find them:
 * In the Cornerstone plugin, look in /includes/modules/elements/ and /includes/modules/shortcodes
 *
 * You can find the function reference and inline documentation in this file (of the Cornerstone Plugin):
 *   -------------------------------------------
 *  |   /cornerstone/includes/utility/api.php   |
 *   -------------------------------------------
 *
 * For more documentation, please see: https://theme.co/community/kb/cornerstone-custom-elements/
 *
 **/
?>

<?php

class CSL_Template_Name extends Cornerstone_Element_Base {

  public function data() {
    return array(
      'name'        => 'csl-template-name',
      'title'       => __( 'Template Name', csl18n() ),
      'section'     => 'content',
      'description' => __( 'Template Name description.', csl18n() ),
      'supports'    => array( 'id', 'class', 'style' ),
      'childType'   => 'csl-template-name-item',
      'renderChild' => true
    );
  }

  public function controls() {

    $this->addControl(
      'elements', // control name
      'sortable', // control type
      __( 'Template Name Items', csl18n() ), // Message
      __( 'Add a new item to your Template Name.', csl18n() ), // Tooltip text
      array(
        array( 'title' => __( 'Template Name 1', csl18n() ), 'content' => __( 'Add some content to your Template Name here.', csl18n() ) ),
        array( 'title' => __( 'Template Name 2', csl18n() ), 'content' => __( 'Add some content to your Template Name here.', csl18n() ) )
      ), // placeholder content or default items
      array(
        'newTitle' => __( 'Template Name %s', csl18n() ),
        'floor'    => 1
      ) // new item format
    );

    $this->addSupport( 'id',
      array( 'options' => array( 'monospace' => true ) )
    );
  }

  public function render( $atts ) {

    extract( $atts );

    $contents = '';

    foreach ( $elements as $e ) {

      $item_extra = $this->extra( array(
        'id'    => $e['id'],
        'class' => $e['class'],
        'style' => $e['style']
      ) );

      $e['parent_id'] = ( $link_items == 'true' && $id != '' ) ? $id : '';

      $contents .= '[csl_template_name_item title="' . $e['title'] . '" ';
      $contents .= 'open="' . $e['open']  . '"' . $item_extra . ']' . $e['content'] . '[/csl_template_name_item]';

    }

    $shortcode = "[csl_template_name{$extra}]{$contents}[/csl_template_name]";

    return $shortcode;

  }

}