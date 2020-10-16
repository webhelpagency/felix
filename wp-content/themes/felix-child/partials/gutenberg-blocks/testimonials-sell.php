<?php

/**
 * Testimonials Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$testimonials = 'testimonials-' . $block['id'];
if( !empty($block['anchor']) ) {
    $testimonials = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonials';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$testimonials_title = get_field("testimonials_section_title");
$testimonials_number = get_field("number_of_testimonials_shown");
?>
<div id="<?php echo $testimonials;?>" class="sixth-screen">
    <div class="container s-content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-section se-main-title">
                    <?php echo $testimonials_title;?>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php $args = array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => $testimonials_number,
            );

            $testimonials_query = new WP_Query($args);

            if ( $testimonials_query->have_posts() ) {
                while ( $testimonials_query->have_posts() ) {
                    $testimonials_query->the_post(); ?>

                    <div class="col-md-4 col-sm-12">
                        <div class="testimonial-wrapper">
                            <img class="testimonial-image" src="<?php the_post_thumbnail_url();?>" alt="">
                            <div class="testimonial-stars"></div>
                            <div class="testimonial-content">
                                <?php the_content();?>
                            </div>
                            <div class="testimonial-author">
                                <?php echo get_field('t_author');?>
                            </div>
                            <div class="testimonial-days">
                                <?php echo get_field('t_days_on_market');?>
                            </div>
                            <div class="testimonial-saved">
                                <?php echo get_field('t_saved');?>
                            </div>
                            <pre>
                                <?php var_dump(get_queried_object());?>
                            </pre>
                        </div>
                    </div>

               <?php }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
