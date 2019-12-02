 $(function () {

var mySwiper = new Swiper ('.swiper1', {
	navigation: {
	nextEl: '.next1',
	prevEl: '.prev1',
	loop: true,
	},
	pagination: {
		el: '.page1',
		type: 'bullets',
		clickable: true
	}
});

var mySwiper2 = new Swiper('.swiper2', {
	navigation: {
		nextEl: '.next2',
		prevEl: '.prev2',
	loop: true,
      slidesPerView: 4,
      centeredSlides: true,
      spaceBetween: 30,
      grabCursor: true,
	},
      pagination: {
        el: '.page2',
        clickable: true,
	}

});
 
$(document).ready(function () {
  hsize = $(window).height();
  $(".pc_db").css("height", hsize + "px");
});
$(window).resize(function () {
  hsize = $(window).height();
  $(".pc_db").css("height", hsize + "px");
});
	 


 

  // 固定する場所が存在することの確認
  if( $('.sp_footer').length > 0 ){
    var baseSelector = '.fixing-base'
    var fixingSelector = baseSelector + ' .sp_footer'

    $(window).on('load scroll resize', function(){
      var baseTop = $(baseSelector).offset().top

      //固定開始位置より後にスクロールされた場合
      if( $(window).scrollTop() > baseTop ){
        $(fixingSelector).addClass('fixed')
        $(baseSelector).height($(fixingSelector).outerHeight())
        $(fixingSelector).width($(baseSelector).width())

      //固定開始位置以前にスクロールされた場合
      } else {
        $(fixingSelector).removeClass('fixed')
        $(baseSelector).height('')
        $(fixingSelector).width('')
      }
    })
  }

  var $body = $('.navbar-header'),
      $navTypeA = $('.navbar-header'),
      navTypeAOffsetTop = $navTypeA.offset().top;
   
  $(window).on('scroll', function () {
    if($(this).scrollTop() > navTypeAOffsetTop) {
      $body.addClass('pc-fixed');
    } else {
      $body.removeClass('pc-fixed');
    }
  });
	

}); 


$('#sample1-2').liquidCarousel({
	pos_x: 'center'
	,autoPlayInterval: 2000
	,autoPlayStartDelay: 0
	,autoPlay: true
	,autoPlayHoverStop: true
});
$('#sample1-2').each(function () {
	var $this = $(this)
		,self = $this.data('carousel')
		,$showCurrentNoArea = $this.find('#sample1-2-showCurrentNoArea')
		,$showItemLengthArea = $this.find('#sample1-2-showItemLengthArea')
		,ltemLength = self.$item.length
		;

	function _init () {
		$showItemLengthArea.text(ltemLength);
		_setIndex();
		_eventify();
	}
	function _setIndex () {
		$showCurrentNoArea.text(self.index + 1);
	}
	function _eventify () {
		$this.on('carousel:moveend', function(e){
			_setIndex();
		});
	}
	_init ();
});