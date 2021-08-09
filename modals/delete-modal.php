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