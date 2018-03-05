<?php
/*
 * @package WordPress
 * @subpackage Tuto_Wordpress_Finalclap
 *
 * Ce template est utilisé pour afficher les posts de manière individuelle.
**/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>	

	<div class="post">
		<p>Catégorie(s) : <?php echo get_the_category_list(', '); ?><br/>
		Publié le <strong><?php echo get_the_time('d.m.Y à h:i'); ?></strong> <?php edit_post_link('(Editer)', '<em>', '</em>'); ?></p>
		<?php if (function_exists('sociable_html')) {echo sociable_html();} ?> 
	</div>

	<!-- TAGS -->
	<div class="tags">
		<!-- <div style="color: #3783AD; font: bolder 12pt Arial; margin-left: 4px;">Tags</div> -->
		<?php the_tags('','',''); ?>
	</div>
	<!-- /TAGS -->
	<div style="clear: left;"></div>
	<?php
	comments_template();
endwhile; else:
	echo '<p>Désolé, aucun billet ne correspond à votre recherche.</p>';
endif;

get_footer();
?>