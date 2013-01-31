<?php
/**
 * Blogg
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="wrapper">
<div id="content">
<div id="article-wrapper">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>
	<h3><?php the_title(); ?></h3>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
	<?php the_content(); ?>			

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>
<div class="clear-fix"></div>
	<?php comments_template( '', true ); ?>

</article>
<?php endwhile; ?>
</div><!--end article-wrapper-->
<?php get_sidebar(); ?>

<div class="clear-fix"></div>
    </div><!--end content-->
   	</div><!--end wrapper-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>