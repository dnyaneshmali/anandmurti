(function($) {
	$.fn.jQuerySimpleCounter = function( options ) {
	    var settings = $.extend({
	        start:  0,
	        end:    100,
	        easing: 'swing',
	        duration: 400,
	        complete: ''
	    }, options );

	    var thisElement = $(this);

	    $({count: settings.start}).animate({count: settings.end}, {
			duration: settings.duration,
			easing: settings.easing,
			step: function() {
				var mathCount = Math.ceil(this.count);
				thisElement.text(mathCount);
			},
			complete: settings.complete
		});
	};

}(jQuery));


$('#counter-gas').jQuerySimpleCounter({
start:  0,
end:    300,
easing: 'swing', // jQuery easing effects
duration: 400, // animation speed
complete: '' // callback function
});
$('#counter-aqua').jQuerySimpleCounter({
start:  0,
end:    450,
easing: 'swing', // jQuery easing effects
duration: 400, // animation speed
complete: '' // callback function
});
$('#counter-food').jQuerySimpleCounter({
start:  0,
end:    100,
easing: 'swing', // jQuery easing effects
duration: 400, // animation speed
 complete: function(){
      console.log('Hello!');
    } // callback function
});
