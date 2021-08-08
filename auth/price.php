<?php
//Add Database
include "./config/db.php";

//Corporate Employee Update
if (isset($_POST['corporate_employee_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $corporateEmployee = $conn->real_escape_string($_POST['corporateEmployee']);

    $update_query = "UPDATE pricelist SET corporateEmployee='$corporateEmployee' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Corporate Employee</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Domestic Employee Update
if (isset($_POST['domestic_employee_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $domesticEmployee = $conn->real_escape_string($_POST['domesticEmployee']);

    $update_query = "UPDATE pricelist SET domesticEmployee='$domesticEmployee' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Domestic Employee</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Tenant Verification Update
if (isset($_POST['tenant_verification_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $tenantVerification = $conn->real_escape_string($_POST['tenantVerification']);

    $update_query = "UPDATE pricelist SET tenantVerification='$tenantVerification' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Tenant Verification</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Property Verification Update
if (isset($_POST['property_verification_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $propertyVerification = $conn->real_escape_string($_POST['propertyVerification']);

    $update_query = "UPDATE pricelist SET propertyVerification='$propertyVerification' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Property Verification</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Employee Lite Verification Update
if (isset($_POST['employee_lite_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $employeeLite = $conn->real_escape_string($_POST['employeeLite']);

    $update_query = "UPDATE pricelist SET employeeLite='$employeeLite' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Employee Lite</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Company Verification Update
if (isset($_POST['company_verification_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $companyVerification = $conn->real_escape_string($_POST['companyVerification']);

    $update_query = "UPDATE pricelist SET companyVerification='$companyVerification' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Company Verification</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Certificate Verification Update
if (isset($_POST['certificate_verification_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $certificateVerification = $conn->real_escape_string($_POST['certificateVerification']);

    $update_query = "UPDATE pricelist SET certificateVerification='$certificateVerification' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Certificate Verification</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Credit Check Verification Update
if (isset($_POST['credit_check_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $creditCheck = $conn->real_escape_string($_POST['creditCheck']);

    $update_query = "UPDATE pricelist SET creditCheck='$creditCheck' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Credit Score Verification</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}

//Gurantor Verification Update
if (isset($_POST['guarantor_verification_btn'])) {

    $id = $conn->real_escape_string($_POST['id']);
    $guarantorVerification = $conn->real_escape_string($_POST['guarantorVerification']);

    $update_query = "UPDATE pricelist SET guarantorVerification='$guarantorVerification' WHERE id='$id'";
    mysqli_query($conn, $update_query);
    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_status'] = "Welldone Chief 👍 <strong>Guarantor Verification</strong> Price Updated.";
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    } else {
        $_SESSION['error_status']    = "Error updating record ".mysqli_error($conn);
        echo '<meta http-equiv="refresh" content="4; URL=price-list">';
    }
}