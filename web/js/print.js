jQuery(document).ready(function($) {
  $('.landscape').rotate(90);

  // Set to top left of page
  $('.landscape').css('position', 'absolute');
  var offset = $('.landscape').offset();
  var newOffset = {
    'top': -1 * offset.top,
    'left': -1 * offset.left
  }
  $('.landscape').css('top', newOffset.top+'px');
  $('.landscape').css('left', newOffset.left+'px');
  $('.landscape').offset({top: '35', left: '35'});
});
