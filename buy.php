

 <?php
 
       mysql_connect("localhost","root","rootwdp");
	   mysql_select_db("store");
      $sno=$_GET["sno"];
	  
	  $qry="SELECT Quantity FROM `product_reg` WHERE Sno='$sno'";
	        
	  
	  $result=mysql_query($qry);
	  $row=mysql_fetch_array($result);
	  
	  $qty=$row[0];
	  
	  if($qty>0)
	  {
		$cqty=$qty-1;
		
		$qry2="update `product_reg` SET  Quantity='".$cqty."' where   Sno=$sno ";
		
		mysql_query($qry2);
		
	  }

   else 
   {
	  echo "<br>.No more available";
   }
   
 
   
  ?>
  <?php
  echo "<br>.Thank you for shopping";
  ?>