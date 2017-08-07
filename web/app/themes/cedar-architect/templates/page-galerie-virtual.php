<?php
/**
 * Template Name: Galerie de visites virtuelles
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div class="page-wrapper">

    <div class="columns">

        <div class="text-center">
            <?php if(get_field('subtitle')):  ?>
                <h2 class="section--title"><span><?php the_field('subtitle'); ?></span></h2>
            <?php endif; ?>
            <?php get_template_part('partials/content-page'); ?>
        </div>

        <?php if( have_rows('gallery') ): ?>

            <div class="gallery--items" id="gallery">

                <div class="grid-sizer"></div>
                <?php
                    while( have_rows('gallery') ): the_row();
                    get_template_part('partials/excerpt-gallery-virtual');
                    endwhile;
                ?>
            </div>

        <?php endif; ?>

    </div>


</div>

<?php endwhile; ?>
