<html>
 <head>
   <title>Member login</title>
 </head>
 <body>
   <h1>Member login</h1>
  <form name="authentication" id="authentication" method ="post" action="<?php echo site_url('c_login/do_login');?>"/>
   Username: <input type="text" name="username" id="username"/><br>
   Password: <input type="password" name="password" id"password"/><br>
   <input type="submit"> 
   </form>
 </body>
</html>