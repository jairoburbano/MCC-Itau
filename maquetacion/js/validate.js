(function ( $ ) {
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $("#rut").Rut({
        format_on: 'keyup'
    });
    $.validator.addMethod("customemail", 
                          function(value, element) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(value);
    }, 
                          "Tu correo no es válido"
                         );
    $.validator.addMethod("rut", function(value, element) {
        return this.optional(element) || $.Rut.validar(value);
    }, $('#rut').parents('.group').data('message'));
    jQuery.validator.addMethod("uploadFile", function (val, element) {
        var size = element.files[0].size;
        if (size > 4194304)// checks the file more than 1 MB
        {
            return false;
        } else {
            return true;
        }
    }, "File type error");
    /**
     * Validación del formulario usando jQuery Validate
     */
    function validacionContacto() {
        var formulario = $('.form-contact'),
            contenedor = $('.contact');
        $('<div class="loading"><span class="bounce1"></span><span class="bounce2"></span><span class="bounce3"></span></div>').appendTo('.js-form-container');
        $('<div class="message"><div class="message__link">Ok/Cerrar</div></div>').appendTo('.form-contact');
        formulario.validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            rules: {
                username: "required",
                phone: "required",
                email: {
                    required: true,
                    customemail: true
                },
                message: {
                    required: true,
                    minlength: 20
                },
            },
            messages: {
                username: $('#username').parents('.group').data('message'),
                phone: $('#phone').parents('.group').data('message'),
                email: {
                    required: $('#email').parents('.group').data('message'),
                    customemail: $('#email').parents('.group').data('message'),
                    email: $('#email').parents('.group').data('message')
                },
                message: {
                    required: $('#message').parents('.group').data('message'),
                    minlength: $('#message').parents('.group').data('message')
                }
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                $('.form-contact .message').addClass('sending').html('<h2>El mensaje se esta enviando</h2>').fadeIn();

                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        $('.form-contact .message').html('<div class="message__container error"><p class="warning-msg">Error inesperado, intentalo mas tarde.</p><button class="btn btn--white js-close-form-message">Volver a intentar nuevamente</button></div>').removeClass('hidden');
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            $('.form-contact .sending').fadeOut().removeClass('sending').find('h2').delete;
                            $('.form-contact .message').html('<h2>El mensaje fue enviado exitosamente.</h2><p class="message__text">Gracias por contactarnos.</p>').fadeIn();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            $('.form-contact .message').html('<h2>Ocurrió un problema y el mensaje no fue enviado.</h2><p class="message__text">Por favor intenta de nuevo.</p>').removeClass('hidden');
                        }
                    }
                } );
                return false;
            }
        });
    }
    function validacionDenuncias() {
        var formulario = $('.form-denuncia'),
            contenedor = $('.contact');
        $('<div class="loading"><span class="bounce1"></span><span class="bounce2"></span><span class="bounce3"></span></div>').appendTo('.js-form-container');
        $('<div class="message"><button class="message__link">Ok/Cerrar</button></div>').appendTo('.form-denuncia');
        formulario.validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            rules: {
                detalle: {
                    required: true,
                    minlength: 20
                },
                rut: {
                    required: true,
                    rut: true
                },
                username: "required",
                lastname: "required",
                lastname2: "required",
                email: {
                    required: true,
                    customemail: true
                },
                comuna: "required",
                ciudad: "required",
                telefono: "required",
            },
            messages: {
                detalle: {
                    required: "ingresa un mensaje válido",
                    minlength: "Ingresa al menos 20 caracteres."
                },
                rut: {
                    required: "Ingresa un RUT válido.",
                    rut: "Ingresa un RUT válido.",
                },
                username: "Usa solo letras.",
                lastname: "Usa solo letras.",
                lastname2: "Usa solo letras.",
                email: {
                    required: "Ingresa un e-mail válido.",
                    customemail: "Ingresa un e-mail válido.",
                    email: "Ingresa un e-mail válido."
                },
                comuna: "Ingresa una comuna. Usa solo letras.",
                ciudad: "Ingresa una ciudad. Usa solo letras.",
                telefono: "Usa solo números. ",
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.message').addClass('sending').html('<h2>El mensaje se esta enviando</h2>').fadeIn();

                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.message').html('<div class="message__container error"><p class="warning-msg">Error inesperado, intentalo mas tarde.</p><button class="btn btn--white js-close-form-message">Volver a intentar nuevamente</button></div>').removeClass('hidden');
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            formulario.find('.sending').fadeOut().removeClass('sending').find('h2').delete;
                            formulario.find('.message').html('<h2>El mensaje fue enviado exitosamente.</h2><p class="message__text">Gracias por contactarnos.</p>').fadeIn();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<h2>Ocurrió un problema y el mensaje no fue enviado.</h2><p class="message__text">Por favor intenta de nuevo.</p>').removeClass('hidden');
                        }
                    }
                } );
                return false;
            }
        });
    }
    function validacionTrabaja() {
        var formulario = $('.form--trabaja'),
            contenedor = $('.contact');
        $('<div class="loading"><span class="bounce1"></span><span class="bounce2"></span><span class="bounce3"></span></div>').appendTo('.js-form-container');
        $('<div class="message"><button class="message__link">Ok/Cerrar</button></div>').appendTo('.form--trabaja');
        formulario.validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            rules: {
                nickname: "required",
                email: {
                    required: true,
                    customemail: true
                },
                file: {
                    required: true,
                    uploadFile:true,
                }
            },
            messages: {
                nickname: "Usa solo letras.",
                email: {
                    required: "Ingresa un e-mail válido.",
                    customemail: "Ingresa un e-mail válido.",
                    email: "Ingresa un e-mail válido."
                },
                file: {
                    required: "Adjunta un archivo en .pdf",
                    uploadFile: "Peso máximo 4MB"
                },
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.message').addClass('sending').html('<h2>El mensaje se esta enviando</h2>').fadeIn();

                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.message').html('<div class="message__container error"><p class="warning-msg">Error inesperado, intentalo mas tarde.</p><button class="btn btn--white js-close-form-message">Volver a intentar nuevamente</button></div>').removeClass('hidden');
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            formulario.find('.sending').fadeOut().removeClass('sending').find('h2').delete;
                            formulario.find('.message').html('<h2>El mensaje fue enviado exitosamente.</h2><p class="message__text">Gracias por contactarnos.</p>').fadeIn();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').html('<h2>Ocurrió un problema y el mensaje no fue enviado.</h2><p class="message__text">Por favor intenta de nuevo.</p>').removeClass('hidden');
                        }
                    }
                } );
                return false;
            }
        });
    }
    function validacionDescarga() {
        var formulario = $('.form--descarga');
        $('<div class="message"><div class="message__content"></div><button class="message__link">Ok/Cerrar</button></div>').appendTo('.form--descarga');
        formulario.validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
                $('.form--descarga').find('.btn--nav').removeClass('btn--off');
            },
            rules: {
                username: "required",
                rut: {
                    required: true,
                    rut: true
                },
                email: {
                    required: true,
                    customemail: true
                },
            },
            messages: {
                username: "Usa solo letras.",
                rut: {
                    required: "Ingresa un RUT válido.",
                    rut: "Ingresa un RUT válido.",
                },
                email: {
                    required: "Ingresa un e-mail válido.",
                    customemail: "Ingresa un e-mail válido.",
                    email: "Ingresa un e-mail válido."
                },
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                formulario.find('.message').addClass('sending');
                formulario.find('.message .message__content').html('<h2>El mensaje se esta enviando</h2>');
                formulario.find('.message').fadeIn();

                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.message .message__content').html('<h2>Ocurrió un problema y el mensaje no fue enviado.</h2><p class="message__text">Por favor intenta de nuevo.</p>');
                        fomrulario.find('.message').fadeIn();
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            formulario.find('.sending').fadeOut().removeClass('sending').find('.message__content').empty;
                            formulario.find('.message .message__content').html('<h2>El mensaje fue enviado exitosamente.</h2><p class="message__text">Gracias por contactarnos.</p>');
                            fomrulario.find('.message').fadeIn();
                            formulario.find('.form__valid').removeClass('form__valid');
                            $('.single--bottom').slideDown();
                        } else {
                            formulario.find('.message .message__content').html('<h2>Ocurrió un problema y el mensaje no fue enviado.</h2><p class="message__text">Por favor intenta de nuevo.</p>');
                            fomrulario.find('.message').fadeIn();
                        }
                    }
                } );
                return false;
            }
        });
    }
    validacionContacto();
    validacionDenuncias();
    validacionTrabaja();
    validacionDescarga();
})(jQuery);