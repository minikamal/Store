<?php

$pagename= basename($_SERVER["PHP_SELF"]);

?>




<?php

      include_once("include/header.php");
	  session_start();
	  
	  if(!isset($_SESSION['username'])){
		header("location:http://localhost/store/sign.php"); 
      }

?>




<?php



if(isset($_GET['submit'])){
	$target_path="images/";

$target_path=$target_path. basename($_FILES['pic']['name']);
echo $target_path;
if(move_uploaded_file($_FILES['pic']['tmp_name'],$target_path)){
	echo "The file".basename($_FILES['pic']['name'])."has been uploaded";
}
	
	
	$img=basename($_FILES['pic']['name']);
$type=$_GET["gender"];
$category=$_GET["chk"];
$color=$_GET["color"];
$size=$_GET["cik"];
$fabric=$_GET["fabric"];
$brand=$_GET["brand"];
$dis=$_GET["disc"];
$price=$_GET["price"];
$qty=$_GET["qty"];
}
mysql_connect("localhost","root","rootwdp");
mysql_select_db("store");

if(isset($_GET['submit'])){
	$qry=" insert into `product_reg` (Type,Category,Color,Size,Fabric,Brand,Discount,Price,Quantity,Images) VALUES
		   ('".$type."','".$category."','".$color."','".$size."','".$fabric."','".$brand."','".$dis."',
			  '".$price."','".$qty."','".$img."')";

	mysql_query($qry);
	{
		if(isset($_GET['submit']))
		{
			echo "<br> Successfully data inserted";
		}
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Product_Reg</title>
</head>
<body>
<table border="1" width="100%">
<tr>
<th>Image</th>
<th>Type</th>
<th>Category</th>
<th>Color</th>
<th>Size</th>
<th>Fabric</th>
<th>Brand</th>
<th>Discount</th>
<th>Price</th>
<th>Quantity</th>
<th>Action <a href="logout.php" > <button> Logout </button> </a> <button> <?php echo $_SESSION['username']; ?> </button></th>


</tr>

<?php
      $fetch="select * from product_reg`";
       $res=mysql_query($fetch);

    while($row=mysql_fetch_array($res))
		
	
	{
     echo "<tr><td> <img src='images/".$row[10]."' height='25px' width='30px' /> </td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row['Size']."</td><td>".$row[5]."</td>
	     <td>".$row[6]."</td><td>".$row[7]."</td><td>".$row['Price']."</td> <td>
		".$row[9]." </td> 
		 <td><a href='edit.php?id=".$row[0]."'><button>edit</button></a>
		 <a href='del.php?id=".$row[0]."'><button>delete</button></a></td></tr>";

	}

?>
</table>





</body>
</html>
<?php
include_once("include/footer.php");

?>