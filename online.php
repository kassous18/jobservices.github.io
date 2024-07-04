<?php

inlcue('connect.php');

$connection = mysqli_connect("localhost", "root", "", "adminpanel");



/*------------------ start register------------------ */
if(isset($_POST['registerbtn']))
{
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $location = $_POST['location'];
    
        
    $chechEmail = "SELECT * FROM appointment where email ='$email' ";
    $result = $conn->query($chechEmail);

    if($result->num_rows>0){
        echo "Email ";
    }
    else{
        $insertQuery = "INSERT INTO  appointment(name, address,email, number, location) VALUES ('$name','$address', '$email', '$phone', '$location') ";

        if($conn->query($insertQuery) == TRUE){
            header("Location: appoitment.php");
        }
        else{
            echo "Error:" .$conn->error;
        }
    }

}




    $chechEmail = "SELECT * FROM appointment where email ='$email' ";
    $result = $conn->query($chechEmail);

    if($result->num_rows>0){
        echo "Email ";
    }
    else{
        $insertQuery = "INSERT INTO  appointment(name, address,email, number, location) VALUES ('$name','$address', '$email', '$phone', '$location') ";

        if($conn->query($insertQuery) == TRUE){
            header("Location: appoitment.php");
        }
        else{
            echo "Error:" .$conn->error;
        }
    }

}

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $sql = "SELECT * FROM appointment WHERE email =$email";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email']= $row['email'];
        header("Location: appointment.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email";
    }
}
?>