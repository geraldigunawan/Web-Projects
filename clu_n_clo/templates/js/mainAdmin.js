
function change_news_list(category){
	if(category!="")			
		window.location=news_list+'/'+category;	
}

function change_sub_category_list(category){
	if(category!="")			
		window.location=sub_cat_list+'/'+category	
}

function filter_category(category){
	if(category!="")				
		window.location=product_list_url+'/'+category;	
}
function changegallery(category){
	if(category!="")			
		window.location=change_list_url+'/'+category;	
}

function change_attribute_list(attribute){
	if(attribute!="")			
		window.location=attribute_type_list+'/'+attribute;	
}

function get_sub_category(category){
	if(category!="")			
		$("#sub_category_list").html('').load(target_url+'/'+category);
}

function get_attr(category){
	if(category!="")			
		$("#attribute_list").html('').load(atr_list+'/'+category);
}


function change_store_list(region){
	if(region!="")			
		window.location=target_url+'/'+region;
}

