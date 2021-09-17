<?php
$page = "Topup";
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
$id = $_GET['id'];
?>

    <div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Bank Topup Details</h1>

            <?php
            $id = $_GET['id'];
                $select_query = "SELECT * FROM wallet_topup WHERE id ='$id'";
                $result = mysqli_query($conn, $select_query);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $proof = $row['proof'];
                $sendersAccName = $row['sendersAccName'];
                $sendersBank = $row['sendersBank'];
                $amount = $row['amount'];
                $transRef = $row['transRef'];
                $paymentType = $row['paymentType'];
                $paymentStatus = $row['paymentStatus'];
                $dateDeposited = $row['dateDeposited'];
                $date = strtotime($dateDeposited);
                switch ($paymentStatus) {
                    case "Failed";
                        $class  = 'bg-danger';
                        break;
                    case "Successful";
                        $class  = 'bg-success';
                        break;
                    case "Pending";
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
                                <h4 class="mb-n3">Transaction Reference.</h4>
                                <br /><strong><img src="./img/barcode.png">&nbsp; <?php echo $transRef; ?></strong>
                            </div>
                            <div class="col-6 mx-auto">
                            <div class="card-body h-100">

                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                Sender's Account Name<br />
                                                <strong>
                                                    <?php echo $sendersAccName; if ($sendersAccName == null) {
                                                        echo "Not Available";
                                                    } ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 text-right">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-end">
                                                Sender's Bank Name<br />
                                                <strong>
                                                    <?php echo $sendersBank; if ($sendersBank == null) {
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
                                                Paid Amount<br />
                                                <strong>₦<?php echo number_format($amount, 2, '.', ','); ?></strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-end">
                                                Mode of Payment<br />
                                                <strong>
                                                    <?php echo $paymentType; if ($paymentType == null) {
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
                                                Payment Status<br />
                                                <strong>
                                                    <?php echo "<span class=\"badge $class\">$paymentStatus</span>" ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-end">
                                                Transaction Date<br />
                                                <strong>
                                                <?php echo date('j F Y', $date); ?> - <?php echo date('g:ia', $date); ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-center mx-auto mt-5" style="width: 300px;height:100%;">
                                    <embed id="myImg" class="inner-img" src="<?php echo 'https://iverify.ng'.$newProof = substr($proof, 2); ?>" style="width:100%;"/>
                                    
                                </div>
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close" data-bs-dismiss="modal">&times;</span>
                                    <img class="modal-content" id="img01">
                                </div>

                                <div class="text-center mt-5">
                                <a href="<?php echo 'https://iverify.ng'.$newProof = substr($proof, 2); ?>" target="_blank" class="btn btn-square btn-info btn-lg"><i class="fas fa-download"></i> View payment proof</a>
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

<?php 
include "./modals/modal.php";
include "./components/footer.php"; ?>