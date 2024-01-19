<?php

print_r($_POST);

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
// echo $email;
$con = new mysqli("localhost", "root", "", "webtech");
if ($con->connect_error){
    die("Failed to Connect : ".$con->connect_error);
}else{
    $stmt = $con->prepare("select * from students where firstname = ?");
    $stmt->bind_param("s", $firstname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['middlename'] === $middlename){
            echo "<h2>Login Successfully<h2>";
        }else {
            echo "<h2>Invalid Email or Password <h2>";
        }
    }else{
        echo "<h2>Invalid Email or Password <h2>";
    }
}
?>