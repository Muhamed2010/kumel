///////////////--------------------------------------------->drop down
////custom function there

$(document).ready(function() {

 var $container = $('.curtain');

$container.imagesLoaded( function(){
  $container.masonry({
    itemSelector : '.package',
  isAnimated: true
  });
});



});


///////////////--------------------------------------------->drop down

function DropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.dropdown > li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}
DropDown.prototype = {
  initEvents : function() {
    var obj = this;

    obj.dd.on('click', function(event){
      $(this).toggleClass('active');

      return false;
    });

    obj.opts.on('click',function(){
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val); 
    });
  },
  getValue : function() {
    return this.val;
  },
  getIndex : function() {
    return this.index;
  }
}


var dd = new DropDown( $('#dd') );

$(document).click(function() {
          // all dropdowns
          $('.wrapper-dropdown-3').removeClass('active');
        });
