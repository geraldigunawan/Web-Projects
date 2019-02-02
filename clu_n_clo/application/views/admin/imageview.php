<div id="content">
<h2> Clu&Clo &raquo; Image and Background modification</h2>

<div id="submenu">
    <ul>
        <li><a class="defBtn" href="<?php echo site_url('admin/changeimage/add')?>"><span>Add new image</span></a></li>
    </ul>
</div>

<table class="defAdminTable" width="100%">
	<thead>
    <th width="">No</th>
    <th width="">Images</th>
    <th width="">Menu</th>
    <th width="">Description</th>
    <th width="">Action</th>
    </thead>
<?php $no=1?>
    <?php foreach($image_list as $value){?>
		<tr>
		<td><?php echo $no++?></td>
        <td><img src="<?php echo base_url();?>userdata/appetizer/<?php echo $value['picture'];?>" /></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description']?></td>
        <td><a href="<?php echo site_url('admin/changeimage/edit').'/'.$value['id'];?>">Edit</a>| <a href="<?php echo site_url('admin/changeimage/delete').'/'.$value['id'];?>" onClick="return confirm('Confirm Delete?');">Delete</a></td>
		</tr>
<?php }?>
</table>
</div>

<script>
var product_list_url='<?php echo site_url('admin/changemenu/selectcategory');?>';
</script>