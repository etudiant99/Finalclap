<?php
/*
 * @package WordPress
 * @subpackage Tuto_Wordpress_Finalclap
 *
 * Le fichier functions.php sert à définir des paramètres wordpress
 * comme par exemple désactiver les flux RSS ou rendre son thème "widgetisable" en déclarant la sidebar
**/

# Astuce pour désactiver les liens flux rss
automatic_feed_links(false);

# Déclaration de la sidebar pour pouvoir afficher les widgets
if ( function_exists('register_sidebar') )
    register_sidebar();

add_action('pre_get_posts', 'exclude_tag_invisible' );
function exclude_tag_invisible(){
    global $wp_query;
     
    $invisible_tag_id = 50;
     
    if( !is_feed() ){
        $wp_query->query_vars['tag__not_in'] = array($invisible_tag_id);
    }
}
// Menus de navigation
register_nav_menus(array(
    'header' => 'Menu principal (header)'
));