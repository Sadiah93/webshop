
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <title>Electronic Shop</title>
</head>
<body>
 <header><h2>Electronics<h2></header>
  <!--Menu-->
<nav class="navbar navbar-inverse" style="margin-bottom: 0;">
  <div class="container-fluid" id="div1">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="#">Items</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Login/Sign up</a></li>


      </ul>
    </div>
  </div>
</nav>
 
<form method="post" action="connect.php">
  
        <div class="container">
            <header>
              <table align="center">
              <!--register-->
                  <td align="left"><h3><p><span>*</span> Name:<input class="textbox" type="name" name="cname"><br><br>
                    <span >*</span>Username: <input  class="textbox" type="text" name="username"><br><br>
                      <span>*</span>Password: <input class="textbox" type="password" name="password"><br><br>

                       <input  class="style" type="submit" value="Register"><br><br/>
                           <span class="required">* Required</span></h3></td>
                           </p>
                           </form>

<!--login-->
<form method="get" action="connect.php">
               <td valign="top"  align="right"><h3>Already a member?<br>
Username: <input class="textbox" type="text" name="username"><br><br>
Password: <input class="textbox" type="password" name="password"><br><br>
<button class="style"> Sign In</button>
forgot password?</h3></td></table></div>
</form>


</body>
</html>

