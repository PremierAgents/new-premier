$(".sign_up").hide();
$(".sign_in_li").addClass("active");

$(".sign_up_li").click(function() {
    $(this).addClass("active");
    $(".sign_in_li").removeClass("active");
    $(".sign_up").show();
    $(".sign_in").hide();
})

$(".sign_in_li").click(function() {
    $(this).addClass("active");
    $(".sign_up_li").removeClass("active");
    $(".sign_in").show();
    $(".sign_up").hide();
})


//new
$(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:6000,
nav:false,
dots:false,
responsive:
{
0:{items:1},
575:{items:2},
768:{items:3},
991:{items:4},
1199:{items:6}
}
});

if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}


});


//recent blogs
$(function(){
	$('.mhn-slide').owlCarousel({
		nav:true,
		//loop:true,
		slideBy:'page',
		rewind:false,
		responsive:{
			0:{items:1},
			480:{items:2},
			600:{items:3},
			1000:{items:4}
		},
		smartSpeed:70,
		onInitialized:function(e){
			$(e.target).find('img').each(function(){
				if(this.complete){
					$(this).closest('.mhn-inner').find('.loader-circle').hide();
					$(this).closest('.mhn-inner').find('.mhn-img').css('background-image','url('+$(e.target).attr('src')+')');
				}else{
					$(this).bind('load',function(e){
						$(e.target).closest('.mhn-inner').find('.loader-circle').hide();
						$(e.target).closest('.mhn-inner').find('.mhn-img').css('background-image','url('+$(e.target).attr('src')+')');
					});
				}
			});
		},
		navText:['<svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>','<svg viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></svg>']
	});
});
