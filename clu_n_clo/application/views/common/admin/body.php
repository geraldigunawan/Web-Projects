<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clu&Clo Admin Panel </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/globalcms.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/redactor.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/smoothness/jquery-ui-1.8.16.custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>templates/css/jquery.iviewer.css" />
 <link href="<?php echo base_url();?>templates/css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />

<script>var base_url='<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.infieldlabel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.highlight.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/redactor.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jqueryui.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.mousewheel.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/jquery.iviewer.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>templates/js/mainAdmin.js" ></script>


</head>

<body class="wide">

<div id="container">
	<?php $this->load->view('common/admin/header');?>
    <div id="contentContainer">
		
       <?php $this->load->view('common/admin/menu');?>
       
        <?php $this->load->view($page);?>
    </div>
    <?php $this->load->view('common/admin/footer');?>
</div>

</body>
</html>
