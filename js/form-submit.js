var scriptElement = document.currentScript;
var scriptSrc = scriptElement ? scriptElement.src : "";

if (!scriptSrc) {
  var formSubmitScripts = document.querySelectorAll('script[src*="form-submit.js"]');
  if (formSubmitScripts.length) {
    scriptSrc = formSubmitScripts[formSubmitScripts.length - 1].src;
  }
}

var siteBaseUrl = scriptSrc.split("/js/form-submit.js")[0] || window.location.origin;

var filename = scriptSrc.split("/").pop();
var parts = filename.split("brand=");
const BrandID = parts[1] ? parts[1].split("&")[0] : "";

function sendFormAjax(formEl) {
  var $form = $(formEl);

  $form.find(".error").hide();
  $form.find(".success").hide();
  $form.find(".loader").show();

  var optional = {};
  var optionalFields = $form.find("[data-name]");
  if (optionalFields.length) {
    for (var i = 0; i < optionalFields.length; i++) {
      optional[$(optionalFields[i]).attr("data-name")] = $(optionalFields[i]).val();
    }
  }

  var data = {
    name: $form.find('[name="name"]').val(),
    email: $form.find('[name="email"]').val(),
    phone: $form.find('[name="phone"]').val(),
    message: $form.find('[name="message"]').val(),
    url: window.location.href,
    domain: window.location.origin,
    details: $form.find('[name="title"]').val(),
    subject: $form.find('[name="subject"]').val(),
    source: window.location.href,
    lead_url: window.location.origin,
    optional: optional,
    value: $form.find('[name="price"]').val(),
    randomnum: "9" + Math.floor(Math.random() * 9999999999 + 1000000000),
  };

  var myurl = siteBaseUrl;
  var Domain_url = myurl + "/";

  $.ajax({
    type: "GET",
    url: myurl + "/smtp_email/form_submission.php",
    dataType: "json",
    data: data,
    success: function (response) {
      if (response && response.success) {
        $form.find(".loader").hide();
        $form.find(".error").hide();
        $form.find(".success").html("Thank you! Redirecting...").show();
        $form.trigger("reset");

        setTimeout(function () {
          window.location = Domain_url + "thankyou.php?" + new URLSearchParams(data).toString();
        }, 1500);
      } else {
        $form.find(".loader").hide();
        $form
          .find(".error")
          .html((response && response.message) || "Something went wrong. Please try again.")
          .show();
      }
    },
    error: function () {
      $form.find(".success").hide();
      $form.find(".error").html("Error Occurred. Please try again.").show();
      $form.find(".loader").hide();
    },
  });
}

jQuery(function ($) {
  if (typeof $.fn.validate !== "function") {
    console.error("jQuery Validate is not loaded.");
    return;
  }

  $.validator.addMethod(
    "lettersonly",
    function (value, element) {
      return this.optional(element) || /^[a-zA-Z\s'\-]+$/i.test(value);
    },
    "Invalid Value"
  );

  $(".form_submission").each(function () {
    var $form = $(this);

    if ($form.data("formSubmitInit")) {
      return;
    }
    $form.data("formSubmitInit", true);

    $form.attr("action", "javascript:void(0)");

    $form.validate({
      rules: {
        name: { required: true, lettersonly: true },
        email: { email: true, required: true },
        phone: { required: true },
        message: { required: false },
      },
      invalidHandler: function (event, validator) {
        $(this).find(".success").hide();
        $(this).find(".error").html(validator.errorList[0].message).show();
      },
    });

    $form.on("submit", function (event) {
      event.preventDefault();
      if ($form.valid()) {
        sendFormAjax(this);
      }
    });

    $form.on("click", "button.submt-btn, button.btn-1[name='cta1'], input[type='submit']", function (event) {
      event.preventDefault();
      if ($form.valid()) {
        sendFormAjax($form[0]);
      }
    });
  });
});
