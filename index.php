<?php get_header(); ?> 
	<article><div id='article'>
		<ul>
    	<?php get_sidebar('top'); ?>
			<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        	<li><section class='indexSection'>
            <?php 
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('thumbnail', array('class' => 'featured-image'));
              } 
            ?>
        		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          	<p class='theAuthorMeta'>Written by <a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('display_name'); ?></a></p>
          	<p><?php the_excerpt(); ?></p>
          	<div style='clear:both'></div>
            <div><?php get_sidebar('insideThePost'); ?></div>
          </section></li>
        <?php endwhile; ?>
    	<?php endif; ?>
    	<?php get_sidebar('bottom'); ?>
    	<div style='clear:both'></div>
    	<li><section class="indexSection navSection"><aside>
    		<?php posts_nav_link('</aside></section></li><li><section class="indexSection navSection"><aside>', 'Newer Posts', 'Older Posts'); ?>
			</aside></section></li>
			<div style='clear:both'></div>
		</ul>
	</div></article>
 <?php get_footer(); ?> 