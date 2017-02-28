$(document).ready(function(){

$('.article').hover(function(){
	$(this).css('border', '1px solid cornflowerblue');
}, function(){
	$(this).css('border', '1px solid lightgrey');
});

$('.hover-opacity').hover(function(){
	$(this).find('.hover-opacity-image').css({opacity:'0.5'}, 100)
	$('.featured-title', this).css({color: 'cornflowerblue'}, 100);
}, function(){
	$(this).find('.hover-opacity-image').css({opacity:'1'}, 100)
	$('.featured-title', this).css({color: 'white'}, 100);
});


$(window).scroll(function() {
	$('.main-header').css({opacity: '0.98'});
	//$('header').css({position: 'fixed'});
});


// CHECK FOR THUMBNAIL


//$('.article-tumb').css({width: '49%'});


})