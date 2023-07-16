<?php

$name = $_POST["name"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$email = $_POST["email"];
$about = $_POST["about"];
$github = $_POST["github"];
$instagram = $_POST["instagram"];
$linkedin = $_POST["linked-in"];
$city = $_POST["city"];
$studied = $_POST["Studied"];
$occupation = $_POST["occupation"];
$position = $_POST["position"];
$workdate = $_POST["workdate1"];
$workabout = $_POST["workexperience"];
$education = $_POST["education"];
$university = $_POST["university"];
$cgpa = $_POST["cgpa"];
$edudate = $_POST["educationdate1"];
$eduabout = $_POST["educationabout"];
$skills = $_POST["Skills"];
$objectives = $_POST["objectives"];
$destfile = $_POST["destfile"];
$filename = $_POST["filename"];


if(isset($_POST['submit'])){

    

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "resumebuilder";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    $query2 = mysqli_query($conn,"SELECT * FROM resumedetail where email = '$email'");
  

    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    elseif(mysqli_num_rows($query2)>0){
        echo '<script type="text/javascript">'; 
        echo 'alert("Resume Already Submitted");'; 
        echo 'window.location.href = "../homepage/index.html";';
        echo '</script>';
        
    }else{

        $insertquery = "insert into resumedetail(name,contact,address,email,about,githublink,instalink,linkedinlink,city,studies,occupation,position,workdate,workabout,education,university,cgpa,edudate,eduabout,skills,objectives,profilepic,achivements) 
        value('$name','$contact','$address','$email','$about','$github','$instagram','$linkedin','$city','$studied','$occupation','$position','$workdate','$workabout','$education','$university','$cgpa','$edudate','$eduabout','$skills','$objectives','$destfile','$filename')";
        $query = mysqli_query($conn,$insertquery);
        echo '<script type="text/javascript">'; 
        echo 'alert("Resume Submitted Successfully");'; 
        echo 'window.location.href = "../homepage/index.html";';
        echo '</script>';


    }







}else{

    echo "submit button error";
}










?>
