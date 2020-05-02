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

$('#mobile-btn').click(function() {
  $('#mobile-menu').animate({width:'toggle'}, 350);
});

$('#close-btn').click(function(){
  $('#mobile-menu').animate({width:'toggle'}, 350);
});

$('#mobile-list').click(function(){
  $('.mobile-list').animate({height:'toggle'}, 350);
});
$('.btn-order').click(function(){
  $('.popup').animate({opacity:'show'}, 350);
});

$('#popup-close').click(function(){
  $('.popup').animate({opacity:'hide'}, 350);
});

