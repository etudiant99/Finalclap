<?php
/*
 * @package WordPress
 * @subpackage Tuto_Wordpress_Finalclap
 *
 * Template utilisé pour l'affichage des commentaires :
 *  - liste des commentaires
 *  - affichage du formulaire d'envoi de commentaire
 * 
 * Il est inclus par le template single.php lors de l'appel à comments_template();
**/
?>
<div id="comments">

<?php if ( have_comments() ) : ?>
<!-- COMMENTS LIST -->
<div id="comments-title" class="post etape">
<a href="#reply-title">Laisser un commentaire</a>
<h3><?php comments_number('Pas encore de commentaire', '1 Commentaire', '% Commentaires'); ?> :</h3>
</div>

<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<?php echo get_avatar( $comment, 32 ); ?>
		
		<div class="metadata">
			<cite class="pseudo"><?php comment_author_link() ?></cite><br/>
			<span><a href="#comment-<?php comment_ID() ?>"><?php comment_date() ?></a></span>
			<?php edit_comment_link('(Editer)', '<span>&nbsp;&nbsp;', '</span>'); ?>
		</div>
		
		<?php comment_text() ?>
	</li>
<?php endforeach; ?>
</ol>
<!-- /COMMENTS LIST -->
<?php endif; ?>



<?php if ( comments_open() ) : ?>
<!-- REPLY -->
<div id="respond">
	<div id="reply-title" class="post etape">
		<h3>Laisser un commentaire</h3>
	</div>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<div class="comment-form">
	
		<?php if( is_user_logged_in() ){ ?>
		<div>
		<?php printf('Connecté en tant que <a href="%1$s">%2$s</a>.', get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?>
		<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Se déconnecter">Déconnexion &raquo;</a>
		</div><br/>
		
		<?php } else { ?>
		<label>Pseudo</label>
		<em>(Obligatoire)</em>
		<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" aria-required='true' />
		
		<label>Email</label>
		<em>(Obligatoire, mais ne sera pas affiché)</em>
		<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" aria-required='true' />
		
		<label>Site web</label> 
		<em>(facultatif)</em>
		<input type="text" name="url" id="url" value="<?php echo  esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
		<?php } ?>
		
		<label>Commentaire</label>
		<textarea name="comment" id="comment" rows="6" tabindex="4"></textarea>
		
		<button name="submit" type="submit" id="submit" tabindex="5">Envoyer le commentaire</button>
		
		<input type='hidden' name='comment_post_ID' value='4322' id='comment_post_ID' />
		<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
		
		<?php comment_id_fields(); ?> 
		<?php do_action('comment_form', $post->ID); ?>
		
	</div><!-- comment-form -->
	</form>
	
</div><!-- respond -->
<!-- /REPLY -->
<?php endif; ?>
</div><!-- END #comments -->