<?php
/**
 * index.php
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="wrapper">

<div id="content">

<div id="article-wrapper">
<?php if ( have_posts() ): ?>
<h2>Blogg</h2>	

<?php while ( have_posts() ) : the_post(); ?>
			<article>
			<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time><br />
            
            <?php if ( has_post_thumbnail()) : // check if the post has a Post Thumbnail assigned to it. ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
  		<div class="img"><?php the_post_thumbnail('medium', array('class' => '')); ?> </div><!--end postimg--></a>
				<?php endif; ?>
            	<p><?php the_excerpt(); ?>
            
<a href="<?php the_permalink() ?>">► Läs mer...</a></p>
		</article>
<?php endwhile; ?>


<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
</div><!--end article-wrapper-->
<?php get_sidebar(); ?>

<div class="clear-fix"></div>
    </div><!--end content-->
   	</div><!--end wrapper-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>