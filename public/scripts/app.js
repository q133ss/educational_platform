/*jslint browser, es6 */
/*global window */

window.onload = function () {
  $('.header__toggle').on('click', function() {
    $('.categoriesList, .categoriesList .categoriesList__submenu, .menuBG').addClass('active');

  });


  $('.catalogToggle').on('click', function() {
    $('.categoriesList, .menuBG').addClass('active');
  });

  $('.categoriesList__toggle, .menuBG').on('click', function() {
    $('.categoriesList, .categoriesList .categoriesList__submenu, .menuBG').removeClass('active');
  });

  $('.catalogCarousel').owlCarousel({
      loop:false,
      margin:13,
      nav:true,
      dots: true,
      navText: ['<img src="img/icons/angleDownWhite.svg" alt="#">', '<img src="img/icons/angleDownWhite.svg" alt="#">'],
      responsive:{
          0:{
              items:2
          },
          575:{
              items:3
          },
          767:{
              items:4
          }
      }
  })





  $('.dropdownSimple--classes .dropdown-item').on('click', function(){
    $(this).addClass('active');
    $(this).siblings('.dropdown-item').removeClass('active');
    $(this).closest('.dropdown').find('.dropdown__toggle').addClass('fw800').text($(this).text());
  });
};
