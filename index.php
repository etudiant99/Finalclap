<?php
/*
 * @package WordPress
 * @subpackage Tuto_Wordpress_Finalclap
 *
 * Template par défaut
**/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<h1 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
		<?php /*
		<pre><?php
		$exemple_metas = get_post_custom();
		// pre( $ex_metas );
		// unset( $exemple_metas['lol'] );
		print_r( $exemple_metas );
		?></pre>
		*/ ?>
		
		<?php
		$exemple_metas = get_post_custom();
		if( isset($exemple_metas['image'][0]) ){
			// $post_miniature = $exemple_metas['image'][0];
			echo '<img src="'.$exemple_metas['image'][0].'" alt="" />';
		}
		?>
		
		<?php /*
		<img src="<?php echo $exemple_metas['image'][0] ?>" alt="" />
		*/ ?>
		
		<?php the_content(); ?>
	</div>

<?php endwhile; else: ?>

	<div class="post"><h3><?php echo 'Désolé, aucun article ne correspond à vos critères.'; ?></h3></div>
	
<?php endif; ?>



<div class="pagination">
	<?php posts_nav_link(' ', '◄ page précédente', 'page suivante ►'); ?>
</div>

<?php get_footer(); ?>