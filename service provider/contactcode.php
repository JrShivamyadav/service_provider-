<?php
require "dbmanager.php";
$name=$_POST["name"];
$email=$_POST["email"];
$mob=$_POST["mob"];
$msg=$_POST["msg"];
$dt=Date('d/m/y');
$query="insert into contact values('$name','$email','$mob','$msg','$dt')";
$db=new DBManager();
$x=$db->insertUpdateOrDelete($query);
if($x==true)
{
echo " <script>alert('Thanks for Contact us as soon as we contact you');window.location.href='contact_us.php'</script>";
}
else
{
    echo"<script>alert('Your Process is not complete');window.location.href='contact_us.php'</script";
}
?>