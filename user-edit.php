<?php
$page = 'Users';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/query.php";

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
        $wallet = $row['wallet'];
        $verified = $row['verified'];
        $companyRegNum = $row['companyRegNum'];
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
                <?php
                if (isset($_SESSION['error_status'])) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <div class="alert-message text-center lead">
                            <?php echo $_SESSION['error_status']; ?>
                        </div>
                    </div>
                    <?php
                    unset($_SESSION['error_status']);
                }
                ?>
                <?php
                if (isset($_SESSION['success_status'])) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        <div class="alert-message text-center lead">
                            <?php echo $_SESSION['success_status']; ?>
                        </div>
                    </div>
                    <?php
                    unset($_SESSION['success_status']);
                }
                ?>
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
                                    <span data-feather="briefcase" class="feather me-1 text-warning"></span> <?php echo $accountType; ?>
                                </li>
                            </ul>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Security Key</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span data-feather="key" class="feather me-1 text-warning"></span> <?php echo $securityKey; ?>
                                </li>
                            </ul>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Wallet Balance</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span data-feather="dollar-sign" class="feather me-1 text-warning"></span> <?php echo "₦".number_format($wallet, 2, '.', ','); ?>
                                </li>
                            </ul>
                        </div>

                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Account Creation Date</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span data-feather="calendar" class="feather me-1 text-warning"></span> <?php echo date('j F Y', $date); ?>
                                </li>
                                <li class="mb-1">
                                    <span data-feather="clock" class="feather me-1 text-warning"></span> <?php echo date('g:ia', $date); ?>
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

                            <div class="card-body mt-n3">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <div class="row">
                                        <div class="mb-3 col-md-6" style="display: none;">
                                            <label class="form-label" for="id">ID</label>
                                            <input type="text" class="form-control form-control-lg" name="id" value="<?php echo $id; ?>" readonly>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="firstName">First Name</label>
                                            <input type="text" class="form-control form-control-lg" name="firstName" value="<?php echo $firstName; ?>">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="lastName">Last Name</label>
                                            <input type="text" class="form-control form-control-lg" name="lastName" value="<?php echo $lastName; ?>">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control form-control-lg" name="email" value="<?php echo $email; ?>">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phone">Phone No.</label>
                                            <input type="tel" class="form-control form-control-lg" name="phone" value="<?php echo $phone; ?>">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="companyName">Company Name</label>
                                            <input type="text" class="form-control form-control-lg" name="companyName" value="<?php echo $companyName; ?>">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="companyRegNum">Company REG No.</label>
                                            <input type="text" class="form-control form-control-lg" name="companyRegNum" value="<?php echo $companyRegNum; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="companyAddress">Company Address</label>
                                        <textarea class="form-control" rows="2" name="companyAddress"><?php echo $companyAddress; ?></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="businessType">Business Type</label>
                                            <input type="text" class="form-control form-control-lg" name="businessType" value="<?php echo $businessType; ?>">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Account Type</label>
                                            <select class="form-select form-select-lg" name="accountType">
                                                <option selected value="<? echo $accountType ?>">Select Account Type</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Corporate">Corporate</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Badge</label>
                                            <select class="form-select form-select-lg" name="badge">
                                                <option selected value="<? echo $badge ?>">Select Badge</option>
                                                <option value="Expert">Expert</option>
                                                <option value="Leader">Leader</option>
                                                <option value="Veteran">Veteran</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Status</label>
                                            <select class="form-select form-select-lg" name="status">
                                                <option selected value="<? echo $status ?>">Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <button type="submit" name="user_update_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Update User Info</span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php include "./components/footer.php"; ?>