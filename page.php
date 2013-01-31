<?php
/**
Standardmall
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="wrapper">
<div id="content">
<div id="article-wrapper">
<article>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php if ( has_post_thumbnail()) : // check if the post has a Post Thumbnail assigned to it. ?>
   
  		<div class="pageimg"><?php the_post_thumbnail('large', array('class' => '')); ?> </div><!--end pageimg-->
				<?php endif; ?>
<?php the_content(); ?>
<?php endwhile; ?>
</article>
</div><!--end article-wrapper-->
<?php get_sidebar(); ?>
    <div class="clear-fix"></div>
    </div><!--end content-->
   	</div><!--end wrapper-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>