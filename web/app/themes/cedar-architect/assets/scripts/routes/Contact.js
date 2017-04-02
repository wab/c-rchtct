/* global google, Foundation, dataLayer */
export default {
  init() {
    // JavaScript to be fired on the contact page
  },
  finalize() {
    // JavaScript to be fired on the contact page, after the init JS
    $('.callbutton').on('click', () => {
      dataLayer.push({ 'event': 'contact_clic-tel' });
    });
  },
};
