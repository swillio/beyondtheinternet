$('#menu-btn').click(function() {
  $('.sidebar').removeClass('hidden').addClass('animated bounceInRight');
  $('.lightboxify').removeClass('hidden').addClass('animated fadeIn');
});

$('#btn-close').click(function() {
  $('.sidebar').addClass('hidden');
  $('.lightboxify').addClass('hidden');
});

$('.lightboxify').click(function() {
  $('.sidebar').addClass('hidden');
  $(this).addClass('hidden');
});
