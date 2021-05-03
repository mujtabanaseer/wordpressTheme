<?php
$path= get_template_directory_uri();
get_header();

?>
		<!-- Slider Area -->
		<section class="home-slider">
            <?php dynamic_sidebar('widget-main-slider') ?>
		</section>
		<!--/ End Slider Area -->
		<!-- Features -->
		<section class="our-features section">
			<div class="container">
                <?php dynamic_sidebar('widget-educational-solution')?>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 feature-edu">
						<!-- Single Feature -->
                        <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post();?>
						<div class="single-feature m-4">
							<div class="feature-head">
								<img src="http://via.placeholder.com/370x250" alt="#">
							</div>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
                        <?php endwhile;
                        endif; ?>
						<!--/ End Single Feature -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Features -->
		
		<!-- Enroll -->
		<section class="enroll overlay section" data-stellar-background-ratio="0.5">
            <?php dynamic_sidebar('widget-enroll-today') ?>
		</section>
		<!--/ End Enroll -->

		<!-- Courses -->
		<section class="courses section-bg section">
            <?php dynamic_sidebar('widget-course-offer') ?>
		</section>
		<!--/ End Courses -->	
		
		<!-- Call To Action -->
		<section class="cta" data-stellar-background-ratio="0.5">
            <?php dynamic_sidebar('widget-focus-on') ?>
		</section>
		<!--/ End Call To Action -->
		
		<!-- Team -->
		<section class="team section">
            <?php dynamic_sidebar('widget-awesome-teacher'); ?>
		</section>
		<!--/ End Team -->
		
		<!-- Testimonials -->
		<section class="testimonials overlay section" data-stellar-background-ratio="0.5">
            <?php dynamic_sidebar('widget-comments') ?>
		</section>
		<!--/ End Testimonials -->
		
		<!-- Events -->
		<section class="events section">
			<?php dynamic_sidebar('widget-events') ?>
		</section>
		<!--/ End Events -->
		
		<!-- Fun Facts -->
		<div class="fun-facts overlay" data-stellar-background-ratio="0.5">
			<?php dynamic_sidebar('widget-achievements') ?>
		</div>
		<!--/ End Fun Facts -->
		
		<!-- Blogs -->
		<section class="blog section">
			<?php dynamic_sidebar('widget-news') ?>
		</section>
		<!--/ End Blogs -->
		
<?php get_footer(); ?>
