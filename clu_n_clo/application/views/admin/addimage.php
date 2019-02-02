<style>
	dd{
		font-weight:bold;	
	}
</style>
<div id="content">
<h2>Clu & Clo &raquo; Add new image</h2>
	<form name="add_image_form"  id="add_image_form" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/changeimage/do_add/')?>">
        <dl>
            <dd>Picture</dd>
            <dt> <input type="file" name="imageadd" id="imageadd">         
        </dl>
  	<dl>
            <dd>Menu item name</dd>
            <dt><input class="txtField validate[required]" type="text" name="name" id="name"/></dt>
        </dl>
          <dl>
            <dd>Food description</dd>
            <dt> <textarea name="description" style="width: 500px; height: 20px;"></textarea>        
        </dl>
        <dl>
            <dt><input type="submit" class="defBtn" value="Submit" id="submit_btn"><input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('admin/changeimage/')?>';" /></dt>
        </dl>
    </form>
    <hr size="1" />
</div>