<?php
/**
 * Template Name: Page Plan & Pricing
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper small-collapse">

    <div id="plans"></div>

  </div>

  <section class="section faq">
    <?php if( have_rows('faq') ): ?>

    <div class="row">

    <div class="columns large-8 large-centered">
      <h2 class="section--title"><span><?php _e('FAQs', 'cedar-architect'); ?></span></h2>

      <ul class="faq--items">

      <?php while( have_rows('faq') ): the_row();

        // vars
        $q = get_sub_field('question');
        $a = get_sub_field('answer');

        ?>

        <li class="faq--item">
          <h3 class="faq--question"><?php echo $q; ?></h3>
          <div class="faq--answer"><?php echo $a; ?></div>
        </li>

      <?php endwhile; ?>

      </ul>
    </div>

    </div>

  <?php endif; ?>
  </section>

  <script type="text/javascript">
    /* global google */
    window.cedarLabels = {
      "free": "<?php _e('Unlimited projects', 'cedar-architect'); ?>",
      "monthly": "<?php _e('monthly', 'cedar-architect'); ?>",
      "yearly": "<?php _e('yearly', 'cedar-architect'); ?>",
      "per-month": "<?php _e('/ month', 'cedar-architect'); ?>",
      "per-year": "<?php _e('/ year', 'cedar-architect'); ?>",
      "devise": "<?php _e('$', 'cedar-architect'); ?>",
      "gift": "<?php _e('2 months free', 'cedar-architect'); ?>",
      "optionnal": "<?php _e('optionnal', 'cedar-architect'); ?>",
      "unlimited": "<?php _e('Unlimited', 'cedar-architect'); ?>",
      "projects": "<?php _e('projects', 'cedar-architect'); ?>",
      "renderings": "<?php _e('renderings', 'cedar-architect'); ?>",
      "hd-renderings": "<?php _e('HD Renderings', 'cedar-architect'); ?>",
      "print-renderings": "<?php _e('Print Renderings', 'cedar-architect'); ?>",
      "virtual-renderings": "<?php _e('Virtual visits', 'cedar-architect'); ?>",
      "rechargeable": "<?php _e('Rechargeable', 'cedar-architect'); ?>",
      "credits": "<?php _e('Rechargeable Credits', 'cedar-architect'); ?>",
      "features": "<?php _e('Advanced Features', 'cedar-architect'); ?>",
      "libraries": "<?php _e('Unlimited libraries', 'cedar-architect'); ?>",
      "plans": "<?php _e('Advanced edition of plans', 'cedar-architect'); ?>",
      "virtualVisits": "<?php _e('Virtual visits', 'cedar-architect'); ?>",
      "support": "<?php _e('Support', 'cedar-architect'); ?>",
      "tutorials": "<?php _e('Tutorials', 'cedar-architect'); ?>",
      "forums": "<?php _e('Forums', 'cedar-architect'); ?>",
      "kbase": "<?php _e('Knowledge Base', 'cedar-architect'); ?>",
      "tickets": "<?php _e('Tickets', 'cedar-architect'); ?>",
      "chat": "<?php _e('Chat', 'cedar-architect'); ?>",
      "start": "<?php _e('Start', 'cedar-architect'); ?>",
    };
  </script>
<?php endwhile; ?>

