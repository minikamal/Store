<?php

$pagename= basename($_SERVER["PHP_SELF"]);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/new.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<title>Sign In</title>
<style>
.head12{
        border:1px solid black;
		height:400px;
		width:600px;
		margin-left:300px;
		margin-right:600px;
      }
.head11{ 
         padding-top:2px;
		 padding-bottom:2px;
		 padding-right:10px;
		 padding-left:180px;
		 }
.active{
	float:left;
	margin-left:15px;
	border:1px solid white;
	color:white;
	height:50px;
	width:146px;
	background-color:yellow;
	
}

</style>
</head>
<body style="font-size:20px; font-family:calibri;">

<div class="head1">
<ul>
<li class="<?php if($pagename=='index.php'){ echo 'active'; }?>"><a href="index.php">Home</a></li>

<li class="<?php if($pagename=='about.php'){ echo 'active'; }?>"><a href="about.php" target="_self">About Us</a></li>

<li class="<?php if($pagename=='services.php'){ echo 'active'; }?>"><a href="services.php" target="_self">Services</a></li>

<li class="<?php if($pagename=='sign.php'){ echo 'active'; }?>"><a href="sign.php" target="_self">SIGN IN</a></li>
<li class="<?php if($pagename=='product.php'){ echo 'active'; }?>"><a href="product.php" target="_self">Product Reg.</a></li>
<li class="<?php if($pagename=='form.php'){ echo 'active'; }?>"><a href="form.php" target="_self">Product Details</a></li>

<li class="<?php if($pagename=='divison.php'){ echo 'active'; }?>"><a href="divison.php" target="_self">Gallery</a></li>

<li class="<?php if($pagename=='contact.php'){ echo 'active'; }?>"><a href="contact.php" target="_self">Contact</a></li>


</ul>
</div>

<?php
include_once("connect.php");
if(isset($_GET['login'])){
$user=$_GET["user"];
$pass=$_GET["pwd"];


$qry="select * from `admin` where username='".$user."' && password='".$pass."'";
echo $qry;
$result=mysql_query($qry);

$number=mysql_num_rows($result);

if($number){
	session_start();
	$_SESSION['username']=$user;
	header("location:http://localhost/Store/form.php");
	
}
else
{
	header("location:http://localhost/Store/sign.php");
}

}
?>


<h1 align="center" style="margin-top:100px; margin-left:-100px; font-size:40px;">LOG IN

</h1>

<div class="head12">
<div class="head11">
<form action="" method="get">
<h4 style="font-size:30px;"><span class="fa fa-user fa-1x"></span>Enter User Name:</h4> <input type="text" name="user" />


<br>
  <h4 style="font-size:30px;"><span class="fa fa-unlock-alt fa-1x"></span>Enter Password:</h4><input type="password" name="pwd" required />
<br>

<input type="submit" name="login" />
</form>
</div>
</div>

<div style="width:95%; height:350px; background:linear-gradient(to right,#8cd4f9,#8c91f9); font-size:28px; margin-left:30px; margin-top:30px;">
<div class="head2">
<p>The best shopping destination of choice with affordable prices and latest fashion trends.</p>
</div>
<div class="head2">
<p><b>Contact Us:</b>
<br>1-800-470-8765 (Toll Free Number)<br>
Visit our site: www.vintagetrends.com for further information
</div>
</div>



</body>




</html>
