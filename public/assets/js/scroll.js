// smooth scroll for all # links

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
jQuery(document).ready(function($) {

			$('#myCarousel').carousel({
							interval: 5000
			});

			//Handles the carousel thumbnails
			$('[id^=carousel-selector-]').click(function () {
			var id_selector = $(this).attr("id");
			try {
					var id = /-(\d+)$/.exec(id_selector)[1];
					console.log(id_selector, id);
					jQuery('#myCarousel').carousel(parseInt(id));
			} catch (e) {
					console.log('Regex failed!', e);
			}
	});
			// When the carousel slides, auto update the text
			$('#myCarousel').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});
