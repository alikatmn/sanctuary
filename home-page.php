<?php
/**
* Template Name: Home Page
*/
?>


<?php get_header(); ?>
	
		<div>
        <h1><?php the_field('hero_image'); ?></h1>
        <img src="<?php the_field('hero_image'); ?>" alt="background image"/>


    </div>

    <div>

        <?php the_field('headline'); ?>
    </div>

    <div>
        <?php the_field('subhead'); ?>
    </div>

<?php get_footer(); ?>