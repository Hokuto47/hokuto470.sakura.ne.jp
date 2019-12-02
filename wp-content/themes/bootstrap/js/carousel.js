$(function(){
    var $setMainClass = $('.selsel');
    var listBaseWidth = 100;
    var slideTime = 1000;
    var delayTime = 5000;
 
    $setMainClass.each(function(){
        var selselWidth = $(this).width();
        var selselHeight = $(this).height();
        $(this).append('<div class="selsel_prev"></div><div class="selsel_next"></div>');
        $(this).children('ul').wrapAll('<div class="selsel_wrap"><div class="selsel_move"></div></div>');
 
        $(window).load(function(){
            $('.selsel_wrap').css({
                width: '100%',
                height: (selselHeight),
                position: 'relative',
                overflow: 'hidden'
            });
 
            $('ul.liquidlist').each(function(){
                $(this).clone().prependTo('.selsel_move');
                $(this).clone().appendTo('.selsel_move');
            });
 
            var listCount = $('.selsel_move').children('ul').children('li').length;
            var ulWrap = $('.selsel_wrap').width();
            var ulNum = Math.floor(ulWrap / listBaseWidth);
            var liFixed = Math.floor(ulWrap / ulNum);
            $('ul.liquidlist li').css({width: (liFixed)});
 
            var ulWidth = (liFixed)*((listCount)/3);
 
            $('ul.liquidlist').css({width:(ulWidth),float:'left'});
 
            $('.selsel_move').css({
                top: '0',
                left: -(ulWidth),
                width: ((ulWidth)*3),
                height: (selselHeight),
                position: 'absolute'
            });
 
            timerCarousel();
            listAdjust();
 
            function listAdjust(){
                clearInterval(setTimerCal);
 
                var cmPosLeft = parseInt($('.selsel_move').css('left'));
                var mvLiWidth = parseInt($('ul.liquidlist li').css('width'));
                var cmFrac = (cmPosLeft / mvLiWidth);
 
                var listCount = $('.selsel_move').children('ul').children('li').length;
 
 
                var ulWrap = $('.selsel_wrap').width();
                var ulNum = Math.floor(ulWrap / listBaseWidth);
                var liFixed = Math.floor(ulWrap / ulNum);
                $('ul.liquidlist li').css({width: (liFixed)});
 
                $('ul.liquidlist').css({width:((liFixed)*((listCount)/3))});
 
                var ulWidth = (liFixed)*((listCount)/3);
 
                $('ul.liquidlist').css({
                    width: (ulWidth)
                });
 
                var cmFixedLeft = (liFixed * cmFrac);
 
                $('.selsel_move').css({
                    left: (cmFixedLeft),
                    width: ((ulWidth)*3)
                });
 
                timerCarousel();
            }
 
            $('.selsel_prev').click(function(){
                clearInterval(setTimerCal);
                var moveLengh = parseInt($('ul.liquidlist li').css('width'));
                $('.selsel_move:not(:animated)').animate({left: '+=' + (moveLengh)},slideTime,function(){
                    selselPosition();
                    timerCarousel();
                    listAdjust();
                });
            });
 
            $('.selsel_next').click(function(){
                clearInterval(setTimerCal);
                var moveLengh = parseInt($('ul.liquidlist li').css('width'));
                $('.selsel_move:not(:animated)').animate({left: '-=' + (moveLengh)},slideTime,function(){
                    selselPosition();
                    timerCarousel();
                    listAdjust();
                });
            });
 
            function selselPosition(){
                var ulLeft = parseInt($('.selsel_move').css('left'));
                var stateUlWidth = parseInt($('ul.liquidlist').css('width'));
                var compWidth = (-(stateUlWidth)*2);
 
                if(ulLeft === compWidth) {
                    $('.selsel_move').css({left:-(stateUlWidth)});
                } else if(ulLeft === 0) {
                    $('.selsel_move').css({left:-(stateUlWidth)});
                };
            };
 
            $(window).resize(function(){
                $('.selsel_move:not(:animated)').each(function(){
                    listAdjust();
                });
            });
        });
 
        function timerCarousel(){
            setTimerCal = setInterval(function(){
                $('.selsel_next').click();
            },delayTime + slideTime);
        };
 
    });
}); 