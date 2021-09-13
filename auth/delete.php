<?php
//Connect Database
include "./config/db.php";

$id = $_GET['id'];

//Delete User Query
if (isset($_POST['delete_user'])) {

    $id = $conn->real_escape_string($_POST['id']);

    $delete_query = "DELETE FROM users WHERE id='$id'";
    mysqli_query($conn, $delete_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>User deleted!</strong>";
        echo '<meta http-equiv="refresh" content="2; URL=users">';
    } else {
        $_SESSION['error_status'] = "Please <strong>Delete</strong> other records linked to this user.";
        echo '<meta http-equiv="refresh" content="2; URL=users">';
    }
}


//Message User Query
if (isset($_POST['delete_msg'])) {

    $id = $conn->real_escape_string($_POST['id']);

    $delete_query = "DELETE FROM contact WHERE id='$id'";
    mysqli_query($conn, $delete_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Message deleted!</strong>";
        echo '<meta http-equiv="refresh" content="2; URL=messages">';
    } else {
        $_SESSION['error_status'] = "Please <strong>Delete</strong> other records linked to this message.";
        echo '<meta http-equiv="refresh" content="2; URL=messages">';
    }
}


//Bank Topup Query
if (isset($_POST['delete_bank_topup'])) {

    $id = $conn->real_escape_string($_POST['id']);

    $delete_query = "DELETE FROM wallet_topup WHERE id='$id'";
    mysqli_query($conn, $delete_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>topup record deleted!</strong>";
        echo '<meta http-equiv="refresh" content="2; URL=bank-topup">';
    } else {
        $_SESSION['error_status'] = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="2; URL=bank-topup">';
    }
}


//Promo Query
if (isset($_POST['delete_promo'])) {

    $id = $conn->real_escape_string($_POST['id']);

    $delete_query = "DELETE FROM promo WHERE id='$id'";
    mysqli_query($conn, $delete_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>record deleted!</strong>";
        echo '<meta http-equiv="refresh" content="2; URL=promo">';
    } else {
        $_SESSION['error_status'] = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="2; URL=promo">';
    }
}