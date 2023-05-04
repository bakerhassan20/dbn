$('.js-fixed-footer').footerReveal({ 
	shadow: false,
	zIndex : 1
});

(function(){

	var doc = document.documentElement;
	var w = window;
  
	var prevScroll = w.scrollY || doc.scrollTop;
	var curScroll;
	var direction = 0;
	var prevDirection = 0;
  
	var header_logo = document.getElementById('logo-box');
	var header_menu = document.getElementById('menu-box');
	var checkScroll = function() {
  
	  /*
	  ** Find the direction of scroll
	  ** 0 - initial, 1 - up, 2 - down
	  */
  
	  curScroll = w.scrollY || doc.scrollTop;
	  if (curScroll > prevScroll) { 
		//scrolled up
		direction = 2;
	  }
	  else if (curScroll < prevScroll) { 
		//scrolled down
		direction = 1;
	  }
  
	  if (direction !== prevDirection) {
		toggleHeader(direction, curScroll);
	  }
	  
	  prevScroll = curScroll;
	};
  
	var toggleHeader = function(direction, curScroll) {
	  if (direction === 2 && curScroll > 52) { 
		
		//replace 52 with the height of your header in px
  
		header_logo.classList.add('hide');
		header_menu.classList.add('hide');

		  
		header_logo.classList.remove('show');
		header_menu.classList.remove('show');
		prevDirection = direction;
	  }
	  else if (direction === 1) {
		header_logo.classList.add('show');
		header_menu.classList.add('show');

		  
		header_logo.classList.remove('hide');
		header_menu.classList.remove('hide');
		prevDirection = direction;
	  }
	};
	
	window.addEventListener('scroll', checkScroll);
  
  })();