<?php

/**
 * Element Controls
 */

return array(

	'elements' => array(
		'type'    => 'sortable',
		'options' => array(
			'element' => 'my-sortable-element-item',
			'newTitle' => __( 'Item %s', csl18n() ),
			'floor'   => 1,
      'capacity' => 4,
      'title_field' => 'heading'
    ),
    'context' => 'content',
		'suggest' => array(
	    array( 'heading' => __( 'First Item', csl18n() ) ),
      array( 'heading' => __( 'Second Item', csl18n() ) ),
	  )
	),

	'linked' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Linked', 'my-extension' ),
			'tooltip' => __( 'Link these items together.', 'my-extension' ),
		),
	)

);