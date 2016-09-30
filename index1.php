<?php get_header(); ?>
	<div id="wrap">
		<div class="mainContent u-cf">
			<div class="naslov vazne"><p>Издвајамо</p></div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="post-item">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta"><?php the_date(); ?></p>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<!-- <img src="<?php echo bloginfo('template_directory') . '/postimages/img2.jpg' ; ?>" alt="post image 1" title="prva slika"/> -->
					<?php the_content(); ?>
				</div> <!-- END post-item -->

				<?php endwhile;?>
				
				<?php else : ?>
					<p>Грешка!</p>
				<?php endif; ?>
			<div class="naslov vesti"><p>Вести</p></div>

			<div class="more">
			<?php next_posts_link('Даље...'); ?>
			<?php previous_posts_link ('Предходна...'); ?>
			</div>

		</div> <!-- END mainContent -->

		<div class="sidebarOne">
			<?php dynamic_sidebar('firstsidebar'); ?>
			<?php dynamic_sidebar('secondsidebar'); ?>
			<?php dynamic_sidebar('thirdsidebar'); ?>
		</div> <!-- END sidebarOne -->
		<div class="sidebarTwo">
			<?php dynamic_sidebar('baneri'); ?>
		</div> <!-- END sidebarTwo -->

	</div> <!-- END WRAP -->

	</body>


</html>