<?php
/**
 * Template Name: Page contact
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="section">
    <div class="row text-center">
      <div class="columns large-4 contact--address">
         <svg viewBox="0 0 100 100" class="pros--icon">
            <circle class="bg" opacity=".2" cx="50" cy="50" r="50"/>
            <circle class="bg" opacity=".6" cx="50" cy="50" r="44"/>
            <circle class="bg" cx="50" cy="50" r="40"/>
            <g fill="#FFF">
              <path d="M68.9 41.2h-8.7c-.4 0-.8.4-.8.8s.4.8.8.8h7.3l2.3 21.6H29.3L32 42.8h7.3c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-8.7L27.5 66h44l-2.6-24.8z"/>
              <path d="M41.8 31.8c.6-4.5 3.2-6.6 7.9-6.6s7.3 2.2 7.9 6.6c.2 1.6.1 3.2-.2 5-1.8 8.6-6.1 14.1-7.6 15.7-1.5-1.7-5.8-7.1-7.6-15.7-.5-1.7-.6-3.4-.4-5zm7 22.2c-.1.1-.2.1-.4.2s-.3.2-.5.4c-.4.3-.4.8-.2 1.1.2.2.4.3.6.3.2 0 .3-.1.5-.2.1-.1.3-.2.4-.3.3-.2.5-.3.8-.5.4-.2.5-.6.4-1 1.4-1.5 6.3-7.3 8.3-16.8.4-1.9.5-3.8.3-5.5-.7-5.3-4-8-9.4-8-5.5 0-8.8 2.8-9.4 8-.2 1.7-.1 3.6.3 5.5 2 9.4 6.8 15.2 8.3 16.8z"/>
              <path d="M49.7 28.6c2.4 0 4.3 1.9 4.3 4.3s-1.9 4.3-4.3 4.3-4.3-1.9-4.3-4.3 1.9-4.3 4.3-4.3zm0 10.1c3.2 0 5.9-2.6 5.9-5.9S52.9 27 49.7 27s-5.9 2.6-5.9 5.9 2.7 5.8 5.9 5.8zm2.9 13.8c-.4.1-.7.5-.6.9.1.4.4.6.8.6h.2c.5-.1 1-.2 1.5-.2.4-.1.8-.5.7-.9-.1-.4-.5-.8-.9-.7-.6.1-1.1.2-1.7.3zm4.2.3c0 .4.4.8.8.8l1.6-.1c.4 0 .8-.4.8-.8s-.4-.8-.8-.8l-1.7.1c-.4 0-.7.4-.7.8zm-11.4 3.7c-.4.3-.8.6-1.3.9-.4.2-.5.7-.2 1.1.2.2.4.4.7.4.1 0 .3 0 .4-.1.5-.3.9-.6 1.4-.9.4-.3.4-.8.2-1.1-.3-.5-.8-.5-1.2-.3zm17.9-5.2c-.3.2-.6.3-1.1.4-.4.1-.7.5-.6.9.1.4.4.6.8.6h.2c.7-.1 1.2-.4 1.7-.7l.1-.1c.4-.3.4-.8.2-1.1-.4-.3-.9-.4-1.3 0zm-28.7 6.2c.1-.4-.1-.9-.6-1-.4-.1-.9.1-1 .6-.1.4-.2.8-.2 1.1v.8c0 .4.4.7.8.7h.1c.4 0 .8-.4.7-.9v-.5c.1-.3.1-.5.2-.8zM63.3 45c-.6-.1-1.3 0-1.9.1-.4.1-.7.6-.6 1 .1.4.4.6.8.6h.2c.4-.1.8-.2 1.3-.1.4.1.8-.2.9-.7 0-.4-.3-.8-.7-.9zm1.6 4c-.1.4.1.9.5 1h.2c.3 0 .7-.2.8-.6.1-.3.1-.5.1-.8v-.2c0-.4-.1-.8-.2-1.1-.2-.4-.6-.6-1-.5-.4.2-.6.6-.5 1 .1.2.1.4.1.6v.6zm-23.4 9.9c-.5.2-.9.4-1.4.6-.4.2-.6.6-.5 1 .1.3.4.5.7.5.1 0 .2 0 .3-.1.5-.2 1-.4 1.5-.7.4-.2.6-.7.4-1.1-.1-.2-.6-.4-1-.2zm-5.8-3.3c.1 0 .3 0 .4-.1.2-.1.5-.2.7-.2h.3c.4.1.8-.2.9-.7.1-.4-.3-.8-.7-.9h-.7c-.5.1-.9.2-1.3.4s-.5.7-.3 1.1c.1.2.4.4.7.4zm-.2 6.3c.2 0 .3.1.5.1h1.4c.4-.1.7-.5.7-.9-.1-.4-.5-.7-.9-.7-.3 0-.6.1-1 0-.1 0-.2 0-.3-.1-.4-.1-.9.1-1 .6-.1.4.2.9.6 1z"/>
            </g>
          </svg>
      <?php if(get_field('address')): ?>
        <address><?php the_field('address'); ?></address>
      <?php endif; ?>
      </div>
      <div class="columns large-4 contact--phone">
        <svg viewBox="0 0 100 100" class="pros--icon">
          <circle class="bg" opacity=".2" cx="50" cy="50" r="50"/>
          <circle class="bg" opacity=".6" cx="50" cy="50" r="44"/>
          <circle class="bg" cx="50" cy="50" r="40"/>
          <g fill="#FFF">
            <path d="M59.1 71.4H38.9c-1.1 0-1.9-.9-1.9-1.9v-6.1h24v6.1c0 1-.9 1.9-1.9 1.9zM38.9 26.6h20.2c1.1 0 1.9.9 1.9 1.9v1.3H37v-1.3c0-1 .9-1.9 1.9-1.9zM37 31.4h24v30.4H37V31.4zM59.1 25H38.9c-1.9 0-3.5 1.6-3.5 3.5v41c0 1.9 1.6 3.5 3.5 3.5h20.2c1.9 0 3.5-1.6 3.5-3.5v-41c0-1.9-1.6-3.5-3.5-3.5z"/>
            <path d="M49 69c-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6s1.6.7 1.6 1.6c0 .9-.7 1.6-1.6 1.6zm0-4.8c-1.8 0-3.2 1.4-3.2 3.2 0 1.8 1.4 3.2 3.2 3.2s3.2-1.4 3.2-3.2c0-1.8-1.4-3.2-3.2-3.2zM45.8 29H49c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-3.2c-.4 0-.8.4-.8.8s.4.8.8.8zm5.6 0h.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8h-.8c-.4 0-.8.4-.8.8s.4.8.8.8zm18.9-.3c-.3-.3-.8-.3-1.1 0-.3.3-.3.8 0 1.1 3 3 3 7.9 0 10.8-.3.3-.3.8 0 1.1.2.2.4.2.6.2.2 0 .4-.1.6-.2 3.5-3.6 3.5-9.4-.1-13z"/>
            <path d="M66.9 30.5c-.3-.3-.8-.3-1.1 0-.3.3-.3.8 0 1.1 1 1 1.5 2.3 1.5 3.7 0 1.4-.5 2.7-1.5 3.7-.3.3-.3.8 0 1.1.2.2.4.2.6.2.2 0 .4-.1.6-.2 1.3-1.3 2-3 2-4.8-.1-1.8-.8-3.5-2.1-4.8zm-38.1-.7c.3-.3.3-.8 0-1.1-.3-.3-.8-.3-1.1 0-3.6 3.6-3.6 9.5 0 13.1.2.2.4.2.6.2.2 0 .4-.1.6-.2.3-.3.3-.8 0-1.1-3-3.1-3-7.9-.1-10.9z"/>
            <path d="M32.2 30.3c-.3-.3-.8-.3-1.1 0-1.3 1.3-2 3-2 4.8 0 1.8.7 3.5 2 4.8.2.2.4.2.6.2.2 0 .4-.1.6-.2.3-.3.3-.8 0-1.1-1-1-1.5-2.3-1.5-3.7 0-1.4.5-2.7 1.5-3.7.2-.3.2-.8-.1-1.1z"/>
          </g>
        </svg>
      <?php if(get_field('phone')): ?>
        <p class="telephone"><?php the_field('phone'); ?></p>
      <?php endif; ?>
      </div>
      <div class="columns large-4 contact--opening">
        <svg viewBox="0 0 100 100" class="pros--icon">
          <circle class="bg" opacity=".2" cx="50" cy="50" r="50"/>
          <circle class="bg" opacity=".6" cx="50" cy="50" r="44"/>
          <circle class="bg" cx="50" cy="50" r="40"/>
          <g fill="#FFF">
            <path d="M49 71.4c-12.4 0-22.4-10-22.4-22.4s10-22.4 22.4-22.4 22.4 10 22.4 22.4-10 22.4-22.4 22.4zM49 25c-13.2 0-24 10.8-24 24s10.8 24 24 24 24-10.8 24-24-10.8-24-24-24z"/>
            <path d="M49 50.5c-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6s1.6.7 1.6 1.6c0 .9-.7 1.6-1.6 1.6zm.8-4.7v-8.1c0-.4-.4-.8-.8-.8s-.8.4-.8.8v8.1c-1.1.3-2 1.2-2.3 2.3h-5.7c-.4 0-.8.4-.8.8s.4.8.8.8h5.7c.4 1.4 1.6 2.4 3.1 2.4 1.8 0 3.2-1.4 3.2-3.2 0-1.5-1-2.7-2.4-3.1zM49 32.9c.4 0 .8-.4.8-.8v-.8c0-.4-.4-.8-.8-.8s-.8.4-.8.8v.8c0 .4.4.8.8.8zm0 32c-.4 0-.8.4-.8.8v.8c0 .4.4.8.8.8s.8-.4.8-.8v-.8c0-.4-.4-.8-.8-.8zm17.6-16.8h-.8c-.4 0-.8.4-.8.8s.4.8.8.8h.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8zm-34.4 0h-.8c-.4 0-.8.4-.8.8s.4.8.8.8h.8c.4 0 .8-.4.8-.8s-.4-.8-.8-.8zm28.7-12.2l-.6.6c-.3.3-.3.8 0 1.1.2.2.4.2.6.2.2 0 .4-.1.6-.2l.5-.6c.3-.3.3-.8 0-1.1-.3-.3-.8-.3-1.1 0zM36.6 60.2l-.6.6c-.3.3-.3.8 0 1.1.2.2.4.2.6.2.2 0 .4-.1.6-.2l.6-.6c.3-.3.3-.8 0-1.1-.4-.3-.9-.3-1.2 0zm24.8 0c-.3-.3-.8-.3-1.1 0-.3.3-.3.8 0 1.1l.6.6c.2.2.4.2.6.2.2 0 .4-.1.6-.2.3-.3.3-.8 0-1.1l-.7-.6zM37.1 35.9c-.3-.3-.8-.3-1.1 0-.3.3-.3.8 0 1.1l.6.6c.2.2.4.2.6.2.2 0 .4-.1.6-.2.3-.3.3-.8 0-1.1l-.7-.6z"/>
          </g>
        </svg>
      <?php if(get_field('opening')): ?>
        <p class="opening"><?php the_field('opening'); ?></p>
      <?php endif; ?>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="page-wrapper">
      <h2 class="section--title scrollreveal"><span><?php _e('Contact us', 'cedar-architect'); ?></span></h2>
      <div class="scrollreveal">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <div id="map"></div>

<?php endwhile; ?>

<script type="text/javascript">
  /* eslint-disable */
  const contactForm = document.querySelector('.ninja-forms-form')
  console.log(contactForm);
  const gtmPush = () => {
    console.log('push form submit');
    //dataLayer.push({'event': 'contact_confirmation'});
  };

  if(contactForm.addEventListener){
    contactForm.addEventListener("submit", gtmPush, false);
  } else if(contactForm.attachEvent) {
    ele.attachEvent('onsubmit', gtmPush);
  }

</script>

<script type="text/javascript">
  /* global google */
  function initMap() {
    const styles = [
      {
        stylers: [
          { saturation: -50 },
        ],
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [
          { lightness: 0 },
        ],
      },
      {
        featureType: 'road',
        elementType: 'labels',
        stylers: [
          { visibility: 'on' },
        ],
      },
    ];

    const myLatLng = { lat: 47.2109176, lng: -1.6245157 };

    const map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: myLatLng,
      styles,
      scrollwheel: false,
    });

    const icon = '<?php echo get_template_directory_uri(); ?>/marker.png';

    const marker = new google.maps.Marker({
      position: myLatLng,
      map,
      title: 'Cedreo Interactive',
      icon,
      animation: google.maps.Animation.DROP,
    });
  }
</script>
