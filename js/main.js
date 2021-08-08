///User Delete Trigger
$('.delete_btn').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href')

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})