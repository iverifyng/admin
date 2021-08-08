<?php
include "./config/db.php";
if (isset($_GET['delete'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
    header('location: users?m=1');
}
