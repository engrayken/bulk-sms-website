<?php
$aut_host = '127.0.0.1';//e.g localhost
$aut_user = 'root';
$aut_pass = '';
$aut_db = 'vsms';

$connect = mysqli_connect($aut_host, $aut_user, $aut_pass);
$xtzone = mysqli_query($connect,"SET time_zone = 'Africa/Lagos'");
mysqli_select_db($connect,$aut_db);

/*$aut_host = 'localhost';//e.g localhost
$aut_user = 'root';
$aut_pass = '';
$aut_db = 'vsms';*/

//$connect = mysql_pconnect('localhost', 'root', '');
//mysql_select_db('vsms');

if($page != 'setup')
{
//get num
$con_num = mysqli_query($connect,"select tell, sid, surl, sname, email, description, style from info where id = 1");
$con_num_row = mysqli_fetch_row($con_num);

$mynumber = "$con_num_row[0]";
$csite_name = $con_num_row[3];
$csenderid = $con_num_row[1];
$csite_url = $con_num_row[2];
$cemail = $con_num_row[4];
$logo_link = $csite_url.'/images/logo.png';
$cdescription = $con_num_row[5];
$cstyle = $con_num_row[6];
}
?>