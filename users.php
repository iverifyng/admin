<?php
$page = 'Users';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
?>
<div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Users</h1>

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
                                    echo "<td>" .$id. "</td>";
                                    echo "<td>" .$firstName." ".$lastName." ".$companyName. "</td>";
                                    echo "<td>" ."<span class=\"badge $Aclass\">$accountType</span>". "</td>";
                                    echo "<td>" ."₦" .number_format($wallet, 2, '.', ','). "</td>";
                                    echo "<td>" ."<span class=\"badge $class\">$status</span>". "</td>";
                                    echo "<td class='text-end'>"
                                        ."<button class=\"btn btn-info\"><i class=\"fas fa-eye\"></i></button>"." "
                                        ."<a href='useredit?id=$id' class=\"btn btn-secondary\"><i class=\"fas fa-pen\"></i></a>"." "
                                        ."<a href='delete?id=$id' class=\"delete_btn btn btn-danger\" name=\"delete\"><i class=\"fas fa-trash-alt\"></i></a>".
                                        "</td >";
                                    "</tr>";
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

<?php include "./components/footer.php"; ?>