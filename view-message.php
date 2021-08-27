<?php
$page = 'Messages';
include "./config/db.php";
include "./components/header.php";
include "./components/sidebar.php";
require_once "./auth/query.php";
?>
<div class="main">
    <?php include "./components/navbar.php"; ?>

            <main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">The Message</h1>
                    <?php
                        $id = $_GET['id'];
                        $select_query = "SELECT * FROM contact WHERE id ='$id'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $fullName = $row['fullName'];
                        $email = $row['email'];
                        $phoneNum = $row['phoneNum'];
                        $comment = $row['comment'];
                        $status = $row['status'];
                        $date = $row['date'];
                        $datePosted = strtotime($date);
                     ?>

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
								<div class="card-body m-sm-3 m-md-5">
									<div class="mb-4">
										Message Date:
										<br /> <strong><?php echo date('j F Y', $datePosted); ?> - <?php echo date('g:ia', $datePosted); ?></strong>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="text-muted">Sender's Name.</div>
											<strong><?php echo $fullName; ?></strong>
										</div>
										<div class="col-md-4 text-md-right">
											<div class="text-muted">Sender's Email</div>
											<strong><?php echo $email; ?></strong>
										</div>
                                        <div class="col-md-4 text-md-right">
											<div class="text-muted">Sender's Phone Number</div>
											<strong><?php echo $phoneNum; ?></strong>
										</div>
									</div>

									<hr class="my-4" />

									<div class="row mb-4">
										<div class="col-md-12">
											<div class="text-muted">Comment/Message</div>
                                            <p><strong><?php echo $comment; ?></strong></p>
										</div>
									</div>

									<div class="text-center">
										<p class="text-sm">
											<strong>Note:</strong> Using the close button below will change message status to <strong>"READ"</strong>.
										</p>

										<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                        <input type="hidden" class="form-control form-control-lg" name="id" value="<?php echo $id; ?>">
                                            <button type="submit" name="close_message_btn" class="btn btn-dark">
                                                Close Message
                                            </button>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
                <?php }
                }
                    ?>
				</div>
			</main>

<?php
include "./components/footer.php";
?>