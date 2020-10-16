<?php

/**
 * Sell steps Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$sell_steps = 'sell_steps-' . $block['id'];
if( !empty($block['anchor']) ) {
    $sell_steps = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sell_steps';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$st_title = get_field("st_title");
$step_shadow = get_field("step_shadow_block");

?>
<div id="<?php echo $sell_steps;?>" class="fourth-screen">
    <div class="container s-content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-section se-main-title">
                    <?php echo $st_title;?>
                </h2>
            </div>

                <?php
                if( have_rows('steps_repeater') ):
                    $step_n = 1;
                    while( have_rows('steps_repeater') ) : the_row();
                        $step_image = get_sub_field('step_image');
                        $step_number = get_sub_field('step_number');
                        $step_number = get_sub_field('step_number');
                        $step_title = get_sub_field('step_title');
                        $step_content = get_sub_field('step_content');

                        if($step_n % 2 === 0):  ?>
                            <div class="sell-steps row">
                            <div class="col-md-6 col-sm-12">
                                <div class="step-wrapper">
                                <div class="sell-step-content st-right">
                                    <p class="step-number">Step <?php echo  $step_number;?></p>
                                    <h3 class="step-title"><?php echo  $step_title;?></h3>
                                    <p class="step-content"><?php echo  $step_content;?></p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="image-container image-container-left">
                                    <img  src="<?php echo $step_image;?>" alt="">
                                    <div class="image-shadow-box shadow-box-left">
                                        <img src="<?php echo $step_shadow;?>" alt="">
                                    </div>
                                </div>
                            </div>
            </div>
                           <?php else: ?>
                            <div class="sell-steps row">
                            <div class="col-md-6 col-sm-12">
                                <div class="image-container image-container-right">
                                    <img  src="<?php echo $step_image;?>" alt="">
                                    <div class="image-shadow-box">
                                        <img src="<?php echo $step_shadow;?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="sell-step-content st-left">
                                    <p class="step-number">Step <?php echo  $step_number;?></p>
                                    <h3 class="step-title"><?php echo  $step_title;?></h3>
                                    <p class="step-content"><?php echo  $step_content;?></p>
                                </div>
                            </div>
        </div>
                           <?php endif;
                           $step_n += 1;
                        ?>


                    <?php endwhile;
                endif;?>


        </div>
    </div>
</div>
