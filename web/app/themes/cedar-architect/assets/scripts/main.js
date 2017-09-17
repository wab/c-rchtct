// import external dependencies
import 'jquery';

// Import npm dependencies
import 'svgxuse';
import "foundation-sites/dist/js/foundation";

// import local dependencies
import Router from './util/router';
import common from './routes/Common';
import home from './routes/Home';
import aboutUs from './routes/About';
import contact from './routes/Contact';
import price from './routes/Princing';
import pageTemplatePagePlans from './routes/pricing';

const contactUs = contact;
const tarifs = price;

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
  // All pages
  common,
  // Home page
  home,
  // About us page, note the change from about-us to aboutUs.
  aboutUs,
  contact,
  contactUs,
  tarifs,
  price,
  pageTemplatePagePlans
};

// Load Events
document.addEventListener('DOMContentLoaded', () => new Router(routes).loadEvents());
