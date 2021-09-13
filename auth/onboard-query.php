<?php
// Connect database
include "./config/onboard.php";

//Add Agent Query
if (isset($_POST['add_agent_btn'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $agentid = 'IVA' . rand(1000, 9999);
    $password = $conn->real_escape_string($_POST['password']);
    $picture = $conn->real_escape_string($_POST['picture']);

    $check_agent_query = "SELECT * FROM agents WHERE email='$email'";
    $result = mysqli_query($conn, $check_agent_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_status'] = "Agent Already Exist!";
    }

    // Finally, register agent if there are no errors in the form
    $password = sha1($password);//encrypt the password before saving in the database
    $query = "INSERT INTO agents (email, firstname, lastname, password, agentid, picture, status) 
  			        VALUES('$email', '$firstname', '$lastname', '$password', '$agentid', 'uploadmale/avatar.png', 'Active')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['success_status'] = "Weldone Chief! <b>Agent Added</b>";
    }
}