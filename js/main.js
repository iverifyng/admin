//User Delete Trigger
function confirmDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-user").id.value = id;
    $("#userDeleteModal").modal("show");
}

//Message Delete Trigger
function confirmMsgDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-msg").id.value = id;
    $("#messageDeleteModal").modal("show");
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

//Promo Delete Trigger
function confirmPromoDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-promo-delete").id.value = id;
    $("#promoDeleteModal").modal("show");
}

//Zoom Image
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
