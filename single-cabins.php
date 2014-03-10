<?php
/**
* Template Name: cabins
*/


?>
<?php get_header(); ?>




    <div class="cabins_background_image">
        <img src="<?php the_field('cabins_background_image'); ?>" >
    </div>

    <div class="cabincontainer">

                   <div class="cabingallery">

                <?php
 
/*
*  View array data (for debugging)

 
var_dump( get_field('cabin_photo') );
 
/*
*  Create the Markup for a slider
*  This example will create the Markup for Flexslider (http://www.woothemes.com/flexslider/)
*/
 
$images = get_field('cabin_thumbs');
 
if( $images ): ?>
    <div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
    <li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <p><?php echo $image['caption']; ?></p>
    </li>
<?php endforeach; ?>
        </ul>
    </div>
    <?php
 
    /*
    *  The following code creates the thumbnail navigation
    */
 
    ?>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; 
 
?>

</div>



     <div class="cabin-text">
            <h2><?php the_field('cabin_title'); ?></h2>
            <p><?php the_field('cabin_description'); ?></p>
            <h3><?php the_field('art_feature_headline'); ?></h3>

                <?php if( have_rows('art_features') ): ?>

                <?php while( have_rows('art_features') ): the_row(); 
 
                     // vars
                    $artrepeatertext = get_sub_field('art_repeater_text');
 
                ?>

                <div class="art-repeater-section">
                <h1 class="art_repeater_text"><?php echo $artrepeatertext; ?></h1>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>
                    <br></br>
                        <h3><?php the_field('standard_feature_headline'); ?></h3>


                        <?php if( have_rows('standard_features') ): ?>

                        <?php while( have_rows('standard_features') ): the_row(); 
         
                             // vars
                            $standardrepeatertext = get_sub_field('standard_repeater_text');
         
                        ?>

                        <div class="standard-repeater-section">
                        <h1 class="standard_repeater_text"><?php echo $standardrepeatertext; ?></h1>
                        </div>

                        <?php endwhile; ?>
                        <?php endif; ?>
                        <br></br>

            <h3><?php the_field('price_no_meal'); ?></h3>
            <h3><?php the_field('price_with_meal'); ?></h3>
            <br></br>
            <a href="#"><?php the_field('availability_button'); ?></a>
        </div>




            <!-- <div class="cabin_photo">
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
                </div>-->
    </div>


<?php get_footer(); ?>
