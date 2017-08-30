  <?php if( have_rows('sections') ): ?>

    <?php while( have_rows('sections') ): the_row();

      // vars
      $image = get_sub_field('thumbnail');
      $content = get_sub_field('content');
      $title = get_sub_field('title');
      $lead = get_sub_field('lead');
      $cta_link = get_sub_field('cta-link');
      $cta_label = get_sub_field('cta-label');
    ?>

      <section class="newsection">
        <div class="newsection-wrapper">
          <h2 class="newsection-title"><span><?php echo $title; ?></span></h2>
          <?php if (!empty($lead)): ?>
            <p class="newsection-lead"><?php the_sub_field('lead') ?></p>
          <?php endif; ?>
          <?php if(!empty($image) ) : ?>
            <div class="newsection-thumbnail">
              <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          <?php endif; ?>
          <div class="newsection-content">
            <?php echo $content; ?>
          </div>

          <?php if (!empty($cta_label) && !empty($cta_link)) : ?>
            <p class="newsection-cta"><a href="<?php echo $cta_link ?>"><?php echo $cta_label ?></a></p>
          <?php endif; ?>
        </div>
      </section>

    <?php endwhile; ?>

  <?php endif; ?>