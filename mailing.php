<?php
$username=$_POST['name'];
$useremail=$_POST['email'];
$usersub=$_POST['sub'];
$usermsg=$_POST['msg'];
$to='alfareedss472@gmail.com';
$mailme=mail($to,$usersub,$usermsg);
if($mailme==true)
{
?><script>alert("Sent mail Succesfully")</script><?php
}
// else
// {
//     ?><script>alert("Couldn't send mail..!")</script><?php
// }
?>
