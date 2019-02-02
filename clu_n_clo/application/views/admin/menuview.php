<div id="content">
<h2> Clu&Clo &raquo; Menu modification</h2>

<div id="submenu">
    <ul>
        <li><a class="defBtn" href="<?php echo site_url('admin/changemenu/add')?>"><span>Add new menu</span></a></li>
    </ul>
</div>

<select class="txtField validate[required]" name="category" id="category" onchange = "filter_category(this.value)">
        <option value="" label="-- Menu category --"></option>
       <?php foreach($menu_category as $value) {?>
        <option value="<?php echo $value['id']?>" label="<?php echo $value['name']?>"><?php echo $value['name']?></option>
       <?php }?>
</select>

<table class="defAdminTable" width="100%">
	<thead>
    <th width="">No</th>
    <th width="">Action</th>
    <th width="">Menu</th>
    <th width="">Category</th>
    <th width="">Images</th>
    <th width="">Description</th>
    </thead>
<?php $no=1?>
    <?php foreach($menu_list as $value){?>
		<tr>
		<td><?php echo $no++?></td>
        <td><a href="<?php echo site_url('admin/changemenu/edit').'/'.$value['id'];?>">Edit</a>| <a href="<?php echo site_url('admin/changemenu/delete').'/'.$value['id'];?>" onClick="return confirm('Confirm Delete?');">Delete</a></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['category_name'];?></td>
        <td><img src="<?php echo base_url();?>userdata/appetizer/<?php echo $value['picture'];?>" /></td>
        <td><?php echo $value['description'];?></td>
		</tr>
<?php }?>
</table>
</div>

<script>
var product_list_url='<?php echo site_url('admin/changemenu/selectcategory');?>';
</script>