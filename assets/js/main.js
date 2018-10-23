
$(document)
.on("submit", "form.js-login", function(event){
    event.preventDefault();

    var _form = $(this);
    var _loginError = $(".js-error", _form);

    var data = {
        userEmail: $("input[type='email']", _form).val(), 
        userPassword: $("input[type='password']", _form).val()
    }
    console.log(data);
    if(data.userEmail.length < 6){
        _loginError
            .text("Please enter a valid email address")
            .show();
    } else if(data.userPassword.length < 8){
        _loginError
            .text("Password must be at least 8 charachters long")
            .show();
    }
    return false;
})
$(document)
.on('submit', 'form.js-registration', function(event){
    event.preventDefault();

    var _form = $(this);
    var _regError = $(".js-error", _form);

    var dataReg = {
        first_name: $("input[name='fname']", _form).val(), 
        last_name: $("input[name='lname']", _form).val(), 
        userEmail: $("input[type='email']", _form).val(), 
        userPassword: $("input[type='password']", _form).val()
    }
    console.log(dataReg);
    // input validations
    if(dataReg.first_name.length < 3){
        _regError
        .text("First name must be at least 3 Characters long")
        .show();
        return false;
    } else if(dataReg.last_name.length < 3) {
        _regError
        .text("Last name must be at least 3 Characters long")
        .show();
        return false;
    } else if(dataReg.userEmail.length < 6){
        _regError
            .text("Please enter a valid email address")
            .show();
            return false;
    } else if(dataReg.userPassword.length < 8){
        _regError
            .text("Password must be at least 8 charachters long")
            .show();
        return false;
    }
    _regError.hide();

    $.ajax({
        type: "POST",
        url: '/loginAndReg/ajax/register.php',
        data: dataReg,
        dataType: 'json',
        async: true
    })
    .done(function ajaxDone(data) {
        console.log(data)

        if(data.redirect !== undefined){
            window.location = data.redirect;
        }
        alert(data.name)
    })
    .fail(function ajaxFailed (event) {
        console.log(event)
    })
    .always(function afaxAlwaysDoThid(data){
        console.log('Always run this')
    })
    return false;
})