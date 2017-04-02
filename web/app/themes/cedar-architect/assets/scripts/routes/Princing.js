/* global google, Foundation, dataLayer */
const slug = (str) => {
  let $slug = '';
  const trimmed = $.trim(str);
  $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
  return $slug.toLowerCase();
};

export default {
  init() {
    // JavaScript to be fired on the contact page
  },
  finalize() {
    // JavaScript to be fired on the contact page, after the init JS
    $('.planlink').on('click', function pushLayer(e) {
      const titleSlug = slug($(this).data('title'));
      dataLayer.push({ 'event': `clic-product-${titleSlug}` });
    });
  },
};
