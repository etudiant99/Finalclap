<?php
/*
 * @package WordPress
 * @subpackage Tuto_Wordpress_Finalclap
**/
?>
</div><!-- END CONTENT -->
<?php get_sidebar(); ?>
<div style="clear: both;"></div>
</div><!-- END WRAP -->

<div id="footer_wrap">
<div id="footer" role="contentinfo">
	
	<div style="float: right; text-align: right;">
	<a href="http://www.finalclap.com/">Un lien</a><br/>
	<?php echo get_num_queries(); ?> requêtes en <?php timer_stop(1); ?> secondes
	</div>
	
	&copy; <!--Votre site--> finalclap.com
	<div style="font-size: 8pt; margin-top: 3px;">Powered by <a href="http://wordpress.org"><b>Wordpress</b></a>.</div>
	<?php wp_footer(); ?>
	
	<div style="clear: both;"></div>

</div>
</div>

</body>
</html>