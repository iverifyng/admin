<?php
$page = 'Verification';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/delete.php";
?>
<div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Corporate Employee verification</h1>
 
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
                                    <th>Employee Name</th>
                                    <th>Reference</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $verification_id = 1;
                                $select_query = "SELECT * FROM corp_employee_search ";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $employee_firstName = $row['employee_firstName'];
                                        $employee_lastName = $row['employee_lastName'];
                                        $companyName    = $row['companyName'];
                                        $accountType     = $row['accountType'];
                                        $searchRef = $row['searchRef'];
                                        $status = $row['status'];
                                        switch ($status) {
                                            case "Pending";
                                                $class  = 'bg-danger';
                                                break;
                                            case "Processing";
                                                $class  = 'bg-warning';
                                                break;
                                            case "Completed";
                                                $class  = 'bg-success';
                                                break;
                                            default:
                                                $class  = '';
                                        }

                                        echo "<tr>";
                                        echo "<td>" .$verification_id. "</td>";
                                        echo "<td>" .$employee_firstName." ".$employee_lastName. "</td>";
                                        echo "<td>" .$searchRef. "</td>";
                                        echo "<td>" ."<span class=\"badge $class\">$status</span>". "</td>";
                                        echo "<td class='text-end'>"
                                            ."<a href='corporate-employee-details?id=$id' class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></a>"." "
                                            ."<a href='corporate-employee-edit?id=$id' class=\"btn btn-secondary\"><i class=\"fas fa-pen\"></i></a>"." "
                                            ."<button type='button' data-id=\"$id\" class=\"btn btn-danger\" onclick=\"confirmDelete(this);\"><i class=\"fas fa-trash-alt\"></i></button>".
                                            "</td >";
                                        "</tr>";
                                        $verification_id++;
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
include "./modals/modal.php";
include "./components/footer.php";
?>