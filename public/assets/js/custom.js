$(document).ready(function(){
    $('.save_posts_btn').on('click', function(e){
        e.preventDefault();
        let check = userHasUploadedImage();
        if(check){
            let myForm = document.getElementById('addPostForm');
            let formData = new FromData(myForm);
            console.log(formData);
            uploadPost(formData);
        }
    });
});


function uploadPost(formData) {
    $.ajaxSetup({
        headers: {
            'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        data: formData,
        dataType: 'JSON',
        contentType: false,
        processData: false,
        url: 'save_user',
        success: function(data){
            if(data.status){
                showCustomSuccess(data.message);
            }else{
                showCustomError(data.error);
            }
        },
        error:function(err){
            showCustomError('Something went Wrong!')
        }
    })
}


function userHasUploadedImage(){
     let check = true;
     let file = $('#image').get(0).files[0];
     if(file == undefined || file == null){
         check = false;
         handleErrors();
         return check;
     }
     handleErrors();
     return check;
}

function handleErrors(){
    let file = $('#image').get(0).files[0];
    if(file == undefined || file == null){
        $('#error_image').show();

    }else{
        $('#error_image').hide();
    }
}
