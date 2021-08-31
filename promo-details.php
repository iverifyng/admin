<?php
$page = "Promo";
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
$id = $_GET['id'];
?>

    <div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Promo Entry Details</h1>

            <?php
            $id = $_GET['id'];
                $select_query = "SELECT * FROM promo WHERE id ='$id'";
                $result = mysqli_query($conn, $select_query);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $userFullName = $row['userFullName'];
                $userID = $row['userID'];
                $reason = $row['reason'];
                $dateSent = $row['dateSent'];
                $date = strtotime($dateSent);
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mt-3">
                            <div class="text-center mb-4">
                                <div class="mb-3">
                                    <img alt="Chris Wood" src="./img/svg/promo-code.svg" class="img-responsive mt-2" width="148" height="148">
                                </div>
                                <h4 class="mb-n3">User ID</h4>
                                <br /><strong><img src="./img/barcode.png">&nbsp; <?php echo $userID; ?></strong>
                            </div>
                            <div class="col-6 mx-auto">
                            <div class="card-body h-100">

                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                Sender's Name<br />
                                                <strong>
                                                    <?php echo $userFullName;?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 text-right">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 text-end">
                                                Entry Date<br />
                                                <strong>
                                                <?php echo date('j F Y', $date); ?> - <?php echo date('g:ia', $date); ?>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                Reason<br />
                                                <strong><p><?php echo $reason; ?></p></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <div class="text-center mt-5">
                                    <a href="promo" class="btn btn-square btn-danger btn-lg"><i class="fas fa-times-circle"></i> Go back</a>
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