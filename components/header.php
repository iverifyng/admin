<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=description content="iVerify provides verification and screening solutions to the corporate and private sectors through a unified, standardized, ethical data verification and referencing model.">
    <meta name=author content="ThankGod Okoro">
    <meta property="og:url" content="https://www.iverify.ng"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="iVerify&trade; :: Verification, Due Diligence, Certificarte Verification, Fraud Detection"/>
    <meta name="og:description" content="iVerify provides verification and screening solutions to the corporate and private sectors through a unified, standardized, ethical data verification and referencing model.">
    <meta name="keywords" content="Verification,iVerify.ng,Verify me,iVerify,Identity Verification,Due Diligence,Certificate Verification,Property Verification,Tenant Verification,Employee Verification,Domestic Staff Verification,Company Verification,Family Research,Document Verification,Verification in Nigeria,Identity Verification Companies,Identity Verification Companies in Nigeria">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/muLDDf6.png"/>
    <title>Admin Login :: iVerify&trade;</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link class="js-stylesheet" href="css/light.css" rel="stylesheet">

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
<div class="wrapper">