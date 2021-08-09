<?php
$page = "Topup";
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";

?>

    <div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Bank Transfer</h1>

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
                                    <th>Account Name</th>
                                    <th>Amount</th>
                                    <th>Trans Ref.</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $topup_id = 1;
                                $select_query = "SELECT * FROM wallet_topup WHERE paymentType='Bank Transfer'";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $firstname = $row['firstname'];
                                        $lastname = $row['lastname'];
                                        $agentid = $row['agentid'];
                                        $transRef = $row['transRef'];
                                        $amount = $row['amount'];
                                        $sendersAccName = $row['sendersAccName'];
                                        $paymentStatus = $row['paymentStatus'];
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

                                        echo "<tr>";
                                        echo "<td>" .$topup_id. "</td>";
                                        echo "<td>" .$sendersAccName. "</td>";
                                        echo "<td>" ."₦".number_format($amount, 2, '.', ','). "</td>";
                                        echo "<td>" .$transRef. "</td>";
                                        echo "<td>" ."<span class=\"badge $class\">$paymentStatus</span>". "</td>";
                                        echo "<td class='text-end'>"
                                            ."<button class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></button>"." "
                                            ."<a href='useredit?id=$id' class=\"btn btn-secondary\"><i class=\"fas fa-pen\"></i></a>"." "
                                            ."<a href='delete?id=$id' class=\"delete_btn btn btn-danger\" name=\"delete\"><i class=\"fas fa-trash-alt\"></i></a>".
                                            "</td >";
                                        "</tr>";
                                        $topup_id++;
                                    }
                                }else {
                                    echo "<td><p>No Agent Yet!</p></td>";
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


<?php include "./components/footer.php"; ?>