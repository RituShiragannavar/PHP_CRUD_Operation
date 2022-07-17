<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chicken";


$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {



  die("Connection failed: " . $conn->connect_error);

  header("location: sire.php");



}





if(isset($_GET['delete'])){
  $s_id=$_GET['delete'];
  $conn->query("DELETE From sire WHERE s_id=$s_id") or die($conn->error());

  header("location: edit.php");
}


if(isset($_GET['edit'])){
  $s_id=$_GET['edit'];


  $result=$conn->query("SELECT * From sire WHERE s_id=$s_id") or die($conn->error());
  
  $row=$result->fetch_array();
  if(isset($row)){
  	$s_color = $row['s_color'];
	$s_breed = $row['s_breed'];
	$s_bloodline = $row['s_bloodline'];
	$s_address= $row['s_address'];
  }
}


?>