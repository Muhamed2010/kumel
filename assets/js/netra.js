///////////////--------------------------------------------->drop down
////custom function there
$(document).ready(function() {

 var $container = $('.result');

 $container.imagesLoaded( function(){
  $container.masonry({
    itemSelector : '.boox',
    isAnimated: true
  });
});
 var $containers = $('.deals');

 $containers.imagesLoaded( function(){
  $containers.masonry({
    itemSelector : '.boox',
    isAnimated: true
  });
});
 $("img.lazy").lazyload({
   effect : "fadeIn"
 });
 $.cookie('cookie_name', 'cookie_value', { expires: 8, path: '/', domain: 'tripify.me', secure: true });
});



