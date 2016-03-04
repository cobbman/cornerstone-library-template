<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
		'type'    => 'title',
		'context' => 'content',
    'suggest' => __( 'Sortable Item', 'my-extension' ),
	),

	'amount' => array(
		'type'    => 'number',
		'ui' => array(
			'title' => __( 'Amount', 'my-extension' ),
      'tooltip' => __( 'Choose how many icons to display', 'my-extension' ),
		),
		'context' => 'content',
		'suggest' => __( 'Click to inspect, then edit as needed.', 'my-extension' ),
	),

	'icon' => array(
		'type' => 'icon-choose',
		'ui' => array(
			'title' => __( 'Icon', 'my-extension' ),
		),
		'context' => 'content',
		'suggest' => 'lightbulb-o',
  ),

	'link' => array(
	 	'mixin' => 'link',
	),

);