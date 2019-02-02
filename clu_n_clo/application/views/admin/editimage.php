<div id="content">
<h2>Clu&Clo &raquo; Edit</h2>
<div id="edit_image" class="edit_image">
	<form name="edit_image_form" id="edit_image_form" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/changeimage/do_edit/'.$editlist['id'].'/')?>">
    	<dl>
            <dd>Menu item name</dd>
            <dt><input type="text" name="name" class="txtField" value="<?php echo $editlist['name']; ?>"></dt>
     </dl>
         <dl>
            <dd>Picture</dd>
<?php if($editlist['picture']!=""){ ?> <dt><img src="<?php echo base_url()?>userdata/appetizer/<?php echo $editlist['picture']?>" height="100" width="200"></dt><?php }?>
            <dt> <input type="file" name="editimage" id="editmenu">          	
            	<input type="hidden" name="image_old" class="txtField" value="<?php echo $editlist['picture']; ?>" />
                </dt>      
        </dl>
        <dl>
        	<dd>Food Description</dd>
            <dt><textarea name="description" style="width: 500px; height: 20px;"><?php echo $editlist['description']; ?></textarea>
        </dl>
        <dl>
            <dt><input type="submit" class="defBtn" value="Submit" id="submit_btn"><input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('admin/changemenu/')?>';" /></dt>
        </dl>
    </form>
    <hr size="1" />
</div>

</div>
