<?php if(is_home()){ ?>
<div id="spotlight">
<div class="list_carousel">
<ul id="foo3">
<?php $spotlight = new WP_Query('meta_key=skyali_spotlight&showposts=50'); while($spotlight->have_posts()) : $spotlight->the_post(); ?>

<?php $image_id = get_post_thumbnail_id();  $image_url = wp_get_attachment_image_src($image_id,'large');  $image_url = $image_url[0]; ?>

<?php $blogurl = get_template_directory_uri() ; $image_url = str_replace($blogurl, '', $image_url); ?>

<li><a href="<?php the_permalink(); ?>" ><img src="<?php echo get_template_directory_uri() ; ?>/thumb.php?src=<?php echo $image_url; ?>&amp;w=179&amp;h=100&amp;zc=1&amp;q=100" alt="<?php echo the_title(); ?>" width="179" height="100" class="shorttitle" title="<?php the_title(); ?>" /></a></li>

<?php endwhile; ?>



	</ul>
<div class="clearfix"></div>
<a id="prev3" class="prev" href="#"></a>
<a id="next3" class="next" href="#"></a>
</div>
</div><?php } ?>