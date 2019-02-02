<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pre'))
{
	function pre($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}	
}

if ( ! function_exists('make_alias'))
{
	function make_alias($string)
	{
		$string=strtolower($string);
		
		$string=str_replace('&','-',$string);
		
		$string=preg_replace('/[^a-z0-9]/', "-", $string);
		
		$string=ltrim(rtrim($string,'-'),'-');
		
		$string=str_replace('---','-',$string);
		$string=str_replace('--','-',$string);
		
		return $string;
	}	
}
if ( ! function_exists('esc')) //alias: mysql_real_escape_string()
{
	function esc($string)
	{
		$result=mysql_real_escape_string($string);
		return $result;
	}	
}

if ( ! function_exists('find'))
{
	function find($coloumn,$id,$table)
	{
	//	echo "select `".$coloumn."` from `".$table."` where id='".$id."'";
		$q="select `".$coloumn."` from `".$table."` where id='".$id."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		return $result[$coloumn];
	}	
}

if ( ! function_exists('get_prev_precedence'))
{
	function get_prev_precedence($id,$table)
	{
		$precedence=find('precedence',$id,$table);
		$q="select id, precedence from `".esc($table)."` where precedence < ".$precedence." order by precedence desc limit 1";
		$result=mysql_fetch_assoc(mysql_query($q));
		return $result['precedence'];
	}	
}

if ( ! function_exists('get_next_precedence'))
{
	function get_next_precedence($id,$table)
	{
		$precedence=find('precedence',$id,$table);
		$q="select id, precedence from `".esc($table)."` where precedence > ".$precedence." order by precedence asc limit 1";
		$result=mysql_fetch_assoc(mysql_query($q));
		return $result['precedence'];
	}	
}

if ( ! function_exists('aliaspertama'))
{
	function aliaspertama($table,$data_1,$data_2)
	{
		$result=mysql_fetch_assoc(mysql_query('select id from '.$table.' where '.$data_1.' = '.$data_2.' order by precedence DESC LIMIT 1'));
		return $result['id'];
	}	
}


if ( ! function_exists('first_precedence'))
{
	function first_precedence($table)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' order by precedence asc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('last_precedence'))
{
	function last_precedence($table)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' order by precedence desc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('last_precedence_2'))
{
	function last_precedence_2($table,$data_1,$data_2)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' order by precedence desc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('first_precedence_2'))
{
	function first_precedence_2($table,$data_1,$data_2)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' order by precedence asc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('last_precedence_3'))
{
	function last_precedence_3($table,$data_1,$data_2,$data_3,$data_4)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' and '.$data_3.' = '.$data_4.' order by precedence desc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('first_precedence_3'))
{
	function first_precedence_3($table,$data_1,$data_2,$data_3,$data_4)
	{
		$result=mysql_fetch_assoc(mysql_query('select precedence from '.$table.' where '.$data_1.' = '.$data_2.' and '.$data_3.' = '.$data_4.'  order by precedence asc'));
		return $result['precedence'];
	}	
}

if ( ! function_exists('check_module_action_privilege')){
	function check_module_action_privilege($privilege,$module,$action)
	{
		/*if($privilege!=1){
			$q="select * from privilege_module_tb where privilege_id='".$privilege."' and module_id='".$module."' and `action`='".$action."'";
			$result=mysql_fetch_assoc(mysql_query($q));
			
			if($result)return 1;
			else return 0;
		}
		else return 1;*/
		return 1;
	}	
}

if ( ! function_exists('check_footer_usage')){
	function check_footer_usage($id)
	{
		//category
		$q="select * from category_tb where bottom_footer_set_id='".esc($id)."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		if($result)return 1;
		else return 0;
		
	}	
}



if ( ! function_exists('check_footer_independent_page_usage')){
	function check_footer_independent_page_usage($id)
	{
		//category
		$q="select * from independent_page_tb where bottom_footer_set_id='".esc($id)."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		if($result)return 1;
		else return 0;
		
	}	
}

if ( ! function_exists('check_footer_page_banner_usage')){
	function check_footer_page_banner_usage($id)
	{
		//category
		$q="select * from page_banner_tb where bottom_footer_set_id='".esc($id)."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		if($result)return 1;
		else return 0;
		
	}	
}

if ( ! function_exists('attribute'))
{
	function attribute($subcategory,$atr)
	{
		$result=mysql_fetch_assoc(mysql_query("select count(*) as total from product_view where sub_category_id='".esc($subcategory)."' AND attribute_id='".esc($atr)."' AND status=1 "));
		return $result['total'];
	}	
}

if ( ! function_exists('gallery_list'))
{
	function gallery_list($id)
	{
		$result=mysql_fetch_assoc(mysql_query("select count(*) as total from galleryview where gallery_id='".esc($id)."' AND status=1"));
		return $result['total'];
	}	
}


if ( ! function_exists('check_category_product'))
{
	function check_category_product($category_id,$product_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select count(*) as total from product_category_tb where category_id='".esc($category_id)."' and product_id='".esc($product_id)."'"));
		return $result['total'];
	}	
}

if ( ! function_exists('check_attribute_product'))
{
	function check_attribute_product($attribute_id,$product_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select count(*) as total from product_attribute_tb where attribute_id='".esc($attribute_id)."' and product_id='".esc($product_id)."'"));
		return $result['total'];
	}	
}
if ( ! function_exists('check_category_usage'))
{
	function check_category_usage($category_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select * from fleet_tb where category_id='".esc($category_id)."'"));
		
		if($result)return 1;
		else return 0;
	}	
}
if ( ! function_exists('check_category_usage2'))
{
	function check_category_usage2($category_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select * from sub_category_tb where category_id='".esc($category_id)."' and status=1"));
		
		if($result)return 1;
		else return 0;
	}	
}

if ( ! function_exists('check_alias'))
{
	function check_alias($table,$alias)
	{
		//category
		$q="select * from `".esc($table)."` where `alias`='".strtolower(esc($alias))."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		if($result)return 1;
		else return 0;
	}	
}

if ( ! function_exists('check_alias_edit'))
{
	function check_alias_edit($table,$alias,$id)
	{
		//category
		$q="select * from `".esc($table)."` where `alias`='".strtolower(esc($alias))."' and id!='".esc($id)."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		if($result)return 1;
		else return 0;
	}	
}
if ( ! function_exists('get_alias_id'))
{
	function get_alias_id($table,$alias)
	{
		$q="select id from `".esc($table)."` where `alias`='".strtolower(esc($alias))."'";
		$result=mysql_fetch_assoc(mysql_query($q));
		
		return $result['id'];
	}	
}

if ( ! function_exists('check_attribute_type_usage'))
{
	function check_attribute_type_usage($attribute_type_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select * from attribute_tb where attribute_type_id='".esc($attribute_type_id)."'"));
		
		if($result)return 1;
		else return 0;
	}	
}



if ( ! function_exists('check_store_region_usage'))
{
	function check_store_region_usage($store_region_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select * from store_tb where store_region_id='".esc($store_region_id)."'"));
		
		if($result)return 1;
		else return 0;
	}	
}


if ( ! function_exists('check_independent_page_usage'))
{
	function check_independent_page_usage($independent_page_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select * from independent_page_content_tb where independent_page_id='".esc($independent_page_id)."'"));
		
		if($result)return 1;
		else return 0;
	}	
}
if ( ! function_exists('check_news_usage'))
{
	function check_news_usage($news_events_id)
	{
		$result=mysql_fetch_assoc(mysql_query("select * from news_events_content_tb where news_events_id='".esc($news_events_id)."'"));
		
		if($result)return 1;
		else return 0;
	}	
}


if ( ! function_exists('get_primary_pict'))
{
	function get_primary_pict($product_id)
	{
		$q="select * from product_picture_tb where product_id='".esc($product_id)."' and `primary`=1";
		$result=mysql_fetch_assoc(mysql_query($q));

		if($result)return $result;
		else return 0;
	}	
}



if ( ! function_exists('getSizeImage'))
{	function getSizeImage ($image)
    {
        $imgData = getimagesize($image);
        $retval['width'] = $imgData[0];
        $retval['height'] = $imgData[1];
        $retval['mime'] = $imgData['mime'];
        return $retval;
    }
}

if ( ! function_exists('check_subscription'))
{	function check_subscription ($email)
    {
		$q="select * from subscription_tb where `email`='".esc($email)."'";
		$result=mysql_fetch_assoc(mysql_query($q));

		if($result)return 1;
		else return 0;
    }
}

if ( ! function_exists('get_fleet_picture'))
{	function get_fleet_picture ($fleet_id)
    {
		$q="select * from fleet_picture_tb where `fleet_id`='".esc($fleet_id)."' order by precedence ASC limit 1";
		$result=mysql_fetch_assoc(mysql_query($q));

		if($result)return $result;
		else return 0;
    }
}


