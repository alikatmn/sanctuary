<?php
/**
* Template Name: cabins
*/
?>
<?php get_header(); ?>

<h2>this is my cabin custom content</h2>

<?php if( have_posts('cabins') ): ?>

    <?php while( have_posts('cabins') ): the_post(); 
 
        // vars

        $cabintitle = get_sub_field('cabin_title');
        $cabindescription = get_sub_field('cabin_description');
        $cabinsbackgroundimage = get_sub_field('cabins_background_image');



 
        ?>

        <div class="cabins">
            <h1 class="cabintitle"><?php echo $cabintitle; ?></h1>
            <h2 class="cabindescription"><?php echo $cabindescription; ?></h2>
            <img class="cabins-background" src="<?php echo $cabinsbackgroundimage; ?>" >
        </div>

    <?php endwhile; ?>

<?php get_footer(); ?>
