jQuery("#form_rel").validate({
    highlight: function (element) {
        $(element).addClass('has-error');
        $(element).tooltipster('show');
    },
    unhighlight: function (element) {
        $(element).removeClass('has-error');
    },
    errorPlacement: function (error, element) {
        var newError = $(error).text();
        $(element).data('lastError', newError);
        if (newError !== '') {
            $(element).addClass('error_field');
            $(element).tooltipster('content', newError);
            $(element).tooltipster('show');
        } else {
            $(element).removeClass('error_field');
            $(element).tooltipster('hide');
        }
    },
    success: function (label, element) {
        $(element).tooltipster('hide');
        $(element).removeClass('has-error');
    },
    rules: {
        dtini: {
            required: true,
            date: true
        },
        dtfim: {
            required: true,
            date: true,
            checkDates: {
                checkDates: {dt1: "#dtfim", dt2: "#dtini"}
            }
        }
    },
    submitHandler: function (form) {
        var dados = $(form).serialize();
        $.ajax({
            type: "POST",
            data: dados,
            url: "../../ajax/relatorio/busca_rel_spsadt.php",
            dataType: "html",
            beforeSend: function (data) {
                $("#status_busca").html("Buscando informações...");
            },
            success: function (data) {
                $("#status_busca").html("");
                $("#grid_guias").html(data);
            },
            error: function (data) {
                $("#status_busca").html("Ocorreu um erro durante a busca de guias. " + data);
            }
        });
    }
});