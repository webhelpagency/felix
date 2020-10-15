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
$selling_expectations = 'selling_expectations-' . $block['id'];
if( !empty($block['anchor']) ) {
    $selling_expectations = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'selling_expectations';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$se_title = get_field("se_title");
$advantages_button = get_field("advantages_button");

?>
<div id="<?php echo $selling_expectations;?>" class="third-screen">
    <div class="container s-content-wrapper">
    <div class="row">
        <div class="col-md-12">
        <h2 class="title-section se-main-title">
            <?php echo $se_title;?>
        </h2>
        </div>
        <div class="selling-exp-cards row">
            <?php
            if( have_rows('se_repeater') ):
                while( have_rows('se_repeater') ) : the_row();
                    $se_image = get_sub_field('se_image');
                    $se_image_title = get_sub_field('se_image_title');
                    $se_image_text = get_sub_field('se_image_text');
                    $se_address = get_sub_field('se_address');
                    ?>
                    <div class="col-md-4 col-sm-12 se-card">
                        <div class="image-container">
                            <img  src="<?php echo $se_image;?>" alt="">
                            <div class="linear-gradient-overlay"></div>
                            <div class="image-content-container">
                                <h3 class="se-title"><?php echo $se_image_title;?></h3>
                                <p class="se-content"><?php echo $se_image_text;?></p>
                            </div>
                        </div>
                        <p class="se-address">
                            <?php echo $se_address;?>
                        </p>
                    </div>
                   <?php endwhile;
            endif;?>

        </div>
    </div>
</div>
</div>
