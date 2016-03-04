<?php

/**
 * Element Definition: "My Sortable Element"
 */

class My_Sortable_Element {

	public function ui() {
		return array(
      'title'       => __( 'My Sortable Element', 'my-extension' )
    );
	}

	public function flags() {
		// dynamic_child allows child elements to render individually, but may cause
		// styling or behavioral issues in the page builder depending on how your
		// shortcodes work. If you have trouble with element presentation, try
		// removing this flag.
		return array(
			'dynamic_child' => true
		);
	}

}