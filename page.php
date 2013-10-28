<?php get_header(); ?> 
	<article><div id='article'>
		<ul>
    	<?php get_sidebar('top'); ?>
			<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        	<li><section>
        		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          	<p class='theAuthorMeta'>Written by <a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('display_name'); ?></a></p>
          	<p><?php the_content(); ?></p>
          	<div style='clear:both'></div>
            <div><?php get_sidebar('insideThePost'); ?></div>
          </section></li>
        <?php endwhile; ?>
    	<?php endif; ?>
    	<?php get_sidebar('bottom'); ?>
    	<div style='clear:both'></div>
			<div style='clear:both'></div>
		</ul>
	</div></article>
 <?php get_footer(); ?> 