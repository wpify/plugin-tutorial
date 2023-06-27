<?php
/**
 * @var array $args
 */

$id    = $args['anchor'] ?? null;
$title = $args['title'] ?? null;
$isbn  = $args['isbn'] ?? null;

if ( ! $title ) {
	return;
}
?>
<h1<?= $id ? 'id="' . esc_attr( $id ) . '"' : '' ?> class="book-link">
	<?php
	echo esc_html( $title );

	if ( $isbn ) {
		echo ' (' . esc_html( $isbn ) . ')';
	}
	?>
</h1>
