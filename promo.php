<?php
$page = 'Promo';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/delete.php";
?>

<div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Promotion Entries</h1>

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table id="users-table" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>User/Company Name</th>
                                    <th>Reason</th>
                                    <th>Date</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $user_id = 1;
                                $select_query = "SELECT * FROM promo ";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $userID = $row['userID'];
                                        $userFullName = $row['userFullName'];
                                        $reason = $row['reason'];
                                        $dateSent = $row['dateSent'];
                                        $reasonlength=35;
                                        $date = strtotime($dateSent);

                                         $reason = substr($reason, 0, $reasonlength);

                                        echo "<tr>";
                                        echo "<td>" .$user_id. "</td>";
                                        echo "<td>" .$userFullName. "</td>";
                                        echo "<td>" .$reason."" ."...". "</td>";
                                        echo "<td>" .date('j F Y', $date). "</td>";
                                        echo "<td class='text-end'>"
                                        
                                            ."<a href='promo-details?id=$id' class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>"." "
                                            ."<button type='button' data-id=\"$id\" class=\"btn btn-danger\" onclick=\"confirmPromoDelete(this);\"><i class=\"fas fa-trash-alt\"></i></button>".
                                            "</td >";
                                        "</tr>";
                                        $user_id++;
                                    }
                                }else {
                                    echo "<td><p>No Entry Yet!</p></td>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


<?php
include "./modals/modal.php";
include "./components/footer.php";
?>