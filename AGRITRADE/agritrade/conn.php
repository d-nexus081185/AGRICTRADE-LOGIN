<?php

$servername="localhost";
$username="root";
$password="";
$dbname="agritrade";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
	//echo "Connection Success";
}
else{
	echo"Invalid connection";
}

$name=$_POST['name'];
$number=$_POST['number'];
$password=$_POST['psk'];
$data="Insert into connect values('','$name,$number,%psk) ";
$check-mysqli_quert($conn,$data);
if($check){
	echo "Registration Successful !!";

}else{
	echo "Registration Failed!"
}
		 


?>
