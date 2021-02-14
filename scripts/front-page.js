
$(document).ready(function () {
    // Selezione form e definizione dei metodi di validazione
    $.validator.addMethod("emailCustom", function (phone_number, element) {
        return phone_number.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i)
    }, "Email non valida");
    $.validator.addMethod("phoneCustom", function (phone_number, element) {
        return phone_number.match(/^[+ 0-9]*$/i)
    }, "Telefono non valido");

    $("#join-group-form").validate({
        // Definiamo le nostre regole di validazione
        rules: {
            name: {
                required: true
            },
            surname: {
                required: true
            },
            email: {
                emailCustom: true
            },
            phone: {
                phoneCustom: true
            },
        },
        // Personalizzimao i mesasggi di errore
        messages: {
            name: "Campo obbligatorio",
            surname: "Campo obbligatorio",
            email: {
                required: "Campo obbligatorio",
                pattern: "Email invalida"
            },
            phone: {
                required: "Campo obbligatorio",
                pattern: "Numero invalido"
            }
        },
        // Settiamo il submit handler per la form
        submitHandler: function (form) {
            form.submit();
        }
    });
});