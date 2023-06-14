$(function () {
  // jQuery.validator.addMethod("telefone", function (value, element) {
  //     value = value.replace("(", "");
  //     value = value.replace(")", "");
  //     value = value.replace("-", "");
  //     return this.optional(element) || /[0-9]{10}/.test(value);
  // }, "Por favor, digite um telefone válido");

  // jQuery.extend(jQuery.validator.messages, {
  //   required: "Este campo é obrigatório.",
  //   // remote: "Please fix this field.",
  //   email: "Por favor digite um endereço de e-mail válido.",
  //   // url: "Please enter a valid URL.",
  //   // date: "Please enter a valid date.",
  //   // dateISO: "Please enter a valid date (ISO).",
  //   // number: "Please enter a valid number.",
  //   // digits: "Please enter only digits.",
  //   // creditcard: "Please enter a valid credit card number.",
  //   // equalTo: "Please enter the same value again.",
  //   accept: "Please enter a value with a valid extension.",
  //   maxlength: jQuery.validator.format("Quantidade máxima permitida de {0} caracteres."),
  //   minlength: jQuery.validator.format("Quantidade máxima permitida de {0} characters."),
  //   rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
  //   range: jQuery.validator.format("Please enter a value between {0} and {1}."),
  //   max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
  //   min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
  // });

  $('input#phone').keyup(function() {
    var tel = this.value;
    var max = 11;
    if (!tel || tel.length === 0) {
      return '';
    }
    tel = tel.replace(/\D/g, '');
    if (tel.length > 4 && tel.length < 9) {
        tel = tel.slice(0, -4) + '-' + tel.slice(-4);
    } else if (tel.length >= 9) {
        if (tel.length > max) {
            tel = tel.slice(0, max);
        }
        tel = tel.slice(0, -9) + ' ' + tel.slice(-9);
        tel = tel.slice(0, -4) + '-' + tel.slice(-4);
    }
    this.value = tel;
  })

  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function ($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function ($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();
      var subject = $("input#subject").val();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton");
      $('#sendButtonLoading').show();
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "/contato",
        type: "POST",
        data: {
          name: name,
          phone: phone,
          email: email,
          message: message,
          subject: subject,
          _token: $('#token').val()
        },
        cache: false,
        success: function () {
          // Success message
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong>Sua mensagem foi enviada com sucesso. </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //clear all fields
          $('#contactForm').trigger("reset");
          // $('#sendButtonLoading').hide();
        },
        error: function () {
          // Fail message
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append($("<strong>").text("Perdão " + firstName + ", falha ao enviar o seu e-mail, tente novamente mais tarde."));
          $('#success > .alert-danger').append('</div>');
          // $('#sendButtonLoading').hide();
        },
        complete: function () {
          setTimeout(function () {
            $this.prop("disabled", false);
            $('#sendButtonLoading').hide(); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function () {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function (e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function () {
  $('#success').html('');
});
