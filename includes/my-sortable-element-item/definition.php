<?php

/**
 * Element Definition: "My Sortable Element Item"
 */

class My_Sortable_Element_Item {

	public function ui() {
		return array(
      'title' => __( 'My Sortable Element Item', 'my-extension' )
    );
	}

	public function flags() {
		return array(
      'child' => true
    );
	}

	public function update_build_shortcode_atts( $atts, $parent ) {

		if ( ! is_null( $parent ) ) {
			$atts['linked'] = $parent['linked'];
		}

		return $atts;

	}


}