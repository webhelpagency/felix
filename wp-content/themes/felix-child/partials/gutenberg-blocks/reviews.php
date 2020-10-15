<?php

/**
 * Selling expectations Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$reviews = 'reviews-' . $block['id'];
if( !empty($block['anchor']) ) {
    $reviews = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'reviews';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<div id="<?php echo $reviews;?>">
    <div class="container reviews-content-wrapper">
        <div class="row">
            <?php
            if( have_rows('reviews_repeater') ):
                while( have_rows('reviews_repeater') ) : the_row();
                    $review_image = get_sub_field('review_image');
                    $review_score = get_sub_field('review_score');
                    ?>
                    <div class="col-md-4 review-col">
                        <div class="text-center">
                            <img src="<?php echo $review_image;?>" alt="">
                            <p class="review-score"><?php echo $review_score;?></p>
                        </div>
                    </div>
                <?php endwhile;
            endif;?>
        </div>
    </div>
</div>
