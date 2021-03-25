

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>



  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
  </div>


  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



			 <div class="box-blog">
                  

					<!-- TITULO DO POST -->
					<div class="title-post">
						<h2>
							<a href="<?php the_permalink(); ?>" title="DMSP - Engenharia">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>

					<!-- IMAGEM DESTACADA -->
					<div class="thumb-post">
						<?php if(has_post_thumbnail()): ?>
							<a href="<?php the_permalink(); ?>" title="DMSP - Engenharia">
								<?php the_post_thumbnail('full', array('class' => 'post_miniatura'));?>
							</a>
						<?php endif; ?>
					</div>

<!-- DATA DO POST -->
<div class="date-category-post">
	<div class="col-date-category"><i class="far fa-clock"></i> <?php the_date(); ?></div>
	<div class="col-date-category"><i class="fas fa-tag"></i> <?php the_category(', '); ?></div>
	
</div>
<span></span>

			<!-- RESUMO DO POST -->
			<div class="resume-post">
				<p><?php the_field('resumo'); ?></p>
			</div>


			<!-- SOCIAL DO POST -->
			<div class="social-post">
				
			</div>

			<a href="<?php the_permalink(); ?>"><div class="btn-saiba-mais">
				Leia Mais
			</div></a>
  </div>

</div>


</section>
