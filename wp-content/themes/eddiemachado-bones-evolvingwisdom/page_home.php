<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
			<div id="homeBanner">
				<h2>Evolving Wisdom is today's fastest growing global e-learning community specializing in transformative education.</h2>

				<p>Our virtual courses, online workshops and teleseminar events with today’s leading transformational teachers and authors don’t just inspire you with new possibilities or fill your mind with big ideas—they guide you through a process of deep transformation, so that you can begin to LIVE the extraordinary, awakened life you’ve always sensed was possible.  <a class="learnMore" href="#">> Read More</a></p>
			</div> <!-- end #homeBanner -->

			<div id="content">
				<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<div class="shadowBoxClosedContainer">
						<div class="shadowBoxClosedTop">
							<div class="shadowBoxClosedTopDiv"></div>
						</div> <!-- end .shadowBoxClosedTop -->

						<div class="shadowBoxClosedInner">
							<div class="course-box">
								<h2>Integral &amp; Evolutionary Spirituality</h2>
								
								<img class="alignleft size-full wp-image-62" src="http://23.253.229.120/wp-content/uploads/2015/03/content-category1.jpg" alt="content-category1" width="106" height="148" />

								<p>The integral and evolutionary approaches to personal and collective spiritual transformation are helping define a new spiritual path for the 21st century.
								<br>
								<a class="learnMore" href="/programs/integral-and-evolutionary-spirituality">&gt; Learn More</a></p>
							</div>
							
							<div class="course-box">
								<h2>Women's Spirituality &amp; Empowerment</h2>
								
								<img class="alignleft size-full wp-image-65" src="http://23.253.229.120/wp-content/uploads/2015/03/content-category2.jpg" alt="content-category2" width="106" height="148" />

								<p>Our women's programs provide the tools, training and support that today's awakening women need to realize their highest potential.
								<br>
								<a class="learnMore" href="/programs/womens-spirituality-and-empowerment">&gt; Learn More</a></p>
							</div>
							
							<div class="clearfix"></div>

							<div class="contentBoxDiv"></div>

							<div class="course-box">
								<h2>Life Purpose</h2>
								
								<img class="alignleft size-full wp-image-66" src="http://23.253.229.120/wp-content/uploads/2015/03/content-category3.jpg" alt="content-category3" width="106" height="148" />

								<p>Our programs on purpose teach the art and science of uncovering, exploring and achieving your greatest potential in life.
								<br>
								<a class="learnMore" href="/programs/life-purpose">&gt; Learn More</a></p>
							</div>							
							
							<div class="course-box">
								<h2>Love &amp; Relationships</h2>

								<img class="alignleft size-full wp-image-64" src="http://23.253.229.120/wp-content/uploads/2015/03/content-category4.jpg" alt="content-category4" width="106" height="148" />

								<p>We offer supportive programs designed to free you from limitations to love and to open new doors to the meaningful relationships you’ve dreamed of.
								<br>
								<a class="learnMore" href="/programs/love-and-relationships">&gt; Learn More</a></p>
							</div>

							<div class="clearfix"></div>

							<div class="contentBoxDiv"></div>
							
							<div class="course-box">
								<h2>Personal &amp; Spiritual Transformation</h2>
								
								<img class="alignleft size-full wp-image-71" src="http://23.253.229.120/wp-content/uploads/2015/03/content-category5.jpg" alt="content-category5" width="106" height="148" />

								<p>These programs are designed to powerfully shift your worldview, uplift your approach to life and provide you the tools to thrive.
								<br>
								<a class="learnMore" href="/programs/personal-and-spiritual-transformation">&gt; Learn More</a></p>
							</div>							
							
							<div class="course-box">
								<h2>Evolving Faith Traditions</h2>
								
								<img class="alignleft size-full wp-image-72" src="http://23.253.229.120/wp-content/uploads/2015/03/content-category6.jpg" alt="content-category6" width="106" height="148" />

								<p>In these programs we explore how the great wisdom traditions of the world are evolving to meet the demands of modern-day life.
								<br>
								<a class="learnMore" href="/programs/evolving-faith-traditions">&gt; Learn More</a></p>
							</div>

							<div class="clearfix"></div>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<!--<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>-->

								<?php the_content(); ?>
							<?php endwhile; else : ?>
								<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>
							<?php endif; ?>
						</div> <!-- end .shadowBoxClosedInner -->

						<div class="shadowBoxClosedBottom">
							<div class="shadowBoxClosedBottomDiv"></div>
						</div> <!-- end .shadowBoxClosedBottom -->
					</div> <!-- end .shadowBoxClosedContainer -->
				</main> <!-- end #main -->

				<?php get_sidebar(); ?>

<?php get_footer(); ?>
