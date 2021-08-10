<?php
// Connect database
include "./config/db.php";

$id = $_GET['id'];
//User Account Update
if (isset($_POST['user_update_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $companyName = $conn->real_escape_string($_POST['companyName']);
    $badge = $conn->real_escape_string($_POST['badge']);
    $accountType = $conn->real_escape_string($_POST['accountType']);
    $companyAddress = $conn->real_escape_string($_POST['companyAddress']);
    $businessType = $conn->real_escape_string($_POST['businessType']);
    $companyRegNum = $conn->real_escape_string($_POST['companyRegNum']);
    $status = $conn->real_escape_string($_POST['status']);

    $update_query = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email',
                 phone='$phone', companyName='$companyName', badge='$badge', accountType='$accountType',
                 companyAddress='$companyAddress', businessType='$businessType', companyRegNum='$companyRegNum', status='$status' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>User Account</strong> Updated.";
        echo "<meta http-equiv='refresh' content='2; URL=user-edit?id=$id'>";
    } else {
        $_SESSION['error_status'] = "Error updating record ".mysqli_error($conn);
        echo "<meta http-equiv='refresh' content='2; URL=user-edit?id=$id'>";
    }
}


//Approve Wallet Topup
if (isset($_POST['fund_wallet'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $userID = $conn->real_escape_string($_POST['userID']);
    $amount = $conn->real_escape_string($_POST['amount']);

    $check_user_query = "SELECT * FROM users WHERE id ='$id'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["wallet"] && $row["wallet"] >= $amount) {

                $walletNewAmount = floor($row["wallet"] + $amount);

                //update user wallet
                $fund_wallet_query = "UPDATE users SET wallet=$walletNewAmount WHERE id ='$id'";
                mysqli_query($conn, $fund_wallet_query);
                if (mysqli_affected_rows($conn) > 0) {

                    //update topup status
                    $status_update = "UPDATE wallet_topup SET paymentStatus='Successful' WHERE id='$id'";
                    mysqli_query($conn, $status_update);

                    $_SESSION['success_status'] = "Welldone Chief 👍 <strong>User Account</strong> Credited.";
                    echo "<meta http-equiv='refresh' content='2; URL=bank-topup'>";
                } else {
                    $_SESSION['error_status'] = "Error updating record " . mysqli_error($conn);
                    echo "<meta http-equiv='refresh' content='2; URL=bank-topup'>";
                }
            }
        }
    }
}
