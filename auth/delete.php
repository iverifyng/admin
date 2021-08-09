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
        echo '<meta http-equiv="refresh" content="4; URL=users">';
    } else {
        $_SESSION['error_status']    = "Please <strong>Delete</strong> other records linked to this user.";
        echo '<meta http-equiv="refresh" content="4; URL=users">';
    }
}
?>