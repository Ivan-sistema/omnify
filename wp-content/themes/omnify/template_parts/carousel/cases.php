
			<div class="owl-carousel owl-carousel-cases owl-theme">


				<?php 
					$wp_query = new WP_Query();
					query_posts( array( 'post_type' => 'post', 'showposts' => 4, 'paged'=>$paged, 'category_name'=>'cases'));
					if(have_posts()):
						while ($wp_query -> have_posts()) : $wp_query -> the_post();
						
				?>
					<div class="cases__carousel">
						<div class="item">
							<div class="item__data item__data--left">

								<div class="thumb">
									<?php if(has_post_thumbnail()): ?>
											<?php the_post_thumbnail('full', array('class' => ''));?>
									<?php endif; ?>
								</div>
							</div>


							<div class="item__data item__data--right">
								<div class="post__info">
									<p><i class="fas fa-arrow-circle-right"></i> <?php the_field('cases_categoria'); ?></p>
									<p><i class="far fa-clock"></i> <?php the_date(); ?></p>
								</div>

								<div class="post__title">
									<h2>
										<?php the_title(); ?>
									</h2>
								</div>

								<div class="post__description">
									<h2>
										<?php the_field('conteudo_do_post'); ?>
									</h2>
								</div>

							</div>
						</div>					
					</div>


					<?php   
					endwhile; 
						endif;
					?>

			</div>

