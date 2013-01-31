<?php
/*
Template Name: Bildspel
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="bildspel-wrapper">
<div id="bildspel">
<?php echo get_royalslider(1); ?>
</div>
</div>
<div id="wrapper">
<div id="content">
<div id="article-wrapper">
<article>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
</article>
</div><!--end article-wrapper-->
<?php get_sidebar(); ?>
<div class="clear-fix"></div>

    </div><!--end content-->
   	</div><!--end wrapper-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>