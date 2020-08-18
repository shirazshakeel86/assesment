<?php
$insert1="insert into account (acct-id,cust-id,balance,category)value($row[cust_id],'$balance','$category')";
echo".$insert1";
$query1=mysqli_query($conn,$insert1) or die("error75675!");
?>