<?php
session_start();
$city=$_POST['search'];
if($city==="Surat" or $city==="surat")
{
	header("location: city-options.php");
}
else if($city==="Bhavnagar" or $city==="bhavnagar")
{
	$_SESSION['selected_city'] = $city;
	header("location: bvn.php");
}
else if($city==="Delhi" or $city==="delhi")
{
	header("location: city-options.php");
}
else if($city==="Mumbai" or $city==="mumbai")
{
	header("location: city-options.php");
}
else
{
	header("location: city-options.php");
}

?>