<?php
/**
* Template Name: Home Page
*/
?>


<?php if( have_rows('homepage_sections') ): ?>
 
     <?php while( have_rows('homepage_sections') ): the_row(); 
 
        // vars
        $backgroundimage = get_background_image('image');
        $content = get_headline('text');
        $link = get_subhead('text');
 
        ?>
 
    <?php endwhile; ?>
 
    </ul>
 
<?php endif; ?>

<?php get_footer(); ?>