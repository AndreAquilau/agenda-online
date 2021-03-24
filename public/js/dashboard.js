/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
document.querySelector('#open').addEventListener('click', function (e) {
  var popup = document.querySelector('#popup');
  var pop = document.querySelector('#pop');
  console.log('vesible element');
  popup.style.display = 'block';
  pop.style.display = 'block';
});
document.querySelector('#close').addEventListener('click', function (e) {
  var popup = document.querySelector('#popup');
  var pop = document.querySelector('#pop');
  console.log('desible element');
  popup.style.display = 'none';
  pop.style.display = 'none';
});
/******/ })()
;