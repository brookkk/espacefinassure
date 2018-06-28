<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/21/2014 
 * Time: 1:13 AM 
 */  
$dbcon=mysqli_connect("127.0.0.1","root","root", "finarea");  
mysqli_select_db($dbcon,"finarea");




// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
?>