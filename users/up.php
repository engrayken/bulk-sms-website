<?php
$auser = (int)$_COOKIE['auser'];
$admin = '';

if($auser == '')
{
	header("location: ../index.php");
}

//check reseller
$cre = mysqli_query($connect, "select reseller from user where id = $auser");
$cre_row = mysqli_fetch_row($cre);
$ure = $cre_row[0];

//user info
$xuinfo = mysqli_query($connect, "select email, phone from user where id = $auser");
$xuinfo_row = mysqli_fetch_row($xuinfo);
$xuemail = $xuinfo_row[0];
$xuphone = $xuinfo_row[1];

?>