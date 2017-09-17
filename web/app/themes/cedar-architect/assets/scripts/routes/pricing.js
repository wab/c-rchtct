import React from 'react';
import { render } from 'react-dom';

import PricingTable from '../components/PricingTable';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    const pageID = $("input#post_id").val();
    render(<PricingTable pageID={pageID} />, document.querySelector("#plans"));
  }
};
