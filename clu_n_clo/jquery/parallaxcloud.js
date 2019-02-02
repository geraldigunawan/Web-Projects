var $window = $(window); 
var velocity = 0.6; 
function update(){ 
	var pos = $window.scrollTop(); 
	$('.content').each(function() { 
		var $element = $(this); 
		var height = ($element.height()-$(window).height())/2; 
		$(this).css('backgroundPosition', '0% ' + Math.round((height - pos) * velocity) + 'px'); 
	}); 
};
$window.bind('scroll', update);
