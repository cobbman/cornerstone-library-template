<?php

/**
 * Shortcode definition
 */

$class = 'my-sortable-element-item ' . $class;
?>

<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
<?php echo ( $linked ) ? 'LINKED' : 'UNLINKED'; ?>
</div>