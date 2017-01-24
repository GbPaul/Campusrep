<?php
$user='root';
$pass='';
$db='collegenetworking';


$db= new mysqli('localhost',$user, $pass, $db ) or die ("unable to connect");
echo "successful" ;

?>
