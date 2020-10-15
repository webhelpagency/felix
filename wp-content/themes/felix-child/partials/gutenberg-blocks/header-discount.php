<?php

/**
 * Header discount Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$header_discount = 'header_discount-' . $block['id'];
if( !empty($block['anchor']) ) {
    $header_discount = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'header_discount';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$discount_title = get_field("header_title_discount");
$discount_text = get_field("header_text_discount");
$discount_button_filled = get_field("header_button_filled_discount");
$discount_button_transparent = get_field("header_button_transparent_discount");
$discount_header_link_discount = get_field("header_link_discount");
$discount_bg = get_field("background_image_discount");
$discount_yellow_stripe = get_field("header_yellow_stripe");
?>
<div id="<?php echo $header_discount;?>" class="first-screen-discount">
    <div class="background-discount " style="background-image: url('<?php echo $discount_bg;?>')">
    <div class="bg-overlay-discount"></div>
    <div class="container fs-content-wrapper">
    <div class="row">
        <div class="col-md-12">
        <h1 class="title-discount">
            <?php echo $discount_title;?>
        </h1>
        </div>
        <div class="col-md-12 discount-text">
                <?php echo $discount_text;?>
        </div>
        <div class="col-md-12 discount-buttons">
            <button class="discount-filled-button filled-button">
                <a href="<?php echo $discount_button_filled['url'];?>">
                    <?php echo $discount_button_filled['title'];?>
                </a>
            </button>
            <button class="discount-transparent-button transparent-button">
                <a href="<?php echo $discount_button_transparent['url'];?>">
                    <?php echo $discount_button_transparent['title'];?>
                </a>
            </button>
        </div>
        <div class="col-md-12 expert-link">
            <a href="<?php echo $discount_header_link_discount['url'];?>">
                <?php echo $discount_header_link_discount['title'];?>
            </a>
        </div>
    </div>
</div>

</div>
<div class="yellow-stripe-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <?php echo $discount_yellow_stripe;?>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
