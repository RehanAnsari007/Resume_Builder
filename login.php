<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "resumebuilder";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if($conn===false)
{
    die('connection error');
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $email=$_POST["Lemail"];
	$password=$_POST["Lpswd"];


	$sql="select * from resumeusers where email='".$email."' AND password='".$password."' ";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
	{	
        $_SESSION["Lemail"]=$email;
        header("location:userpage.html");
	}
	elseif($row["usertype"]=="admin")
	{
        $_SESSION["Lemail"]=$email;
		header("location:Admin/index.php");
	}

	else
	{
		echo '<script type="text/javascript">'; 
        echo 'alert("You are not Registered or Wrong email or Password");'; 
        echo 'window.location.href = "mainpage.html";';
        echo '</script>';
    }
}
?>