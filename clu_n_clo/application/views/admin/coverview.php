<div id="content">
<h2 class="cluclo"> Clu&Clo &raquo; Cover Menu Modification</h2>

<div id="click">
<img src="<?php echo base_url();?>images/facebook.png" width="23px"/> number of facebook share: <?php echo $click['noofclick'];?>
</div>

<table class="defAdminTable" width="100%">
	<thead>
    <th width="">Cover image</th>
    <th width="">Resto decsription</th>
    <th width="">Action</th>
    </thead>

		<tr>
        <td><img src="<?php echo base_url();?>userdata/appetizer/<?php echo $cover['picture'];?>" /></td>
        <td><?php echo $cover['description'];?></td>
        <td><a href="<?php echo site_url('admin/changecovermenu/edit').'/'.$cover['id'];?>">Edit</a></td>   
		</tr>
</table>
</div>
