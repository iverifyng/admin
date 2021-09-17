<?php
$page = 'Verification';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/query.php";
?>

<div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Employee's Details</h1>

            <?php
            $id = $_GET['id'];
                $select_query = "SELECT * FROM corp_employee_search WHERE id ='$id'";
                $result = mysqli_query($conn, $select_query);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $employee_firstName = $row['employee_firstName'];
                $employee_lastName = $row['employee_lastName'];
                $meansOfID = $row['meansOfID'];
                $curriculumVitae = $row['curriculumVitae'];
                $searchRef = $row['searchRef'];
                $status = $row['status'];
                $requestedDate = $row['requestedDate'];
                $date = strtotime($requestedDate);
                switch ($status) {
                    case "Pending";
                        $class  = 'bg-danger';
                        break;
                    case "Completed";
                        $class  = 'bg-success';
                        break;
                    case "Processing";
                        $class  = 'bg-warning';
                        break;
                    default:
                        $class  = '';
                }
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mt-3">
                            <div class="text-center mb-4">
                                <div class="mb-3">
                                    <img alt="Chris Wood" src="./img/svg/bill.svg" class="img-responsive mt-2" width="128" height="128">
                                </div>
                                <h4 class="mb-n3">Search Reference.</h4>
                                <br /><strong><img src="./img/barcode.png">&nbsp; <?php echo $searchRef; ?></strong>
                            </div>
                            <div class="col-6 mx-auto">
                            <div class="card-body h-100">

                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                Employee's First Name<br />
                                                <strong>
                                                    <?php echo $employee_firstName; if ($employee_firstName == null) {
                                                        echo "Not Available";
                                                    } ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 text-right">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-end">
                                                Employee's Last Name<br />
                                                <strong>
                                                    <?php echo $employee_lastName; if ($employee_lastName == null) {
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
                                                Verification Status<br />
                                                <strong>
                                                    <?php echo "<span class=\"badge $class\">$status</span>" ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-end">
                                                Submission Date<br />
                                                <strong>
                                                <?php echo date('j F Y', $date); ?> - <?php echo date('g:ia', $date); ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row text-center mx-auto mt-5" style="width: 300px;height:300px;">
                                    <div class="col-md-6 col-lg-6">
                                        <embed id="myImg" class="inner-img" src="<?php echo 'https://iverify.ng'.$meansOfID = substr($meansOfID, 2); ?>" style="width:100%;"/>
                                        <a href="<?php echo 'https://iverify.ng'.$meansOfID = substr($meansOfID, 2); ?>" target="_blank" class="btn btn-square btn-info btn-lg"><i class="fas fa-download"></i> View means of ID</a>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <embed id="myImg" class="inner-img" src="<?php echo 'https://iverify.ng'.$curriculumVitae = substr($curriculumVitae, 2); ?>" style="width:100%;"/>
                                        <a href="<?php echo 'https://iverify.ng'.$curriculumVitae = substr($curriculumVitae, 2); ?>" target="_blank" class="btn btn-square btn-info btn-lg"><i class="fas fa-download"></i> View CV</a>
                                    </div>
                                </div>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close" data-bs-dismiss="modal">&times;</span>
                                    <img class="modal-content" id="img01">
                                </div>

                                <div class="text-center mt-5">
                                    <?php 
                                        if ($paymentStatus == "Successful") {
                                                echo "<button class='btn btn-lg btn-square btn-secondary'><i class='fas fa-check-circle'></i> Approved</button>"." ";
                                            }else {
                                                echo "<button type='button' data-id=\"$id\" info-id='$amount' class=\"btn btn-lg btn-square btn-success\" onclick=\"confirmPayment(this);\"><i class=\"fas fa-check\"></i></i> Approve</button>"." ";
                                            }
                                     ?>
                                    <button class="btn btn-square btn-danger btn-lg" onclick="goBack()"><i class="fas fa-times-circle"></i> Go back</button>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            }
                }
             ?>
        </div>
    </main>


<?php include "./components/footer.php" ?>