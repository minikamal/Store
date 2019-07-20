
<?php
$a=$_GET["id"];
mysql_connect("localhost","root","rootwdp");

mysql_select_db("store");

$qry="delete from `product_reg` where sno=$a";

mysql_query($qry);

 header('location:http://localhost/Store/form.php');

?>