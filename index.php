<?php get_header(); ?>

<div class="col-xs-12 col-sm-3 leftSide">
	<div class="logoLeft">
		<img src="<?php echo bloginfo('template_directory') . '/img/grb.gif'; ?>" alt="Logo">
	</div>
	<?php global $blog_id;
			if( $blog_id == '2' ) {
	?>
	<div class="leftMenu">		
		<a href="#"><span class="arrow">Site map</span></a>
		<a href="#"><span class="arrow">Usefull links</span> </a>
		<a href="#"><span class="arrow">Важни телефони</span> </a>
		<a href="#"><span class="arrow">Галерија слика</span> </a>
		<a href="#"><span class="arrow">Документа</span> </a>
		<a href="#"><span class="arrow">Информатор</span> </a>
		<a href="#"><span class="arrow">Архива</span> </a>
		<a href="#"><span class="arrow">Контакт</span> </a>
	</div>				
<?php   } else {	?>
	<div class="leftMenu">
		<a href="#"><span class="arrow">Мапа сајта</span></a>
		<a href="#"><span class="arrow">Корисни линкови</span> </a>
		<a href="#"><span class="arrow">Важни телефони</span> </a>
		<a href="#"><span class="arrow">Галерија слика</span> </a>
		<a href="#"><span class="arrow">Документа</span> </a>
		<a href="#"><span class="arrow">Информатор</span> </a>
		<a href="#"><span class="arrow">Архива</span> </a>
		<a href="#"><span class="arrow">Контакт</span> </a>
	</div>
	<?php	}	?>
	<div class="leftCert">
		<img src="<?php echo bloginfo('template_directory') . '/img/iso.jpg'; ?>" alt="">
	</div>
	<ul><?php dynamic_sidebar('firstsidebar'); ?></ul>
	<ul><?php dynamic_sidebar('secondsidebar'); ?></ul>
	<ul><?php dynamic_sidebar('thirdsidebar'); ?></ul>
</div>	<!-- End left side -->

<div class="col-xs-12 col-sm-6">

				<!-- SLIDER START -->
			<div class="slide-margin">
				<?php
					$args = array(
						'posts_per_page' => 3
						);
					$the_query = new WP_Query($args);
					if($the_query->have_posts()):
						while($the_query->have_posts()) : $the_query->the_post();
				?>
			<div class="home_slider">
			 <div class="slide">
				 <a href="<?php the_permalink(); ?>">
				 	<div class="slide_image">
						<?php the_post_thumbnail() ?>
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


		<div class="col-xs-12 col-sm-3 sidebarTwo">
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

