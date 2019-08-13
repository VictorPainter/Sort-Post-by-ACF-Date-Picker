<?php 
$args = array(
	'cat' => 'event',
	'posts_per_page' => 2,
	'orderby' => 'meta_value',
	'meta_type' => 'DATE',
	'meta_key' => 'field name of date picker'	
);
$news = new WP_Query($args); 
?>
<?php while ($news->have_posts()) : $news->the_post(); ?>
	<li>
		<h3><?php the_field('date'); ?></h3>
		<h4><?php the_title(); ?></h4>
	</li>
<?php endwhile; ?>