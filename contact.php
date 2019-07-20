<?php

      include_once("include/header.php");


?>





<h4 align="center" style="font-size:25px"><span class="fa fa-address-book fa-1x"></span>CONTACT US</h4>
<p align="center">
Want to know about order status or queries <br>
related to a product give us a call or drop a line<br> 
between 8 A.M. to 10 P.M. - 7 days a week.
</p>
<h4 align="center" style="font-size:25px"><span class="fa fa-phone fa-1x"></span>CALL US</h4>
<p align="center">#1-800-470-8765 (TOLL FREE NUMBER)
</p>
<h4 align="center" style="font-size:25px"><span class="fa fa-pencil fa-1x"></span>WRITE TO US</h4>

<table align="center" style="margin-left:270px; margin-right:50px;">
<form>
<tr>
<td>
<input type="text" name="_Name" required  placeholder="Enter your name here" style="border:2px solid black; border-radius:10px; width:400px; height:30px;">
</td>
</tr>
<tr>
<td><input type="radio" name="_gender" value="male" checked>Male
         <input type="radio" name="_gender" value="female">Female
</td>
</tr>
<tr>
<td><input type="number" name="mob_no1" placeholder="Mobile No" required style="border:2px solid black; border-radius:10px; width:400px; height:30px;"> 
</td>
</tr>
<tr>
<td>
<input type="email" name="_email" placeholder="Email Id" required style="border:2px solid black; border-radius:10px; width:400px; height:30px;">
</td>
</tr>
<tr>
<td><input type="number" placeholder="Order number" style="border:2px solid black; border-radius:10px; width:400px; height:30px;">
</td>
<td>Category:
<select>
<option>Alterations</option>
<option>Billing</option>
<option>Exchange</option>
<option>Order Status</option>
<option>Order Complaint</option>
<option>Order Request</option>
<option>Query</option>
</select>
</td>
</tr>
<tr>
<td>
Comments:<textarea cols="70" rows="5" placeholder="Comments(Max 500 characters)*" required style="border:2px solid black; border-radius:10px; width:400px; "> </textarea>
</td>
</tr>
<tr>
<td> <button style="background-color:red; height:30px;">Submit</button>


</td>

</tr>
</form>
</table>

<?php
      include_once("include/footer.php");
?>