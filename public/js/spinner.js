/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/spinner.js ***!
  \*********************************/
/**
 * Show spinner
 * NOTE: css is defined in resources/sass
 * This file is compiled via webmix
 */
$(document).ajaxStart(function () {
  this.querySelector('#loading').classList.add('loading');
  this.querySelector('#loading-content').classList.add('loading-content');
});
/**
 * Hide spinner
 */

$(document).ajaxStop(function () {
  this.querySelector('#loading').classList.remove('loading');
  this.querySelector('#loading-content').classList.remove('loading-content');
});
/******/ })()
;