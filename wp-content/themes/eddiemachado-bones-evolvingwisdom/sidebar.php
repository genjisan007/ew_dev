				<div id="sidebar" role="complementary">
					<?php 
						$page = get_permalink();
						$url = site_url();
						$site_url = get_template_directory_uri();

						if ($page == $url . '/about/') {
							echo '<img class="sidebarTopImg" src="' . $site_url . '/library/images/content-about-large.jpg">';
						} else if ($page == $url . '/careers/') {
							echo '<img class="sidebarTopImg" src="' . $site_url . '/library/images/content-careers-large.jpg">';
						}
					?>

					<?php
						$isProgramChild = false;

						if(is_page('integral and evolutionary spirituality')) {
							$programImgNumber = "1";
							$isProgramChild = true;
						} else if(is_page('womens spirituality and empowerment')) {
							$programImgNumber = "2";
							$isProgramChild = true;
						} else if(is_page('life purpose')) {
							$programImgNumber = "3";
							$isProgramChild = true;
						} else if(is_page('love and relationships')) {
							$programImgNumber = "4";
							$isProgramChild = true;
						} else if(is_page('personal and spiritual transformation')) {
							$programImgNumber = "5";
							$isProgramChild = true;
						} else if(is_page('evolving faith traditions')) {
							$programImgNumber = "6";
							$isProgramChild = true;
						}

						$programImg = '<img class="sidebarTopImg" src="' . $site_url . '/library/images/content-category-large-' . $programImgNumber . '.jpg">';

						if ($isProgramChild == true) {
							echo $programImg;
						}
					?>

					
					
					<div id="emailSignup">
						<img src="<?php bloginfo('template_url'); ?>/library/images/content-community.jpg">

						<h2>Join Our Global Learning Community...</h2>

						<div class="clearfix"></div>

						<p>...and receive our Evolving Wisdom e-Zine, special program offers and updates on upcoming events. Your information will never be shared or sold.</p>

						<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ) ?>
					</div> <!-- end #emailSignup -->

					<div id="featuredTeacher">
						<div class="shadowBoxClosedContainer">
							<div class="shadowBoxClosedTop">
								<div class="shadowBoxClosedTopDiv"></div>
							</div> <!-- end .shadowBoxClosedTop -->

							<div class="shadowBoxClosedInner">
								<script language="JavaScript">
								<!--

								/*
								 * Random Image Script
								*/
									function random_imglink(){
										var random_images_array = ["teacher-arielle-ford.jpg", "teacher-claire-zammit.jpg", "teacher-craig-hamilton.jpg", "teacher-jean-houston.jpg", "teacher-katherine-woodward-thomas.jpg", "teacher-neale-donald-walsch.jpg", "teacher-terry-patten.jpg"];
										var teacher_names = ["Arielle Ford", "Claire Zammit", "Craig Hamilton", "Dr. Jean Houston", "Katherine Woodward Thomas", "Neale Donald Walsch", "Terry Patten"];
										var teacher_desc = ["Arielle Ford is a nationally recognized publicist and marketing expert, producer, author and consultant. She has catapulted many authors and celebrities to stardom and enormously facilitated the rapid growth of the self-help and human potential movements in the U.S.", 
															"Claire Zammit is the co-creator of the Feminine Power courses and co-leads a thriving community of thousands of women throughout the world. Claire is a specialist in transformative education with a unique gift for designing and delivering dynamic, leading edge programs.", 
															"Craig Hamilton is a pioneer in the emerging field of evolutionary spirituality. In his inspired writings, talks, and teachings, he calls us to awaken beyond the confines of the separate ego and dedicate our lives to the further evolution of consciousness itself", 
															"Dr. Jean Houston, scholar, philosopher and researcher in human capacities, is one of the foremost visionary thinkers and doers of our time, and one of the principal founders of the Human Potential Movement.", 
															"Katherine Woodward Thomas is the national bestselling author of Calling in The One. She is a licensed psychotherapist and the co-creator and co-leader of the Feminine Power transformative courses for women.", 
															"Neale Donald Walsch is a modern day spiritual messenger whose words have touched the lives of countless people around the world. He has written more than 25 books on spirituality and its practical application in everyday life.", 
															"Terry Patten is the founder of Integral Spiritual Practice and is a vital, leading voice in the fields of integral evolutionary practice, leadership, and spirituality. He speaks and consults internationally, inspiring, challenging, and connecting leaders and institutions worldwide."];
										var teacher_link = ["arielle-ford", "claire-zammit", "craig-hamilton", "jean-houston", "katherine-woodward-thomas", "neale-donald-walsch", "terry-patten"];
										
										var ry=Math.floor(Math.random()*random_images_array.length)
										if (ry==0)
										ry=1
										document.write('<img src="<?php bloginfo('template_url'); ?>/library/images/'+random_images_array[ry]+'" class="featuredTeacherLeft">')
										document.write('<img class="featuredTeacherRight"  src="<?php bloginfo('template_url'); ?>/library/images/content-teacher.jpg" alt="Teacher">')
										document.write('<h2>Featured Teacher</h2>')
										document.write('<h3 id="teacher_name">'+teacher_names[ry]+'</h3>')
										document.write('<p>'+teacher_desc[ry]+'</p><br>')
										document.write('<a class="learnMore" href="<?php get_home_url(); ?>/faculty/'+teacher_link[ry]+'">> Learn More</a></p>')
									}
									random_imglink()							
								//-->
								</script>
								
							</div> <!-- end .shadowBoxClosedInner -->

							<div class="shadowBoxClosedBottom">
								<div class="shadowBoxClosedBottomDiv"></div>
							</div> <!-- end .shadowBoxClosedBottom -->
						</div> <!-- end .shadowBoxClosedContainer -->
					</div> <!-- end #featuredTeacher -->

					<div id="weAreHiring">
						<img src="<?php bloginfo('template_url'); ?>/library/images/content-person.jpg" alt="Careers">

						<h2>We are Hiring</h2>

						<p>If you have an interest in transformative education and like the idea of working with a team of energetic, smart, creative and passionate people, then click here to find out more about the career opportunities at Evolving Wisdom. <a class="learnMore" href="<?php get_home_url(); ?>/careers">
						<br>
						> Learn More</a></p>
					</div> <!-- end #weAreHiring -->

					<div class="sidebarFeatureBox">
						
					</div> <!-- end .sidebarFeatureBox -->
					

					<?php // if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php // dynamic_sidebar( 'sidebar1' ); ?>

					<?php // else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<!--<div class="no-widgets">
							<p><?php // _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>-->
					<?php // endif; ?>
				</div> <!-- end #sidebar -->
