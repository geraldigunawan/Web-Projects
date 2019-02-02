<!DOCTYPE html>
<head>
<title>The Clu&Clo home page</title>
<link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>css/jquery-ui.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url()?>jquery/jquery-1.9.1.js"></script>
<script src="<?php echo base_url()?>jquery/jquery-ui.js"></script>
<script src="<?php echo base_url()?>jquery/jquery.waterwheelCarousel.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>jquery/shownhide.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>jquery/waterwheel.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>jquery/scroll.js"></script>

</head>
<body>
<div class="container">
    <div class="head">
        <img src="images/resto.jpg">
    </div>
    <div class="nav">
        <ul>
            <li><a href="#home" class="home_nav">Home</a></li>
            <li>
                <a href="#">Selling</a>
                <ul>
                    <li><a href="#food" class="food_nav">Food</a></li>
                    <li><a href="#beverage" class="beverage_nav">Beverage</a></li>
                </ul>
            </li>
            <li><a href="#aboutus" class="second">About us</a></li>
            <li><a href="#contactus" class="first">Contact us</a></li>
        </ul>
    </div>  
</div>

<div class="container2">
    <div class="content" id="home">
    <h1 class="restotitle">Clu & Clo</h1>
        <div id="carousel">
        <img src="images/food/starter/bread4.jpeg" title="Bread" />
        <img src="images/food/main/main2.jpg" title="Steak" />
        <img src="images/food/dessert/dessert4.jpeg" title="Pudding" />
        <img src="images/food/main/main3.jpeg" title="Steak" />
        <img src="images/food/starter/bread4.jpeg" title="Bread" />
        <img src="images/food/starter/bread4.jpeg" title="Bread" />
        <img src="images/food/starter/bread4.jpeg" title="Bread" />
        <img src="images/food/dessert/dessert1.jpeg" title="Cherry" />
        </div>
    	<div class="menu">
      	 	<div id="showourmission">Our mission</div>
        	<div id="showwhatarewe">What are we?</div>
        	<div id="showlocation">Our location</div>
    	</div>
        <div class="menucontent">
            <div id="missioncontent">
            <p>Our mission is to ensure that each guest receives prompt, professional, friendly and courteous service. We will maintain a clean, comfortable and well maintained premises for our guests and staff. Also, we provide a fair price - nutritional, well-prepared meals - using only quality ingredients. To ensure that all guests and staff are treated with the respect and dignity they deserve. To thank each guest for the opportunity to serve them. By maintaining these objectives we shall be assured of a fair profit that will allow us to contribute to the community we serve.</p>
            </div>
            <div id="whatarewecontent"><p>Clu&Clo is a newly open fine dining restaurant providing any types of main dishes such as steak and rib-eye, we also provide fresh and delicious dessert for an epic ending of your dinner. We are committed to provide a nutritional and well-prepared meals at a fair price, and to put customer as priority is our main goal. We are honoured for the opportunity to give customer our full sercive </p></div>
             <div id="locationcontent"><p>Address : Jln Thamrin 5 kav 8 (BCA tower), level 60</p></div>
        </div> 


    </div>
    
    <div class="content" id="food">
<h2>Welcome to Food page</h2>
<div class="note">
  <ul>
    <li>
      <a href="#">
        <h2>Hobbies</h2>
        <p>Tennis, watch movies, guitar</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Education</h2>
        <p>Sydney University</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Favourite food</h2>
        <p>rendang, friend chicken</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>Favourite movie</h2>
        <p>The billionaire</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>What I study</h2>
        <p>about IT</p>
      </a>
    </li>
    <li>
      <a href="#">
        <h2>What I love to do</h2>
        <p>hang out</p>
      </a>
    </li>

  </ul>
 </div>
</div>
    
    <div class="content" id="beverage">
     <h2>Welcome to Beverage page</h2>
     </div>
</div>

<div class="footer">
        <span style="color:#FFF">Copyright (c) 2014</span>
    </div>
</div>

<div id="overlay"></div>
<div id="aboutus" class="popup">
     <a href="#" class="close"><img src="images/close.png" width="15px" height="15px"></a>
     <h2 class="aboutus">About us</h2><br>
         <p>Clu&Clo is a newly open fine dining restaurant providing any types of main dishes such as steak and rib-eye, we also 		            provide fresh and delicious dessert for an epic ending of your dinner. We are committed to provide a nutritional and            well-prepared meals at a fair price, and to put customer as priority is our main goal. We are honoured for the opportunity            to give customer our full service </p>
           
</div>
<div id="contactus" class="popup">
<form name="contact" method="post" action="<?php echo site_url('home/do_message')?>">
     <a href="#" class="close"><img src="images/close.png" width="15px" height="15px"></a>
    <h2 class="contactus">Contact us</h2>
         <p class="contactus"><br><br>
         Address: Jln Thamrin 5 kav 8 (BCA tower), level 60<br><br>
         Phone	: (021) 67856443<br><br>
         Your name: <input type="text" name="name">
         Your email: <input type="text" name="email">
         Your phone: <input type="text" name="phone">
         Your message: <br><textarea name="message"></textarea>
         <input type="submit" value="Send message"></p>
</form>
</div>
</body>
</html>
