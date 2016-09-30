<?php get_header(); ?>
	<div class="container wrap">
		<div class="row mainContent">

			<div class="col-md-3 sidebarOne">
				<div class="Sidebar1in">
					<span style="width:220px;display:block;margin-bottom:15px;"><img class="logoLeft" src="<?php echo bloginfo('template_directory') . '/img/grb.gif'; ?>" alt="Logo"></span>
					<!-- <img style="width:220px;height:45px;" src="<?php echo bloginfo('template_directory') . '/img/servis.png'; ?>" alt="Logo"> -->
					<ul>
						<li>
							 <p class="MnLv">Локална самоуправа</p>

							<a href="#"><p class="arrow">Председник општине</p></a>
	<!-- 						<a href="#"><p class="arrow">Заменик председника општине</p> </a> -->
							<a href="#"><p class="arrow">Скупштина општине</p> </a>
							<a href="#"><p class="arrow">    Председник скупштине</p> </a>
							<a href="#"><p class="arrow">    Секретар скупштине</p> </a>
							<a href="#"><p class="arrow">    Одборници</p> </a>
							<a href="#"><p class="arrow">Чланови општинског већа</p> </a>
							<a href="#"><p class="arrow">Начелник</p> </a>
							<a href="#"><p class="arrow">Одсеци и групе</p> </a>
							<a href="#"><p class="arrow">Канцеларија за младе</p> </a>
						</li>
					</ul>


					<ul><?php dynamic_sidebar('firstsidebar'); ?></ul>
					<ul><?php dynamic_sidebar('secondsidebar'); ?></ul>
					<ul><?php dynamic_sidebar('thirdsidebar'); ?></ul>
				</div>	
			</div>

			<div class="col-md-6">


				<!-- SLIDER START -->
				<?php
					$args = array(
						'posts_per_page' => 3
						);
					$the_query = new WP_Query($args);
					if($the_query->have_posts()):
				?>
				<div class="home_slider">
				<?php
					while($the_query->have_posts()) : $the_query->the_post();
				?>

			 <div class="slide">
				 	<a href="<?php the_permalink(); ?>">
				 	<div class="slide_image">
						<?php the_post_thumbnail('homepage-slider') ?>
					</div>
					<div class="slide_title">
						<?php the_title() ?>
					</div>	
				</a>
			</div>
			<?php endwhile; ?>
			</div>

			<script>
			$(document).ready(function() {
			$(".home_slider").owlCarousel({
				navigation : false, // Show next and prev buttons
				slideSpeed : 300,
				paginationSpeed : 400,
				singleItem:true,
				autoPlay:true,
				pagination:false
			});
 			});
			</script>
			<?php endif;?>
			<!-- SLIDER START -->



			<div class="naslov vazne"><p>Издвајамо</p></div>

				<?php $args = array('cat' => 3,	'posts_per_page' => 1); 
					$category_posts = new WP_Query($args);
					if($category_posts->have_posts()) : while($category_posts->have_posts()) : 	$category_posts->the_post(); ?>
						<div class="post-item">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="meta"><?php  the_time('d.m.Y'); ?></p>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
							</a>
							<p class="excrpt"><?php echo get_the_excerpt(); ?></p>
							<div style="clear:both"></div>
							<a href="<?php echo get_permalink(); ?>">Детаљније &raquo;</a>
						</div> <!-- END post-item -->

				<?php endwhile; else : endif;?>
				<?php wp_reset_postdata(); ?>
				

			<div class="naslov vesti"><p>Вести</p></div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post-item">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta"><?php the_time('d.m.Y'); ?></p>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail('thumbnail'); ?>
					</a>
					<p class="excrpt"><?php echo get_the_excerpt(); ?></p>
					<div style="clear:both"></div>
					<a href="<?php echo get_permalink(); ?>">Детаљније &raquo;</a>
				</div> <!-- END post-item -->

				<?php endwhile; else : endif; ?>

			</div> <!-- end col-md-6 -->






		<div class="col-md-3 sidebarTwo">
			<a href="#"><img src="http://localhost/goPalilula/wp-content/themes/palilulars/img/kzboBaner.jpg" alt=""></a>
			<a href="#"><img src="http://localhost/goPalilula/wp-content/themes/palilulars/img/pomozimoDeciBaner.jpg" alt=""></a>
		</div>	


		</div> <!-- END ROW -->
	</div> <!-- END WRAP -->
<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>


</html>