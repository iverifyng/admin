<?php
$page = 'Users';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";

$id = $_GET['id'];
$select_query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $select_query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $companyName = $row['companyName'];
        $badge = $row['badge'];
        $dateCreated = $row['dateCreated'];
        $companyVerification = $row['companyVerification'];
        $certificateVerification = $row['certificateVerification'];
        $creditCheck = $row['creditCheck'];
        $guarantorVerification = $row['guarantorVerification'];
    }
}
?>
    <div class="main">
    <?php include "./components/navbar.php"; ?>

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Profile</h1>

            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Details</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="img/avatars/avatar-4.jpg" alt="Stacie Hall" class="img-fluid rounded-circle mb-2" width="128" height="128" />
                            <h5 class="card-title"><?php echo $firstName; ?> <?php echo $lastName; ?> <?php echo $companyName; ?></h5>

                            <div>
                                <a class="btn btn-info btn-sm" href="pages-profile.html#"><span data-feather="award"></span> <?php echo $badge; ?></a>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Account Creation Date</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="calendar" class="feather-sm me-1 text-dark"></span> <?php echo date( 'Y-m-d H:i:s', $dateCreated ); ?> </li>
                            </ul>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">Security Key</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span class="fas fa-globe fa-fw me-1"></span> <a href="pages-profile.html#">staciehall.co</a></li>
                                <li class="mb-1"><span class="fab fa-twitter fa-fw me-1"></span> <a href="pages-profile.html#">Twitter</a></li>
                                <li class="mb-1"><span class="fab fa-facebook fa-fw me-1"></span> <a href="pages-profile.html#">Facebook</a></li>
                                <li class="mb-1"><span class="fab fa-instagram fa-fw me-1"></span> <a href="pages-profile.html#">Instagram</a></li>
                                <li class="mb-1"><span class="fab fa-linkedin fa-fw me-1"></span> <a href="pages-profile.html#">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="dropdown show">
                                    <a href="pages-profile.html#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-horizontal"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="pages-profile.html#">Action</a>
                                        <a class="dropdown-item" href="pages-profile.html#">Another action</a>
                                        <a class="dropdown-item" href="pages-profile.html#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Activities</h5>
                        </div>
                        <div class="card-body h-100">

                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Ashley Briggs">
                                <div class="flex-grow-1">
                                    <small class="float-end">5m ago</small>
                                    <strong>Ashley Briggs</strong> started following <strong>Stacie Hall</strong><br />
                                    <small class="text-muted">Today 7:51 pm</small><br />

                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Chris Wood">
                                <div class="flex-grow-1">
                                    <small class="float-end">30m ago</small>
                                    <strong>Chris Wood</strong> posted something on <strong>Stacie Hall</strong>'s timeline<br />
                                    <small class="text-muted">Today 7:21 pm</small>

                                    <div class="border text-sm text-muted p-2 mt-1">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                                    </div>

                                    <a href="pages-profile.html#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Stacie Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end">1h ago</small>
                                    <strong>Stacie Hall</strong> posted a new blog<br />

                                    <small class="text-muted">Today 6:35 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="Carl Jenkins">
                                <div class="flex-grow-1">
                                    <small class="float-end">3h ago</small>
                                    <strong>Carl Jenkins</strong> posted two photos on <strong>Stacie Hall</strong>'s timeline<br />
                                    <small class="text-muted">Today 5:12 pm</small>

                                    <div class="row g-0 mt-1">
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="img/photos/unsplash-1.jpg" class="img-fluid pe-2" alt="Unsplash">
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="img/photos/unsplash-2.jpg" class="img-fluid pe-2" alt="Unsplash">
                                        </div>
                                    </div>

                                    <a href="pages-profile.html#" class="btn btn-sm btn-danger mt-1"><i class="feather-sm" data-feather="heart"></i> Like</a>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="Carl Jenkins">
                                <div class="flex-grow-1">
                                    <small class="float-end">1d ago</small>
                                    <strong>Carl Jenkins</strong> started following <strong>Stacie Hall</strong><br />
                                    <small class="text-muted">Yesterday 3:12 pm</small>

                                    <div class="d-flex align-items-start mt-1">
                                        <a class="pe-3" href="pages-profile.html#">
                                            <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Stacie Hall">
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="border text-sm text-muted p-2 mt-1">
                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Stacie Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end">1d ago</small>
                                    <strong>Stacie Hall</strong> posted a new blog<br />
                                    <small class="text-muted">Yesterday 2:43 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-flex align-items-start">
                                <img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Chris Wood">
                                <div class="flex-grow-1">
                                    <small class="float-end">1d ago</small>
                                    <strong>Chris Wood</strong> started following <strong>Stacie Hall</strong><br />
                                    <small class="text-muted">Yesterdag 1:51 pm</small>
                                </div>
                            </div>

                            <hr />
                            <div class="d-grid">
                                <a href="pages-profile.html#" class="btn btn-primary">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

<?php include "./components/footer.php"; ?>