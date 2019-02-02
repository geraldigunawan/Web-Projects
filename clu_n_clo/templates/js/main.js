function show_popup_gallery(pos){
	selector = $(".galListImg[data-pos='" + pos+"']");
	
	galTitle = selector.find('h3').html();
	galImg = selector.data('img');
	galDesc = selector.find('.data_desc').html();
	
	$('.overlay, .lightBoxCon').fadeIn();
	$("#popup_title").html(galTitle);
	$("#popup_desc").html(galDesc);
	$("#popup_img img").attr('src', galImg);
	$("#popup_img").hide();
	$(".lightBoxLoader").show();
	lBoxWidth = $('.lightBoxLoader').width();
	lBoxHeight = $('.lightBoxLoader').height();
	descWidth = $('.lightBoxDesc').width()+parseInt($('.lightBoxDesc').css('padding-left'))+parseInt($('.lightBoxDesc').css('padding-right'));
	totalWidth = lBoxWidth + descWidth;
	totalHeight = lBoxHeight;
	
	$(".lightBoxCon").animate({
		width: totalWidth,
		height: totalHeight,
		marginLeft: -(totalWidth/2) - 80,
		marginTop: -(totalHeight/2) - 35
	}, function(){
		$("#popup_img img").load(function(){
			$("#popup_img").show().css('opacity', 0);
			imgWidth = $('#popup_img img').width();
			imgHeight = $('#popup_img img').height();
			descWidth = $('.lightBoxDesc').width()+parseInt($('.lightBoxDesc').css('padding-left'))+parseInt($('.lightBoxDesc').css('padding-right'));
			$('#popup_img').hide();
			totalWidth = imgWidth + descWidth;
			totalHeight = imgHeight;
			$('.lightBoxImg').css({
				width: imgWidth,
				height: imgHeight
			});
			$(".lightBoxCon").animate({
				width: totalWidth,
				height: totalHeight,
				marginLeft: -(totalWidth/2) - 80,
				marginTop: -(totalHeight/2) - 35
			}, function(){
				$(".lightBoxLoader").hide();
				$("#popup_img").show().animate({
					opacity: 1
				});
			});
		});
	});
	
	total=$("#total_item").val();
	
	if(pos==1)
	$(".leftArrow").hide();
	else
	$(".leftArrow").show();
	
	if(pos==total)
	$(".rightArrow").hide();
	else
	$(".rightArrow").show();
	
	new_pos=pos;
	new_total=total;
	
	if(pos<10)new_pos='0'+pos;
	if(total<10)new_total='0'+total;
	
	counter=new_pos+' / '+new_total;
	$("#active_pos").val(pos);
	
	$(".countBar").html(counter);
}

$(document).ready(function(){
	/*newWidth = $('.lightBoxImg').find('img').width();
	newWidth1 = $('.lightBoxDesc').width()+40;
	a = (newWidth + newWidth1);
	$('.lightBoxCon').css('margin-left', - (a/2));*/
	
	$('.slider').bxSlider({
	  	mode: 'fade',
	  	captions: true
	});
	$('.locationCon', this).mouseenter(function(){
		$('.locationWrapper', this).animate({bottom : "0"}, {queue:false,duration:200});
	});
	$('.locationCon').mouseleave(function(){
		$('.locationWrapper', this).animate({bottom : "-30px"}, {queue:false,duration:200});
	});
	$('.galListImg', this).mouseenter(function(){
		$('.viewMore', this).fadeIn({queue:false,duration:200});
	});
	$('.galListImg').mouseleave(function(){
		$('.viewMore').fadeOut();
	});
	$('.galListImg').click(function(){
		//get all data based on image clicked
		pos=$(this).data('pos');
		show_popup_gallery(pos);
	});
	
	$(".leftArrow").click(function(){
		active_pos=parseInt($("#active_pos").val());	
		prev_pos=active_pos-1;
		show_popup_gallery(prev_pos);
	});
	
	$(".rightArrow").click(function(){
		active_pos=parseInt($("#active_pos").val());	
		next_pos=active_pos+1;
		show_popup_gallery(next_pos);
	});
	$('select.styled').customSelect();
	/*if($(".lightBoxCon").css('display')=='block'){
		$("body").keydown(function(e) {
			if(e.keyCode == 37) { // left
				$(".leftArrow").trigger('click');alert('left key');
			}
			else if(e.keyCode == 39) { // right
				$(".rightArrow").trigger('click');alert('right key');
			}
		});
	}*/
	
	/*$('.close').click(function(){
		$('.overlay, .lightBoxCon').fadeOut();
	});*/
	$(".productImage, .productName").boxer({
		fixed: true
	});
	$('.gallery_close').click(function(){		
		$('.overlay, .lightBoxCon').fadeOut(function(){
			$("#popup_title").html('');
			$("#popup_desc").html('');
			$("#popup_img img").attr('src','');
			$('.lightBoxImg').hide();
			$('.lightBoxLoader').show();
		});
	});
	$(".leftMenu li a").click(function(){
		id=$(this).attr('rel');
		if($(this).hasClass('selected')==false){
			$(".leftMenu li a").each(function(){
				$(this).removeClass('selected');
			});	
		}
		if(id!="a"){		
			$(".productContainer").hide();
			$(".cat"+id).show();
		}else{			
			$(".productContainer").show();
		}
		$(this).addClass('selected');
		return false;	
	});	
	$('#tab-1').click(function(){
		$('#tab-1').addClass('selected');
		$('#tab-2').removeClass('selected');
		$('#tab1').show();
		$('#tab2').hide();
	});
	$('#tab-2').click(function(){
		$('#tab-2').addClass('selected');
		$('#tab-1').removeClass('selected');
		$('#tab2').show();
		$('#tab1').hide();
	});
	$('.tabContainer #tab-1').click(function(){
		$('#tab_1').show();
		$('#tab_2, #tab_3, #tab_4, #tab_5').hide();
		$('.tabContainer #tab-1').addClass('selected');
		$('.tabContainer #tab-2, .tabContainer #tab-3, .tabContainer #tab-4, .tabContainer #tab-5').removeClass('selected');
	});
	$('.tabContainer #tab-2').click(function(){
		$('#tab_2').show();
		$('#tab_1, #tab_3, #tab_4, #tab_5').hide();
		$('.tabContainer #tab-2').addClass('selected');
		$('.tabContainer #tab-1, .tabContainer #tab-3, .tabContainer #tab-4, .tabContainer #tab-5').removeClass('selected');
	});
	$('.tabContainer #tab-3').click(function(){
		$('#tab_3').show();
		$('#tab_2, #tab_1, #tab_4, #tab_5').hide();
		$('.tabContainer #tab-3').addClass('selected');
		$('.tabContainer #tab-2, .tabContainer #tab-1, .tabContainer #tab-4, .tabContainer #tab-5').removeClass('selected');
	});
	$('.tabContainer #tab-4').click(function(){
		$('#tab_4').show();
		$('#tab_2, #tab_3, #tab_1, #tab_5').hide();
		$('.tabContainer #tab-4').addClass('selected');
		$('.tabContainer #tab-2, .tabContainer #tab-3, .tabContainer #tab-1, .tabContainer #tab-5').removeClass('selected');
	});
	$('.tabContainer #tab-5').click(function(){
		$('#tab_5').show();
		$('#tab_2, #tab_3, #tab_4, #tab_1').hide();
		$('.tabContainer #tab-5').addClass('selected');
		$('.tabContainer #tab-2, .tabContainer #tab-3, .tabContainer #tab-4, .tabContainer #tab-1').removeClass('selected');
	});
	if($('.productImage').length > 0){
		$('.productImage', this).zoom();
	}
});