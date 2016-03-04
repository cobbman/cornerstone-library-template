<?php

/**
 * Shortcode definition
 */

$class = "my-element my-element-$orientation " . $class;

?>

<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ) ); ?>>
<?php if ( $heading ) : ?>
	<h4 class="my-element-heading" style="color:<?php echo $heading_color;?>"> <?php echo $heading; ?></h4>
<?php endif; ?>
<?php echo $content; ?>
</div>