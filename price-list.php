<?php
$page = 'Pricelist';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";

$id = $_GET['id'];
$select_query = "SELECT * FROM pricelist";
$result = mysqli_query($conn, $select_query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $corporateEmployee = $row['corporateEmployee'];
        $domesticEmployee = $row['domesticEmployee'];
        $tenantVerification = $row['tenantVerification'];
        $propertyVerification = $row['propertyVerification'];
        $employeeLite = $row['employeeLite'];
        $companyVerification = $row['companyVerification'];
        $certificateVerification = $row['certificateVerification'];
        $creditCheck = $row['creditCheck'];
        $guarantorVerification = $row['guarantorVerification'];
    }
}

require_once "./auth/price.php";
?>

    <div class="main">
    <?php include "./components/navbar.php"; ?>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Verification Price List</h1>

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

                <div class="row">
                    <div class="col-md-5 col-xl-4">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Price Settings</h5>
                            </div>

                            <div class="list-group list-group-flush" role="tablist">
                                <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="price-list#corporateEmployee" role="tab">
                                    Corporate Employee
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#domesticEmployee" role="tab">
                                    Domestic Employee
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#tenantVerification" role="tab">
                                    Tenant Verification
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#propertyVerification" role="tab">
                                    Property Verification
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#employeeLite" role="tab">
                                    Employee Lite
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#companyVerification" role="tab">
                                    Company Verification
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#certificateVerification" role="tab">
                                    Certificate Verification
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#creditCheck" role="tab">
                                    Credit Check
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="price-list#guarantorVerification" role="tab">
                                    Guarantor Verification
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-xl-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="corporateEmployee" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Corporate Employee</h5>
                                    </div>

                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Corporate Employee Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="corporateEmployee" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $corporateEmployee; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="corporate_employee_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="domesticEmployee" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Domestic Employee</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Domestic Employee Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="domesticEmployee" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $domesticEmployee; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="domestic_employee_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tenantVerification" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tenant</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Tenant Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="tenantVerification" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $tenantVerification; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="tenant_verification_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="propertyVerification" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Property</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Property Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="propertyVerification" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $propertyVerification; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="property_verification_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="employeeLite" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Employee Lite</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Employee Lite Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="employeeLite" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $employeeLite; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="employee_lite_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="companyVerification" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Company</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Company Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="companyVerification" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $companyVerification; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="company_verification_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="certificateVerification" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Certificate</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Certificate Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="certificateVerification" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $certificateVerification; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="certificate_verification_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="creditCheck" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Credit Check</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Credit Score Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="creditCheck" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $creditCheck; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="credit_check_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="guarantorVerification" role="tabpanel">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Guarantor</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-4" style="display: none">
                                                        <input class="form-control form-control-lg pt-2 pb-2" name="id" type="text" value="<?php echo $id; ?>" readonly>
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control form-control-lg pt-2 pb-2" type="text" value="Guarantor Verification" readonly>
                                                    </div>

                                                    <div class="input-group input-group-lg mb-3">
                                                        <span class="input-group-text">₦</span>
                                                        <input type="number" name="guarantorVerification" required class="form-control pt-2 pb-2" placeholder="Enter new price eg:(<?php echo $guarantorVerification; ?>)">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid">
                                                <button type="submit" name="guarantor_verification_btn" class="btn btn-lg btn-dark" onclick="this.classList.toggle('button--loading')"><span class="button__text">Save Changes</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>

<?php include "./components/footer.php"; ?>