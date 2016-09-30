<?php
/**
 * Single Posts Template
 */

 get_header(); ?>
	<div class="container wrap">
		<div class="row">
			<div class="col-md-8 singlePost">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>				
					<div class="singleTop">
						<p>ОБЈАВЉЕНО <?php the_time('d.m.Y'); ?></p>
					</div>
					<h2><?php the_title(); ?></h2>
					<div class="social">
						<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="recommend" data-show-faces="true" data-share="true"></div>
					</div>	
					<div class="singleThumb ">
						<?php the_post_thumbnail( 'large', array( 'title' => get_the_title() ) );  ?>
					</div>				
					<div class="singleContent">
						<?php the_content(); ?>
					</div>		
				<?php endwhile; endif;?>
			</div> <!-- END col-md-8 -->
			<div class="col-md-4">
				<div class="singleInfo">
				   <ul><?php dynamic_sidebar('baneri'); ?></ul>   
				   <!-- <ul><?php dynamic_sidebar('infoBar'); ?></ul> -->
				</div>
			</div> <!-- END col-md-4 -->
		</div><!-- end of row -->
	</div> <!-- END WRAP -->
<?php wp_footer(); ?>

	</body>


</html>