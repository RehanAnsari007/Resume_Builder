<?php
session_start();
if (isset($_POST['Register'])) {
    if (isset($_POST['txt']) && isset($_POST['pswd']) && isset($_POST['email'])) {
        
        $username = $_POST['txt'];
        $password = $_POST['pswd'];
        $email = $_POST['email'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "resumebuilder";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM resumeusers WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO resumeusers(username, email, password) values(?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sss",$username, $email, $password);
                if ($stmt->execute()) {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("You are Registered Successfully");'; 
                    echo 'window.location.href = "mainpage.html";';
                    echo '</script>';
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Account Already Exist Please Login");'; 
                echo 'window.location.href = "mainpage.html";';
                echo '</script>';
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>