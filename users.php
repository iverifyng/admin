<?php
$page = 'Users';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/delete.php";
?>
<div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Users</h1>

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
                                    <th>Personal/Company Name</th>
                                    <th>Account Type</th>
                                    <th>Wallet Balance</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $user_id = 1;
                                $select_query = "SELECT * FROM users ";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $firstName = $row['firstName'];
                                        $lastName = $row['lastName'];
                                        $companyName    = $row['companyName'];
                                        $accountType     = $row['accountType'];
                                        $wallet = $row['wallet'];
                                        switch ($accountType) {
                                            case "Personal";
                                                $Aclass  = 'bg-primary';
                                                break;
                                            case "Corporate";
                                                $Aclass  = 'bg-info';
                                                break;
                                            default:
                                                $Aclass  = '';
                                        }
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
                                        echo "<td>" .$user_id. "</td>";
                                        echo "<td>" .$firstName." ".$lastName." ".$companyName. "</td>";
                                        echo "<td>" ."<span class=\"badge $Aclass\">$accountType</span>". "</td>";
                                        echo "<td>" ."₦" .number_format($wallet, 2, '.', ','). "</td>";
                                        echo "<td>" ."<span class=\"badge $class\">$status</span>". "</td>";
                                        echo "<td class='text-end'>"
                                            ."<a href='user-profile?id=$id' class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>"." "
                                            ."<a href='useredit?id=$id' class=\"btn btn-secondary\"><i class=\"fas fa-pen\"></i></a>"." "
                                            ."<button type='button' data-id=\"$id\" class=\"btn btn-danger\" onclick=\"confirmDelete(this);\"><i class=\"fas fa-trash-alt\"></i></button>".
                                            "</td >";
                                        "</tr>";
                                        $user_id++;
                                    }
                                }else {
                                    echo "<td><p>No Report Yet!</p></td>";
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
include "./modals/delete-modal.php";
include "./components/footer.php";
?>