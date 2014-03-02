<?php
/**
* Template Name: Home Page
*/
?>
<?php get_header(); ?>

<?php if( have_rows('repeater') ): ?>

    <?php while( have_rows('repeater') ): the_row(); 
 
        // vars
        $backgroundimage = get_sub_field('background_image');
        $headline = get_sub_field('headline');
        $subhead = get_sub_field('subhead');
 
        ?>

        <div class="homepage-section">
            <h1 class="headline"><?php echo $headline; ?></h1>
            <h2 class="subhead"><?php echo $subhead; ?></h2>
            <img class="homepage-background" src="<?php echo $backgroundimage; ?>" >
        </div>

    <?php endwhile; ?>
  
  
<?php endif; ?>

<?php get_footer(); ?>


