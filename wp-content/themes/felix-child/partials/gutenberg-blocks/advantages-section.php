<?php

/**
 * Advantages section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$advantages_section = 'advantages_section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $advantages_section = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'advantages_section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$advantages_title = get_field("advantages_title");
$advantages_button = get_field("advantages_button");

?>
<div id="<?php echo $advantages_section;?>" class="second-screen-adv">
    <div class="container s-content-wrapper">
    <div class="row">
        <div class="col-md-12">
        <h2 class="title-section">
            <?php echo $advantages_title;?>
        </h2>
        </div>
        <div class="advantages-cards row">
            <?php
            if( have_rows('advantages_card_repeater') ):
                while( have_rows('advantages_card_repeater') ) : the_row();
                    $adv_card_image = get_sub_field('adv_card_image');
                    $adv_card_title = get_sub_field('adv_card_title');
                    $adv_card_content = get_sub_field('adv_card_content');
                    ?>
                    <div class="col-md-4 col-sm-12">
                        <img class="adv-image" src="<?php echo $adv_card_image;?>" alt="">
                        <h3 class="adv-card-title"><?php echo $adv_card_title;?></h3>
                        <p class="adv-card-content"><?php echo $adv_card_content;?></p>
                    </div>
                   <?php endwhile;
            endif;?>

        </div>
        <div class="col-md-12">
            <div class="button-adv filled-button">
                <a href="<?php echo $advantages_button['url'];?>">
                    <?php echo $advantages_button['title'];?>
                </a>
            </div>
        </div>

    </div>
</div>
</div>
