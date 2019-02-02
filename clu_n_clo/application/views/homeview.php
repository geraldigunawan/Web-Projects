<!DOCTYPE html>
<head>

<title>Clu & Clo</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style1.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/nav.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" />
<script src="<?php echo base_url()?>jquery/jquery-1.9.1.js"></script>
<script src="<?php echo base_url()?>jquery/modernizr.custom.js"></script>
<script src="<?php echo base_url()?>jquery/scroll.js"></script>
<script src="<?php echo base_url()?>jquery/parallaxcloud.js"></script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
	<div class="header">
        <img src="images/header01.png">
        <br>
        <ul id="navigation">
            <li><a href="#menu" class="menu_nav"><span>Menu</span></a></li>
            <li><a href="#aboutus" class="aboutus_nav"><span>About us</span></a></li>
            <li><a href="#contactus" class="first"><span>Contact us</span></a></li>
        </ul>

		<script type="text/javascript" src="jquery/nav.js"></script>
        <script type="text/javascript">
            $(function() {
                var d=100;
                $('#navigation a').each(function(){
                    $(this).stop().animate({
                        'marginTop':'-75px'
                    },d+=100);
                });

                $('#navigation > li').hover(
                function () {
                    $('a',$(this)).stop().animate({
                        'marginTop': '-50px'
                    },200);
                },
                function () {
                    $('a',$(this)).stop().animate({
                        'marginTop':'-75px'
                    },200);
                }
            );
            });
        </script>

	</div>


	<div class="content" id="menu"><br><br><br>
    <a href="admin/login.php" class="first"><span>Admin</span></a>
		<div id="rm-container" class="rm-container">
            <div class="rm-wrapper">
                <div class="rm-cover">

                    <div class="rm-front">
                        <div class="rm-content">

                            <div><img class="rm-logo" src="<?php echo base_url() ."userdata/appetizer/". $cover['picture'];?>"/></div>
                            <h1>Welcome</h1><h2>Clu & Clo</h2>
                            <h3><?php echo $cover['description']?></h3>
                            <a href="#" class="rm-button-open">View the Menu</a>
                        </div><!-- /rm-content -->
                    </div><!-- /rm-front -->

                    <div class="rm-back">
                        <div class="rm-content">
                            <h4>Appetizers</h4>
                            <dl>
                            <?php foreach($appetizer as $value){?>
                                <dt><a href="#" class="rm-viewdetails" data-thumb="<?php echo base_url()."userdata/appetizer/".$value['picture'];?>"><?php echo $value['name'];?></a></dt>
                                <dd><?php echo $value['description'];?></dd>
                                <img src=""/>
                                 <?php }?>
                            </dl>

                            <h4>Salads &amp; More</h4>
                            <dl>

                            <?php foreach($salad as $value){?>
                                <dt><a href="#" class="rm-viewdetails" data-thumb="<?php echo base_url()."userdata/appetizer/".$value['picture'];?>"><?php echo $value['name'];?></a></dt>
                                <dd><?php echo $value['description'];?></dd>
                                 <?php }?>
                            </dl>

                        </div><!-- /rm-content -->
                        <div class="rm-overlay"></div>
                    </div>
                </div><!-- /rm-cover -->

                <div class="rm-middle">
                    <div class="rm-inner">
                        <div class="rm-content">

                            <h4>Main Courses</h4>
                            <dl>
                                  <?php foreach($maincourse as $value){?>
                                <dt><a href="#" class="rm-viewdetails" data-thumb="<?php echo base_url()."userdata/appetizer/".$value['picture'];?>"><?php echo $value['name'];?></a></dt>
                                <dd><?php echo $value['description'];?></dd>
                                 <?php }?>
                            </dl>
                        </div><!-- /rm-content -->
                        <div class="rm-overlay"></div>
                    </div><!-- /rm-inner -->
                </div><!-- /rm-middle -->

                <div class="rm-right">

                    <div class="rm-front">

                    </div>

                    <div class="rm-back">
                        <span class="rm-close">Close</span>
                        <div class="rm-content">
                            <h4>Desserts</h4>
                            <dl>
                                 <?php foreach($dessert as $value){?>
                                <dt><a href="#" class="rm-viewdetails" data-thumb="<?php echo base_url()."userdata/appetizer/".$value['picture'];?>"><?php echo $value['name'];?></a></dt>
                                <dd><?php echo $value['description'];?></dd>
                                 <?php }?>
                            </dl>
                            <div class="rm-order">
                                <p><strong>Would you like us to cater your event?</strong> Call us &amp; we will help you find a venue and organize the event: <strong>626.511.1170</strong></p>
                            </div>
                        </div><!-- /rm-content -->
                    </div><!-- /rm-back -->

                </div><!-- /rm-right -->
            </div><!-- /rm-wrapper -->
        </div><!-- /rm-container -->
        <script src="jquery/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="jquery/menu.js"></script>
		<script type="text/javascript">
			$(function() {

				Menu.init();
			});
		</script>
    </div>

    <div class="content" id="aboutus">
    <div id="gr-gallery" class="gr-gallery">
				<div class="gr-main">

                    <?php foreach($image_list as $value){?><figure>
						<div>
							<img src="<?php echo base_url() ?>userdata/appetizer/<?php echo $value['picture'];?>" alt="menu1" title="menu1"/>

						</div>
						<figcaption>
							<h2><span><?php echo $value['name'];?></span></h2>
							<div><p><?php echo $value['description'];?></p></div>
						</figcaption>
					</figure> <?php }?>


        <script src="jquery/jquery-1.9.1.js"></script>
		<script src="jquery/wallgallery.js"></script>
		<script>
			$(function() {

				Gallery.init( {
					layout : [2,3,2,3]
				} );

			});
		</script>
				</div>
	</div>
    </div>

    <div id="overlay"></div>
    <div id="contactus" class="popup">
<form name="contact" method="post" action="<?php echo site_url('home/do_message')?>">
     <a href="#" class="close"><img src="images/close.png" width="15px" height="15px"></a>
    <h2 class="contactus">Contact us</h2>
         <p>
         Address: Jln Thamrin 5 kav 8 (BCA tower), level 60<br><br>
         Phone	: (021) 67856443<br><br>
         Your name: <input type="text" name="name"><br>
         Your email: <input type="text" name="email"><br>
         Your phone: <input type="text" name="phone"><br>
         Your message: <br><textarea name="message" style="width: 193px; height: 100px;"></textarea><br><br>
         <button type="submit"><p class="contactus">Send message</p></button>
         </p>
</form>
</div>
</div>
<div class="share">
     <a target="_blank" href="<?php echo site_url('countfacebook');?>"/><img src="<?php echo base_url()."images/facebook.png"?>"/></a>
  </div>
</body>
</html>
