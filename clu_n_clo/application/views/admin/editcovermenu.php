<div id="content">
<h2>Clu&Clo &raquo; Edit cover menu</h2>
<div id="edit_menu" class="edit_menu">
	<form name="edit_covermenu_form" id="edit_covermenu_form" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/changecovermenu/do_edit/'.$editlist['id'].'/')?>">

            <dd>Cover image</dd>
<?php if($editlist['picture']!=""){ ?> <dt><img src="<?php echo base_url()?>userdata/appetizer/<?php echo $editlist['picture']?>" height="100" width="200"></dt><?php }?>
            <dt> <input type="file" name="editcovermenu" id="editcovermenu">          	
            	<input type="hidden" name="image_old" class="txtField" value="<?php echo $editlist['picture']; ?>" />
                </dt>      
        </dl>
        <dl>
        	<dd>Resto description</dd>
            <dt><textarea name="description" style="width: 500px; height: 20px;"><?php echo $editlist['description']; ?></textarea>
        </dl>
        <dl>
            <dt><input type="submit" class="defBtn" value="Submit" id="submit_btn"><input type="button" class="defBtn" value="Back" onclick="window.location='<?php echo site_url('admin/changecovermenu/')?>';" /></dt>
        </dl>
    </form>
    <hr size="1" />
</div>

</div>
