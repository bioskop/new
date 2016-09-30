<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/*
Template Name: Blog Excerpt (summary)
*/

get_header(); ?>
<div class="container wrap">
	<div class="row">
		<div class="col-md-8  content-blog">
			<div class="naslovBlog"> <p>Вести</p> </div>
			<?php
			$args = array('post_type' => 'post', 'paged' => $paged, 'posts_per_page' => 4);
			$blog_query = new WP_Query($args);
			if ( $blog_query->have_posts() ) :	while( $blog_query->have_posts() ) : $blog_query->the_post();	?>

					<div class="post-item">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="meta"><?php  the_time('d.m.Y'); ?></p>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
						</a>
					<p class="excrpt"><?php echo get_the_excerpt(); ?></p>
					<div style="clear:both"></div>
					<a href="<?php echo get_permalink(); ?>">Детаљније &raquo;</a>
					</div><!-- end of .post-item -->

			<?php endwhile;	

				palilula_pagination($blog_query->max_num_pages);
				wp_reset_postdata();				
			endif;
			
			?>
		</div><!-- end of col-md-8 -->
		<div class="col-md-4">	
			<?php dynamic_sidebar('baneri'); ?>
		</div>	<!-- end of col-md-4 -->
	</div><!-- end of row -->
</div><!-- end of wrap -->
<?php wp_footer(); ?>

	</body>


</html>
