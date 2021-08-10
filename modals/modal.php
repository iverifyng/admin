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
                                <label class="form-label" for="firstName">ID</label>
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