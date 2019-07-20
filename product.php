<?php
      include_once("include/header.php");
	error_reporting(0);
?>	


<?php
 $year= date(Y);
 $month= date(m);
 $date= date(d);
 
 $hour=date(H);
 $min=date(i);
 $second=date(s);
 $a=date(a);
 echo $year."-".$month."-".$date; 
 echo "</br>".$hour."-".$min."-".$second."-".$a;

?>

<h2 >Product Registration</h2>
<h3 align="center"> New Product Entry Form</h3>
<form action="form.php" method="get" enctype="multipart/form-data">
<table align="center" style="border:2px double black;">
<tr>
<td>
Select Type:<input type="radio" name="gender" value="male" checked>Men
             <input type="radio" name="gender" value="female">Women
</td>
<tr>

<td>
Category:
<input type="checkbox" name="chk" value="jeans" id="abc">Jeans	 
			 <input type="checkbox" name="chk" value="shirt" id="abc">Shirts	 
			 <input type="checkbox" name="chk" value="tshirt" id="abc">T-Shirt	 
			 <input type="checkbox" name="chk" value="pants" id="abc">Pants			 
			 <input type="checkbox" name="chk" value="dress" id="abc">Dresses
			  <input type="checkbox" name="chk" value="tops" id="abc">Tops
			  <input type="checkbox" name="chk" value="kurtis" id="abc">Kurtis
			   <input type="checkbox" name="chk" value="leggings" id="abc">Leggings
			    </td>
</tr>
<tr>
<td>
 Select Color:
<select name="color">
<option>Red</option>
<option>Blue</option>
<option>Black</option>
<option>Green</option>
<option>White</option>
<option>Pink</option>
<option>Yellow</option>
<option>Orange</option>
<option>Cyan</option>
<option>Violet</option>	
<option>Grey</option>
<option>Brown</option>
<option>Multi</option>
</select>
</td>
</tr>	
<tr>
<td>
Select Size:
<input type="checkbox" name="cik" value="s">S
<input type="checkbox" name="cik" value="m">M
<input type="checkbox" name="cik" value="l">L
<input type="checkbox" name="cik" value="xl">XL
<input type="checkbox" name="cik" value="xxl">XXL

</td>
</tr>
<tr>
<td>
 Fabric:<input type="text" name="fabric">
</td>
</tr>
<tr>
<td>
Brand:<input type="text" name="brand">
</td>
</tr>
<tr>
<td>
Discount:<input type="number" name="disc">
</td>
</tr>
<tr>
<td>
Price:<input type="number" name="price">
</td>
</tr>
<tr>
<td>
Quantity:<input type="number" name="qty">
</td>
</tr>

<tr>
<td>
Upload Image:<input type="file" name="pic" />
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit">
<input type="reset" name="reset">
</td>
</tr>

</table>
</form>

<?php
include_once("include/footer.php");


?>