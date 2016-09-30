<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/*
Template Name: Archive
*/
 get_header(); ?>

	<div class="container wrap">
		<div class="row">
				<div class="col-md-8 post-item arhiva content-blog">
					<div class="naslovBlog"> <p>Архива</p> </div>
					<?php
					global $query_string; 
					$posts = query_posts($query_string.'&posts_per_page=-1'); 
			if ( have_posts() ) :	while(have_posts() ) : the_post();	?>
						<div class="post-item">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_time('d.m.Y'); ?></p>
							<div class="post-entry">
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail('thumbnail'); ?>
									</a>
								<?php endif; ?>
								<?php the_excerpt(); ?>
								<a href="<?php echo get_permalink(); ?>">Детаљније &raquo;</a>
							</div><!-- end of .post-entry -->	
						</div>		
				<?php endwhile;
				wp_reset_query();
				endif; ?>
			</div> <!-- end col-md-8 -->
				<div class="col-md-4 ">	
					<?php dynamic_sidebar('baneri'); ?>
				</div>	<!-- end of col-md-4 -->
		</div> <!-- end row -->
	</div><!-- end wrap -->

<?php wp_footer(); ?>

	</body>


</html>