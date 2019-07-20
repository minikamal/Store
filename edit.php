<?php
$x=$_GET["id"];
mysql_connect("localhost","root","rootwdp");
mysql_select_db("store");

$qry="SELECT * FROM `product_reg` WHERE Sno=$x";
$res=mysql_query($qry);
$fet=mysql_fetch_array($res);



?>


<!DOCTYPE html>
<html>
<head> <title> FORM</title></head>
<body>


<form action="" method="get">
<table align="center" style="border:2px double black;">
<tr>
<td>
Select Type:<input type="radio" name="gender" value="male" <?php if($fet[1]=='male'){echo "checked";} ?>>Men
             <input type="radio" name="gender" value="female" <?php if($fet[1]=='female') {echo "checked";}?>>Women
</td>
<tr>

<td>
Category:
<input type="checkbox" name="chk" value="jeans" <?php if($fet[2]=='jeans'){echo "checked";} ?>>Jeans	 
			 <input type="checkbox" name="chk" value="shirt" <?php if($fet[2]=='shirt'){echo "checked";} ?>>Shirts	 
			 <input type="checkbox" name="chk" value="tshirt" <?php if($fet[2]=='tshirt'){echo "checked";} ?>>T-Shirt	 
			 <input type="checkbox" name="chk" value="pants" <?php if($fet[2]=='pants'){echo "checked";} ?>>Pants			 
			 <input type="checkbox" name="chk" value="dress" <?php if($fet[2]=='dress'){echo "checked";} ?> >Dresses
			  <input type="checkbox" name="chk" value="tops" <?php if($fet[2]=='tops'){echo "checked";} ?>>Tops
			  <input type="checkbox" name="chk" value="kurtis" <?php if($fet[2]=='kurtis'){echo "checked";} ?>>Kurtis
			   <input type="checkbox" name="chk" value="leggings" <?php if($fet[2]=='leggings'){echo "checked";} ?>>Leggings
			    </td>
</tr>
<tr>
<td>
 Select Color:
<select name="color" >
<option <?php if($fet[3]=='Red'){echo "selected";} ?> >Red</option>
<option <?php if($fet[3]=='Blue'){echo "selected";} ?>>Blue</option>
<option <?php if($fet[3]=='Black'){echo "selected";} ?>>Black</option>
<option <?php if($fet[3]=='Green'){echo "selected";} ?>>Green</option>
<option <?php if($fet[3]=='White'){echo "selected";} ?>>White</option>
<option <?php if($fet[3]=='Pink'){echo "selected";} ?>>Pink</option>
<option <?php if($fet[3]=='Yellow'){echo "selected";} ?>>Yellow</option>
<option <?php if($fet[3]=='Orange'){echo "selected";} ?>>Orange</option>
<option <?php if($fet[3]=='Cyan'){echo "selected";} ?>>Cyan</option>
<option <?php if($fet[3]=='Violet'){echo "selected";} ?>>Violet</option>	
<option <?php if($fet[3]=='Grey'){echo "selected";} ?>>Grey</option>
<option <?php if($fet[3]=='Brown'){echo "selected";} ?>>Brown</option>
<option <?php if($fet[3]=='Multi'){echo "selected";} ?>>Multi</option>
</select>
</td>
</tr>	
<tr>
<td>
Select Size:
<input type="checkbox" name="cik" value="s" <?php if($fet[4]=='s') { echo "checked";}?>>S
<input type="checkbox" name="cik" value="m" <?php if($fet[4]=='m') { echo "checked";}?>>M
<input type="checkbox" name="cik" value="l" <?php if($fet[4]=='l') { echo "checked";}?>>L
<input type="checkbox" name="cik" value="xl" <?php if($fet[4]=='xl') { echo "checked";}?>>XL
<input type="checkbox" name="cik" value="xxl" <?php if($fet[4]=='xxl') { echo "checked";}?>>XXL

</td>
</tr>
<tr>
<td>
 Fabric:<input type="text" name="fabric" value="<?php echo $fet[5];?>">
</td>
</tr>
<tr>
<td>
Brand:<input type="text" name="brand" value="<?php echo $fet[6];?>">
</td>
</tr>
<tr>
<td>
Discount:<input type="number" name="disc" value="<?php echo $fet[7];?>">
</td>
</tr>
<tr>
<td>
Price:<input type="number" name="price" value="<?php echo $fet[8];?>"  />
</td>
</tr>
<tr>
<td>
Quantity:<input type="number" name="qty" value="<?php echo $fet[9];?>">
         <input type="hidden" name="id" value="<?php echo $fet[0];?>" />
</td>
</tr>
<tr>
<td>
<input type="submit" name="update">
<input type="reset" name="reset">
</td>
</tr>

</table>
</form>
</body>
</html>
<?php
if(isset($_GET['update'])){
	$a=$_GET['id'];
$type=$_GET["gender"];
$category=$_GET["chk"];
$color=$_GET["color"];

$fabric=$_GET["fabric"];
$brand=$_GET["brand"];
$dis=$_GET["disc"];
$price=$_GET["price"];
$qty=$_GET["qty"];

$qry1="update `product_reg` SET Type='".$type."', Category='".$category."', Color='".$color."', Fabric='".$fabric."', Brand='".$brand."', Discount='".$dis."', Price='".$price."', Quantity='".$qty."' where 
Sno=$a ";
echo $qry1;
mysql_query($qry1);

}
?>