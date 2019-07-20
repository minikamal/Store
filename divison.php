<?php

$pagename= basename($_SERVER["PHP_SELF"]);

?>





<?php
mysql_connect("localhost","root","rootwdp");
mysql_select_db("store");


$qry="select distinct Category from `product_reg` ";
$res=mysql_query($qry);



?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/new.css">
<title>My gallery</title>
<style>
.head4{
       border:0px solid black;
   float:left; height:510px; width:300px;
   margin-left:70px;
   margin-bottom:50px;
   background-color:#d8d7d7;
   
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

<body style="font-family:calibri;">
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



<h1 align="center" style="font-size:50px;  color:white; font-family:Calibri; 
  width:50%; margin-left:320px; margin-bottom:50px; margin-top:50px;
   background:linear-gradient(to right,#f2674f,#f24f6a);">GALLERY</h1>
<?php

   while($row=mysql_fetch_array($res)){
?>  

  <div style="height:500px;">
	   <div  style="border:0px solid black; float:left; height:420px; width:100px; margin-left:45px; margin-bottom:50px;" ><h1 align="center" style="padding-top:160px;"><u> <?php echo ucfirst($row[0]); ?></u></h1>
	   </div>
   <?php
     $cat=$row[0];
	 $fet="SELECT *  FROM  `product_reg`  WHERE  `Category` =  '$cat'";
	 $qry1=mysql_query($fet);
    while($rel=mysql_fetch_array($qry1)){
		?>
   <div style="border:0px solid black; float:left;  " class="head4">
        <img src="images\<?php echo $rel[10];?>" height="350px" width="300px">
         <hr/>
		   <div style="height:100px; width:200px; border:0px solid black; margin-top:-20px; padding-left:45px;">
		   <h2 align="center"> <?php echo "$rel[6]"; ?> </h2>
		   <p><b> MRP: <?php echo " $rel[8]";?> <span style="margin-left:70px;"> Dis. <?php  echo "$rel[7]";?> %</span><br>Quantity:<?php echo "$rel[9]";?><?php if($rel[9]==0){ echo "<br> OUT OF STOCK";}?> </b></p>
		   <p align="center"> Current Price: 
		        <?php
			 	$price=$rel[8];
				$dis=$rel[7];
				$dis_p=$price*$dis/100;
				echo $price-$dis_p;
				
				
				?>
		   
		   </p>
		  <a href="buy.php?sno=<?php echo $rel[0]; ?>"  > <input type="button" value="BUY" <?php
		  if($rel[9]==0){ echo "disabled" ;}?>></a>
		   </div>
		   
   </div>
	<?php
	 }
   ?>
   </div>
   
   <?php
     }
   ?>
   
   