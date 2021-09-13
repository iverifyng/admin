<!-- User Delete Modal Start-->
<div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-0">
                    <img src="./img/svg/caution.svg" width="200px">
                </div>
                <h4 class="text-center">Are you sure you want to delete this user?</h4>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-user">
                    <input type="hidden" name="id">
                </form>
            </div>
            <div class="modal-footer justify-content-center mt-n3 mb-4">
                <button type="button" class="btn btn-lg btn-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="form-delete-user" name="delete_user" class="btn btn-lg btn-danger">Confirm Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- User Delete Modal End-->

<!-- Message Delete Modal Start-->
<div class="modal fade" id="messageDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-0">
                    <img src="./img/svg/caution.svg" width="200px">
                </div>
                <h4 class="text-center">Are you sure you want to delete this message?</h4>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-delete-msg">
                    <input type="hidden" name="id">
                </form>
            </div>
            <div class="modal-footer justify-content-center mt-n3 mb-4">
                <button type="button" class="btn btn-lg btn-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="form-delete-msg" name="delete_msg" class="btn btn-lg btn-danger">Confirm Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Message Delete Modal End-->

<!-- Payment Approval Modal Start-->
<div class="modal fade" id="paymentApprovalModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-0 mb-n4">
                    <img src="./img/svg/caution.svg" width="200px">
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-payment-approval">
                        <div class="row">
                            <div class="mb-3 col-md-6" style="display: none;">
                                <label class="form-label" for="id">ID</label>
                                <input type="text" class="form-control form-control-lg" name="id">
                            </div>

                            <label class="form-label lead text-center">
                                <strong>Confirm Transfer Amount</strong>
                            </label>
                            <div class="input-group pl-3 mx-auto text-center" style="padding-left: 110px; padding-right: 110px;">
                                <span class="input-group-text">₦</span>
                                <input name="amount" class="form-control form-control-lg" type="number">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-center mt-n4 mb-4">
                <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="form-payment-approval" name="fund_wallet" class="btn btn-lg btn-success">Approve Payment</button>
            </div>
        </div>
    </div>
</div>
<!-- Payment Approval Modal End-->

<!-- User Delete Modal Start-->
<div class="modal fade" id="bankTopupDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-0">
                    <img src="./img/svg/caution.svg" width="200px">
                </div>
                <h4 class="text-center">Are you sure you want to delete this record?</h4>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-topup-delete">
                    <input type="hidden" name="id">
                </form>
            </div>
            <div class="modal-footer justify-content-center mt-n3 mb-4">
                <button type="button" class="btn btn-lg btn-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="form-topup-delete" name="delete_bank_topup" class="btn btn-lg btn-danger">Confirm Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- User Delete Modal End-->

<!-- Promo Delete Modal Start-->
<div class="modal fade" id="promoDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-0">
                    <img src="./img/svg/caution.svg" width="200px">
                </div>
                <h4 class="text-center">Are you sure you want to delete this entry record?</h4>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="form-promo-delete">
                    <input type="hidden" name="id">
                </form>
            </div>
            <div class="modal-footer justify-content-center mt-n3 mb-4">
                <button type="button" class="btn btn-lg btn-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="form-promo-delete" name="delete_promo" class="btn btn-lg btn-danger">Confirm Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Promo Delete Modal End-->


<!-- Add Agent Modal Start-->
<div class="modal fade" id="addAgentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-1">
                    <img src="./img/svg/agent.svg" width="100px">
                </div>
                <div class="card-body">
                    <h3 class="text-center mb-2">AGENT INFORMATION</h3>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" class="form-control form-control-lg" name="firstname" placeholder="">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" class="form-control form-control-lg" name="lastname" placeholder="">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="Email">Email</label>
                                <input type="email" class="form-control form-control-lg" name="email" placeholder="">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="Password">Password</label>
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-center mt-n4 mb-4">
                <button type="submit" form="form-payment-approval" name="add_agent_btn" class="btn btn-lg btn-info"><i class="fas fa-plus"></i> Add Agent</button>
                <button type="button" class="btn btn-lg btn-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Agent Modal End-->