<style>
	dd{
		font-weight:bold;	
	}
</style>
<div id="content">
<h2>Clu & Clo &raquo; Add new menu</h2>
	<form name="add_menu_form"  id="add_menu_form" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/changemenu/do_add/')?>">
    	<dl>
            <dd>Menu item name</dd>
            <dt><input class="txtField validate[required]" type="text" name="name" id="name"/></dt>
        </dl>
        <dl>
            <dd>Picture</dd>
            <dt> <input type="file" name="menuadd" id="menuadd">         
        </dl>
          <dl>
            <dd>Food category</dd>
            <dt> 
        <select class="txtField validate[required]" name="category" id="category" onchange = "">
        <option value="" label="-- Menu category --"></option>
       <?php foreach($menu_category as $value) {?>
        <option value="<?php echo $value['id']?>" label="<?php echo $value['name']?>"><?php echo $value['name']?></option>
       <?php }?>
		</select>       
        </dl>
          <dl>
            <dd>Food description</dd>
            <dt> <textarea name="description" style="width: 500px; height: 20px;"></textarea>        
        </dl>
        <dl>
            <dt><input type="submit" class="defBtn" value="Submit" id="submit_btn"><input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('admin/changemenu/')?>';" /></dt>
        </dl>
    </form>
    <hr size="1" />
</div>