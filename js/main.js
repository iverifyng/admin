//User Delete Trigger
function confirmDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-user").id.value = id;
    $("#userDeleteModal").modal("show");
}

//Payment Confirmation Trigger
function confirmPayment(self) {
    var id = self.getAttribute("data-id");
    var amount = self.getAttribute("info-id");

    document.getElementById("form-payment-approval").id.value = id;
    document.getElementById("form-payment-approval").amount.value = amount;
    $("#paymentApprovalModal").modal("show");
}

//Bank Topup Delete Trigger
function bankTopupDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-topup-delete").id.value = id;
    $("#bankTopupDeleteModal").modal("show");
}