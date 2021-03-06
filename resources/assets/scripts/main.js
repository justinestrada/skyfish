// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

import { Header } from './layouts/header'
import { Hero } from './layouts/hero'
import { Flex } from './layouts/Flex'
import { FAQ } from './layouts/faq'
import { Solutions } from './modules/Solutions'
import { GF_Form_Group } from './modules/gf_form_group';

jQuery(document).ready(function() {
  Header.onLoad()
  Hero.onLoad()
  Flex.onLoad()
  Solutions.onLoad()
  FAQ.onLoad()
  GF_Form_Group.onLoad()
})
