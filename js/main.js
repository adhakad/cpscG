(function () {
	
	'use strict';

	

	
	var owlCarousel = function(){
		
		var owl = $('.owl-carousel-carousel');
		owl.owlCarousel({
			items: 3,
			loop: true,
			margin: 40,
			
	     	responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:3
	        }
	    	}
		});


		var owl2 = $('.owl-carousel-fullwidth');
		owl2.owlCarousel({
                        stagePadding:50,
			items: 5,
			loop: false,
                        dots:false,
			margin: 10,
                       responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:3
	        }
	    	}
		
			
			
		});


		

	};
        

		$(function(){
		owlCarousel();
		
		
	});
        
        
        
        
        
        
        
        
        
        
}());