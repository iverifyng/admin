<?php
$page = "Staff";
include "./config/onboard.php";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/onboard-query.php";
?>

    <div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
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
        <div class="container-fluid p-0">
            <button data-bs-toggle="modal" data-bs-target="#addAgentModal" class="btn btn-dark float-end mt-n1"><i class="fas fa-plus"></i> Add New Agent</button>

            <h1 class="h3 mb-3">Agents</h1>

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
                                    <th>Full Name</th>
                                    <th>Agent ID</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $agents_id = 1;
                                $select_query = "SELECT * FROM agents ";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $firstname = $row['firstname'];
                                        $lastname = $row['lastname'];
                                        $agentid = $row['agentid'];
                                        $email = $row['email'];
                                        $accountType     = $row['accountType'];
                                        $wallet = $row['wallet'];
                                        $status = $row['status'];
                                        switch ($status) {
                                            case "Inactive";
                                                $class  = 'bg-danger';
                                                break;
                                            case "Active";
                                                $class  = 'bg-success';
                                                break;
                                            default:
                                                $class  = '';
                                        }

                                        echo "<tr>";
                                        echo "<td>" .$agents_id. "</td>";
                                        echo "<td>" .$firstname." ".$lastname. "</td>";
                                        echo "<td>" .$agentid. "</td>";
                                        echo "<td>" .$email. "</td>";
                                        echo "<td>" ."<span class=\"badge $class\">$status</span>". "</td>";
                                        echo "<td class='text-end'>"
                                            ."<button class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></button>"." "
                                            ."<a href='useredit?id=$id' class=\"btn btn-secondary\"><i class=\"fas fa-pen\"></i></a>"." "
                                            ."<a href='delete?id=$id' class=\"delete_btn btn btn-danger\" name=\"delete\"><i class=\"fas fa-trash-alt\"></i></a>".
                                            "</td >";
                                        "</tr>";
                                        $agents_id++;
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

<?php 
include "./modals/modal.php";
include "./components/footer.php";
?>