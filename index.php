<?php get_header(); ?>
	<div class="container wrap">
		<div class="row mainContent">

			<div class="col-md-3 sidebarOne">
				<div class="Sidebar1in">
					<span style="width:220px;display:block;margin-bottom:15px;">
						<img class="logoLeft" src="<?php echo bloginfo('template_directory') . '/img/grb.gif'; ?>" alt="Logo">
					</span>
					<?php global $blog_id;
							if( $blog_id == '2' ) {
					?>
							<ul>
								<li>
									 <p class="MnLv"></p>

									<a href="#"><p class="arrow">Site map</p></a>
									<a href="#"><p class="arrow">Usefull links</p> </a>
									<a href="#"><p class="arrow">Важни телефони</p> </a>
									<a href="#"><p class="arrow">Галерија слика</p> </a>
									<a href="#"><p class="arrow">Документа</p> </a>
									<a href="#"><p class="arrow">Информатор</p> </a>
									<a href="#"><p class="arrow">Архива</p> </a>
									<a href="#"><p class="arrow">Контакт</p> </a>
								</li>
							</ul>					
					<?php   } else {	?>
							<ul>
								<li>
									 <p class="MnLv"></p>

									<a href="#"><p class="arrow">Мапа сајта</p></a>
									<a href="#"><p class="arrow">Корисни линкови</p> </a>
									<a href="#"><p class="arrow">Важни телефони</p> </a>
									<a href="#"><p class="arrow">Галерија слика</p> </a>
									<a href="#"><p class="arrow">Документа</p> </a>
									<a href="#"><p class="arrow">Информатор</p> </a>
									<a href="#"><p class="arrow">Архива</p> </a>
									<a href="#"><p class="arrow">Контакт</p> </a>
								</li>
							</ul>
					<?php	}	?>

					<img src="<?php echo bloginfo('template_directory') . '/img/iso.jpg'; ?>" alt="">

					<ul><?php dynamic_sidebar('firstsidebar'); ?></ul>
					<ul><?php dynamic_sidebar('secondsidebar'); ?></ul>
					<ul><?php dynamic_sidebar('thirdsidebar'); ?></ul>
				</div>	
			</div>

			<div class="col-md-6">


				<!-- SLIDER START -->
			<div class="slide-margin">
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
		</div>
			<!-- SLIDER END -->


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
			<a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/gradNis.png'; ?>" alt=""></a>
			<a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/ban1.png'; ?>" alt=""></a>
			<a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/ban2.png'; ?>" alt=""></a>
			<a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/ban3.png'; ?>" alt=""></a>
			<a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/ban4.png'; ?>" alt=""></a>
			<a href="#"><img src="<?php echo bloginfo('template_directory') . '/img/ban5.png'; ?>" alt=""></a>
			<a href="cat.html"><img src="<?php echo bloginfo('template_directory') . '/img/ban11.png'; ?>" 
					onMouseOver="this.src='<?php echo bloginfo('template_directory') . '/img/ban12.png'; ?>'" 
					onMouseOut="this.src='<?php echo bloginfo('template_directory') . '/img/ban11.png'; ?>'" />
			</a>

		</div>	
<?php get_footer(); ?>

