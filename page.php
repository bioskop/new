<?php
/**
 * Page Template
 */

 get_header(); ?>
	<div class="container wrap">
		<div class="row">
			<div class="col-md-8 singlePage">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;?>
				
				<?php endif; ?>
			</div> <!-- END col-md-8 -->
			<div class="col-md-4">
				<div class="singleInfo">
				   <ul><?php dynamic_sidebar('infoBar'); ?></ul>
				</div>
			</div> <!-- END col-md-4 -->
					<div style="clear:both" class="footer">
			<p>
				Бранка Радичевића 1, 18000 Ниш, Тел: 018 290 600, Факс: 018 290 604, Е-Пошта info@palilula.eu
			</p>
		</div>	
		</div><!-- end of row -->
	</div> <!-- END WRAP -->
<?php wp_footer(); ?>

	</body>


</html>