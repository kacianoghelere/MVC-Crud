$(function () {
    $("#form_reg").validate({
        highlight: function (element) {
            $(element).addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).removeClass('has-error');
        },        
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: "Please specify your name",
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            }
        },
        submitHandler: function (form) {
            alert('Saved!');
            $(form).ajaxSubmit();
        }
    });
    
    $("#form_edit").validate({
        highlight: function (element) {
            $(element).addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).removeClass('has-error');
        },
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: "Please specify your name",
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            }
        },
        submitHandler: function (form) {
            alert('Saved!');
            $(form).ajaxSubmit();
        }
    });
});