$(document).ready(function(){
	
	var els = {
		page: $('html, body'),
		navLink: $('.nav a'),
	}
	els.navLink.click(function(){
		var $this = $(this);
		if ($this.hasClass('food_nav')) {
			els.page.animate({scrollTop:$('#food').offset().top-213}, 500);
		}
		else if ($this.hasClass('home_nav')) {
			els.page.animate({scrollTop:$('#home').offset().top-213}, 500);
		}
		else if ($this.hasClass('beverage_nav')) {
			els.page.animate({scrollTop:$('#beverage').offset().top-213}, 500);
		}
	});
	$(".second").click(function(){
		$("#aboutus").animate({'left':0});
		$("#overlay").show();
	});
	$(".first").click(function(){
		$("#contactus").animate({'right':0});
		$("#overlay").show();
	});
	$(".close, #overlay").click(function(){
		$("#aboutus").animate({'left':-250});
		$("#overlay").hide();
		$("#contactus").animate({'right':-250});
	});
})