<?php get_header(); ?>

<?php 
if(get_option('skypanel_broadcast_featured_style') != 'Featured Long' AND get_option('skypanel_broadcast_featured_style') != 'Featured Post' AND $video_ != 'true' AND get_option('skypanel_broadcast_featured_style') != '' ) { include_once('includes/featured.php'); }  elseif(get_option('skypanel_broadcast_featured_style') == 'Featured Post' OR $video_ == 'true') { include_once('includes/featured_post.php'); } 
?>

<?php if(get_option('skypanel_broadcast_blog_style_2_-_traditional_blog') == 'Disabled' OR get_option('skypanel_broadcast_blog_style_2_-_traditional_blog') == '' ){ ?>

<?php include_once('includes/categories.php'); ?>

<?php } else { ?>

<?php include_once('includes/blog_posts.php'); ?>

<?php } ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

</body>

</html>
