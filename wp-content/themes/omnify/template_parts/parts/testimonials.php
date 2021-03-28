<section id="testimonial">
    <div class="testmonials-container">
        <div class="fix-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial.png">
        </div>
        <div class="carousel">
            <div class="carousel__header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/ic-testimonial.png">
                <h2>Testimonials</h2>
            </div>
            <div class="carousel__content">
                <?php get_template_part('template_parts/carousel/testimonial'); ?>
            </div>
        </div>
    </div>
</section>