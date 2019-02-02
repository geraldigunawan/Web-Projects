$(document).ready(function(){
	
	var els = {
		page: $('html, body'),
		navLink: $('#navigation a'),
	}
	els.navLink.click(function(){
		var $this = $(this);
		if ($this.hasClass('aboutus_nav')) {
			els.page.animate({scrollTop:$('#aboutus').offset().top}, 500);
		}
		else if ($this.hasClass('menu_nav')) {
			els.page.animate({scrollTop:$('#menu').offset().top}, 500);
		}
		return false;
	});
		$(".first").click(function(){
		$("#contactus").animate({'right':0});
		$("#overlay").show();
	});
	$("#overlay, .close").click(function(){
		$("#overlay").hide();
		$("#contactus").animate({'right':-250});
		return false;
	});
})