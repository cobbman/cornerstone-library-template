<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Heading &amp; Content', 'my-extension' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'my-extension' ),
		),
		'context' => 'content',
    'suggest' => __( 'Heading', 'my-extension' ),
	),

	'content' => array(
		'type'    => 'textarea',
		'context' => 'content',
		'suggest' => __( 'Click to inspect, then edit as needed.', 'my-extension' ),
	),

	'orientation' => array(
		'type' => 'choose',
		'ui' => array(
			'title' => __( 'Orientation', 'my-extension' ),
      'tooltip' => __( 'Choose to display the heading vertically or horizonatally', 'my-extension' ),
      'divider' => true
		),
		'options' => array(
			'divider' => true,
      'columns' => '2',
      'choices' => array(
        array( 'value' => 'vertical',   'tooltip' => __( 'Vertical', 'my-extension' ),   'icon' => fa_entity( 'arrows-v' ) ),
        array( 'value' => 'horizontal', 'tooltip' => __( 'Horizontal', 'my-extension' ), 'icon' => fa_entity( 'arrows-h' ) ),
      )
    )
  ),

	'heading_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Heading Color', 'my-extension' )
		)
	),

	'background_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Background Color', 'my-extension' )
		)
	),

	'border' => array(
	 	'mixin' => 'border',
	),

);