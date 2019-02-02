<div id="content">
<h2> Clu&Clo &raquo; Customer's messages</h2>

<table class="defAdminTable" width="100%">
	<thead>
    <th width="">No</th>
    <th width="">Action</th>
    <th width="">Name</th>
    <th width="">Email</th>
    <th width="">Phone</th>
    <th width="">Messages</th>
    </thead>
<?php $no=1?>
    <?php foreach($message as $value){?>
		<tr>
		<td><?php echo $no++?></td>
        <td><a href="<?php echo site_url('admin/cluclo_admin/delete').'/'.$value['id'];?>" onClick="return confirm('Confirm Delete?');">Delete</a></td>
        <td><?php echo $value['name'];?></td>
        <td> <a href="<?php echo prep_url($value['email']);?>"><?php echo $value['email'];?></a></td>
        <td><?php echo $value['phone'];?></td>
        <td><?php echo $value['message'];?></td>
		</tr>
<?php }?>
</table>
</div>