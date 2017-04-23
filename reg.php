<?php
$host='us-cdbr-iron-east-03.cleardb.net';
	$uname='b751155a75642f';
	$pwd='df842b14';
	$db="ad_ca59d5ab9d31112"; 

                      $con = mysql_connect($host,$uname,$pwd) or 	die("connection failed");   
                     mysql_select_db($db,$con) or die("db selection failed"); 
   	session_start();
if($_SERVER["REQUEST_METHOD"]=="GET")
{
	$userN=$_GET['name'];
	$userem=$_GET['emailid'];
     $usermob=$_GET['contact'];   
        $userrf=$_GET['rfid'];
    	 $pswd=$_GET['pswd'];
	if($r=mysql_query("insert into register(Username,Email_Id,Contact_No,RFID_No,Password) values('$userN','$userem','$usermob','$userrf','$pswd') ",$con))
	{
		echo" Data Inserted";
	}
		echo "Data not inserted";
	
}
  ?>