<?php
   $name=$_POST['name'];
   $email=$_POST['email'];
   $msg=$_POST['msg'];
   $to="shivamyadav343343@gmail.com";
   $subject="User details Who want to contact us through Service Provider";
   $txt="Hi, i want to contact us through the Service Provider.\r\n Name=".$name."\r\n Email=".$email."\r\n Message=".$msg;
   $headers="From:pandayanjani5@gmail.com";
   if(mail($to,$subject,$txt,$headers))
    {
    echo"<script>alert('Email sent');window.location.href='contact_us.php'</script>";
   }
   else{
    echo"<script>alert('Email not sent');window.location.href='contact_us.php'</script>";
   }
?>
