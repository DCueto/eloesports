$(document).ready(function(){


// Animación hover sobre articulos

$('.article').hover(function(){
	$(this).css({'border': '1px solid cornflowerblue'});
	$('.article-content-title', this).css({color: '#144794'});
	$('.article-author p', this).css({color: '#144794'});
}, function(){
	$(this).css({'border': '1px solid lightgrey'});
	$('.article-content-title', this).css({color: 'black'});
	$('.article-author p', this).css({color: '#4d4d4d'});
});

// Animación hover sobre articulos en single.php sidebar
$('.last_posts-post').hover(function(){
	$(this).css({'border': '2px solid cornflowerblue'});
}, function(){
	$(this).css({'border': '0px solid lightgrey', 'border-bottom': '1px solid lightgrey'});
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
/*
if ($('.article figure').hasClass('article-thumb')){
	$('.article').has('.article-thumb').css({width: '48%'});
}*/

//$('.article-tumb').css({width: '49%'});



// MEDIA QUERIES

// No event resize

	// Media query - Smartphone screen

if ($('body').width() < 730 ){
	if ($('.article figure').hasClass('article-thumb')){
		$('.article').has('.article-thumb').css({width: '100%', 'min-height': '300px'});
	}
}
	// Media query - Tablet screen
if ($('body').width() >= 730 ){
	if ($('.article figure').hasClass('article-thumb')){
		$('.article').has('.article-thumb').css({width: '48%', height: '440px', 'min-height': '130px'});
	}
}

/*
if ($('body').width() >= 1150) {
	$('.article').css({width: '355px'});

}*/


// With resize event

$(window).resize(function(){

	// Media query - Smartphone screen

	if ($('body').width() < 730 ){
		if ($('.article figure').hasClass('article-thumb')){
			$('.article').has('.article-thumb').css({width: '100%', 'min-height': '300px'});
		}
	}

	// Media query - Tablet screen

	if ($('body').width() >= 730 ){
		if ($('.article figure').hasClass('article-thumb')){
			$('.article').has('.article-thumb').css({width: '48%', height: '440px', 'min-height': '130px'});
		}
    }
    /*
    if ($('body').width() >= 1150) {
    	$('.article').css({width: '355px'});

    }*/

    

});

})