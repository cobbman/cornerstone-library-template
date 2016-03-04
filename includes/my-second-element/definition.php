<?php

/**
 * Element Definition
 */

class My_Second_Element {

	public function ui() {
		return array(
      'title'       => __( 'My Second Element', 'my-extension' ),
      'autofocus' => array(
    		'heading' => 'h4.my-second-element-heading',
    		'content' => '.my-second-element'
    	),
    	'icon_group' => 'my-extension'
    );
	}

}