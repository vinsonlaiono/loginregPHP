// alert('test');
$(document)
.on("submit", "form.js-login", function(event){
    event.preventDefault();

    // alert('Form was submitted');

    var _form = $(this);
    var _error = $(".js-error", _form);

    var data = {
        userEmail: $("input[type='email']", _form).val(), 
        userPassword: $("input[type='password']", _form).val()
    }

    console.log(data);

    if(data.userEmail.length < 6){
        _error
            .text("Please enter a valid email address")
            .show();
    } else if(data.userPassword.length < 8){
        _error
            .text("Password must be at least 8 charachters long")
            .show();
    }

    return false;
})