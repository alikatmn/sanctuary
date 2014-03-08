<?php
/**
* Template Name: cabins
*/
?>
<?php get_header(); ?>




    <div class="cabins_background_image">
        <img src="<?php the_field('cabins_background_image'); ?>" >
    </div>

    <div class="container">

        <div class="cabin-text">
            <h2><?php the_field('cabin_title'); ?></h2>
            <p><?php the_field('cabin_description'); ?></p>
            <p><?php the_field('art_features'); ?></p>
            <h3><?php the_field('price_no_meal'); ?></h3>
            <p><?php the_field('price_with_meal'); ?></p>
            <h4><?php the_field('check_availability'); ?></h4>
        </div>

            <div class="cabin_photo">
                <h2><?php the_field('cabin_photo'); ?></h2>
            </div>


            <div class="cabin_thumbs">
                <img src="<?php the_field('cabin_thumbs'); ?>" >
            </div>

                <div class="photo_gallery">
                    <?php 
 
                    $image_ids = get_field('cabin_photo', false, false);
 
                    $shortcode = '
 
                    [gallery ids="' . implode(',', $image_ids) . '"]';
 
                    echo do_shortcode( $shortcode );
 
                    ?>
                </div>
    </div>

<?php get_footer(); ?>
