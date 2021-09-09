function showCustomSuccess(text){
    Swal.fire(
        'Success!',
        text,
        'Success'
    )
}

function showCustomError(text){
    Swal.fire(
        {

        icon: 'error!',
        title: 'Oops...',
        text:text

    })
}

