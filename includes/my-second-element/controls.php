<?php

/**
 * Element Controls
 */

return array(

	'date' => array(
		'type'    => 'date',
		'ui' => array(
			'title' => __( 'Date', 'my-extension' ),
		),
		'options' => array(
			//'choose_format' => false
		)
	),

	'content' => array(
		'type'    => 'editor',

		'context' => 'content',
		'suggest' => __( 'Click to inspect, then edit as needed.', 'my-extension' ),
	),

	'image' => array(
		'type' => 'image',
		'ui' => array(
			'title' => __( 'Image', 'my-extension' ),
      'tooltip' => __( 'Choose an image to display above your content.', 'my-extension' ),
		)
  ),

	'image_padding' => array(
	 	'type' => 'dimensions',
	 	'ui' => array(
			'title'   => __( 'Image Padding', 'my-extension' )
		)
	),

	'features' => array(
	 	'type' => 'multi-choose',
	 	'ui' => array(
			'title'   => __( 'Extra Features', 'my-extension' )
		),
		'options' => array(
      'columns' => '4',
      'choices' => array(
        array( 'value' => 'option1', 'icon' => fa_entity( 'bolt' ) ),
        array( 'value' => 'option2', 'icon' => fa_entity( 'camera' ) ),
        array( 'value' => 'option3', 'icon' => fa_entity( 'flask' ) ),
        array( 'value' => 'option4', 'icon' => fa_entity( 'leaf' ) ),
      )
    ),
	),

	'image_animation' => array(
	 	'mixin' => 'animation',
	),

);