jQuery(document).ready(function(){
	function htmSlider(){
		/* Çàäàäèì ñëåäóþùèå ïåðåìåííûå */

		/* îáåðòêà ñëàéäåðà */
		var slideWrap = jQuery('.slide-wrap');
		/* ññûëêè íà ïðåäóäûùèé èñëåäóþùèé ñëàéä */
		var nextLink = jQuery('.next-slide');
		var prevLink = jQuery('.prev-slide');

		var playLink = jQuery('.auto');
		
		var is_animate = false;
		
		/* øèðèíà ñëàéäà ñ îòñòóïàìè */
		var slideWidth = jQuery('.slide-item').outerWidth();
		
		/* ñìåùåíèå ñëàéäåðà */
		var newLeftPos = slideWrap.position().left - slideWidth;
		
		/* Êëèê ïî ññûëêå íà ñëåäóþùèé ñëàéä */
		nextLink.click(function(){
			if(!slideWrap.is(':animated')) {
	
				slideWrap.animate({left: newLeftPos}, 500, function(){
					slideWrap
						.find('.slide-item:first')
						.appendTo(slideWrap)
						.parent()
						.css({'left': 0});
				});

			}
		});

		/* Êëèê ïî ññûëêå íà ïðåäûäóþùèé ñëàéä */
		prevLink.click(function(){
			if(!slideWrap.is(':animated')) {
			
				slideWrap
					.css({'left': newLeftPos})
					.find('.slide-item:last')
					.prependTo(slideWrap)
					.parent()
					.animate({left: 0}, 500);

			}
		});
		
		
		/* Ôóíêöèÿ àâòîìàòè÷åñêîé ïðîêðóòêè ñëàéäåðà */
		function autoplay(){
			if(!is_animate){
				is_animate = true;
				slideWrap.animate({left: newLeftPos}, 500, function(){
					slideWrap
						.find('.slide-item:first')
						.appendTo(slideWrap)
						.parent()
						.css({'left': 0});
					is_animate = false;
				});
			}
		}
		
		/* Êëèêè ïî ññûëêàì ñòàðò/ïàóçà */
		playLink.click(function(){
			if(playLink.hasClass('play')){
				playLink.removeClass('play').addClass('pause');
				jQuery('.navy').addClass('disable');
				timer = setInterval(autoplay, 5000);
			} else {
				playLink.removeClass('pause').addClass('play');
				jQuery('.navy').removeClass('disable');
				clearInterval(timer);
			}
		});

	}

	/* èíèöèëèçèðóåì ôóíêöèþ ñëàéäåðà */
	htmSlider();
});