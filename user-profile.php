<?php
$page = 'Users';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";

$id = $_GET['id'];
$select_query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $select_query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $phone = $row['phone'];
        $companyName = $row['companyName'];
        $badge = $row['badge'];
        $dateCreated = $row['dateCreated'];
        $securityKey = $row['securityKey'];
        $accountType = $row['accountType'];
        $companyAddress = $row['companyAddress'];
        $businessType = $row['businessType'];
        $companyRegNum = $row['companyRegNum'];
        $wallet = $row['wallet'];
        $verified = $row['verified'];
        $status = $row['status'];
        $date = strtotime($dateCreated);
        switch ($status) {
            case "Inactive";
                $Sclass  = 'danger';
                break;
            case "Active";
                $Sclass  = 'success';
                break;
            default:
                $Sclass  = '';
        }
        switch ($badge) {
            case "Expert";
                $class  = 'dark';
                break;
            case "Leader";
                $class  = 'warning';
                break;
            case "Veteran";
                $class  = 'info';
                break;
            default:
                $class  = '';
        }
    }
}
?>
    <div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <div class="row">
                <div class="col-auto d-none d-sm-block">
                    <h1 class="h3 mb-3">User Profile</h1>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="user-edit?id=<?php echo $id; ?>" class="btn btn-dark shadow-sm" onClick="refreshPage()">
                        <i class="align-middle" data-feather="edit"></i> Edit User
                    </a>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Details</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="img/svg/usericon.svg" alt="User Picture" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title"><?php echo $firstName; ?> <?php echo $lastName; ?> <?php echo $companyName; ?></h5>

                            <div>
                                <button class="btn btn-<?php echo $class; ?> btn-sm"><span data-feather="award"></span> <?php echo $badge; ?></button>
                            </div>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Account Type</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span data-feather="briefcase" class="feather me-1 text-dark"></span> <?php echo $accountType; ?>
                                </li>
                            </ul>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Security Key</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span data-feather="shield" class="feather me-1 text-dark"></span> <?php echo $securityKey; ?>
                                </li>
                            </ul>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Wallet Balance</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span data-feather="dollar-sign" class="feather me-1 text-dark"></span> <?php echo "₦".number_format($wallet, 2, '.', ','); ?>
                                </li>
                            </ul>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Account Creation Date</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span data-feather="calendar" class="feather me-1 text-dark"></span> <?php echo date('j F Y', $date); ?>
                                </li>
                                <li class="mb-1">
                                    <span data-feather="clock" class="feather me-1 text-dark"></span> <?php echo date('g:ia', $date); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="show">
                                    <button class="btn btn-<?php echo $Sclass; ?> btn-sm"><span data-feather="radio"></span> <?php echo $status; ?></button>
                                </div>
                            </div>

                            <h5 class="card-title mb-0">Full Details</h5>
                        </div>
                        <div class="card-body h-100">

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            First Name<br />
                                            <strong>
                                                <?php echo $firstName; if ($firstName == null) {
                                                    echo "Not Available";
                                                } ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Last Name<br />
                                            <strong>
                                                <?php echo $lastName; if ($lastName == null) {
                                                    echo "Not Available";
                                                } ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Email<br />
                                            <strong><?php echo $email; ?></strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Phone Number<br />
                                            <strong>
                                                <?php echo $phone; if ($phone == null) {
                                                    echo "Not Available";
                                                } ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Company Name<br />
                                            <strong>
                                                <?php echo $companyName; if ($companyName == null) {
                                                    echo "Not Available";
                                                } ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Company REG No.<br />
                                            <strong>
                                                <?php echo $companyRegNum; if ($companyRegNum == null) {
                                                    echo "Not Available";
                                                } ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Business Type<br />
                                            <strong>
                                                <?php echo $businessType; if ($businessType == null) {
                                                    echo "Not Available";
                                                } ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Company Address<br />
                                            <strong>
                                                <?php echo $companyAddress; if ($companyAddress == null) {
                                                    echo "Not Available";
                                                } ?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            Account Verification<br />
                                            <strong>
                                                <?php if ($verified == 0) {
                                                    echo "Account not Verified";
                                                } else {
                                                    echo "Account Verified";
                                                }?>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php include "./components/footer.php"; ?>