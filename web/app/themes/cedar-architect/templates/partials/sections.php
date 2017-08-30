  <?php if( have_rows('section') ): ?>

    <?php while( have_rows('section') ): the_row();

      // vars
      $media = get_sub_field('media');
      $videoid = get_sub_field('videoid');
      $image = get_sub_field('image');
      $content = get_sub_field('content');
      $title = get_sub_field('title');
      $fullClass = '';

      ?>

      <div class="section">
        <div class="section-wrapper">
          <h2 class="section-title <?php if (empty($videoid) && empty($image)) {echo 'full'; } ?>"><span><?php echo $title; ?></span></h2>
          <?php if (get_sub_field('lead')): ?>
            <p class="section-lead"><?php the_sub_field('lead') ?></p>
          <?php endif; ?>
          <?php if( $media == 'video' && !empty($videoid) ) : ?>
            <div class="section-video">
              <div class="responsive-embed ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $videoid; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          <?php elseif( $media == 'image' && !empty($image) ) : ?>
            <div class="section-thumbnail">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          <?php endif; ?>
          <div class="section-content <?php if (empty($videoid) && empty($image)) {echo 'full'; } ?>">
            <?php echo $content; ?>
          </div>
        </div>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>