<?php if($this->session->userdata('admin_logged_in') == TRUE){?>
		

<div id="nav">
    <h2>Web Pages</h2>
    <ul>	
       <li><a href="<?php echo site_url('admin/changemenu')?>">Admin user</a>
        	<ul>            	
            	<li><a href="<?php echo site_url('admin/changecovermenu')?>">Cover menu modification</a></li>
                <li><a href="<?php echo site_url('admin/changemenu')?>">Menu modification</a></li>
                <li><a href="<?php echo site_url('admin/changeimage')?>">Image modification</a> </li>
            </ul>
        </li>    
         <li><a href="<?php echo site_url('admin/cluclo_admin')?>">Customer</a>
        	<ul>            	
                <li><a href="<?php echo site_url('admin/cluclo_admin')?>">Customer's messages</a></li>  
         </ul>
        </li>

     <li>   <a href="<?php echo site_url('admin/logout/do_logout')?>">Log Out</a></li>
    </ul>
</div>
<?php }?>
