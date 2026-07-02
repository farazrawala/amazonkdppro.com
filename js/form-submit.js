var scriptElement = document.currentScript;
var scriptSrc = scriptElement ? scriptElement.src : "";

if (!scriptSrc) {
  var formSubmitScripts = document.querySelectorAll('script[src*="form-submit.js"]');
  if (formSubmitScripts.length) {
    scriptSrc = formSubmitScripts[formSubmitScripts.length - 1].src;
  }
}

// Site base URL from where this script was loaded (works in subfolders on localhost)
var siteBaseUrl = scriptSrc.split("/js/form-submit.js")[0] || window.location.origin;

// Extract brand id from query string
var filename = scriptSrc.split("/").pop();
var parts = filename.split("brand=");
const BrandID = parts[1] ? parts[1].split("&")[0] : "";

const notifications = document.querySelector(".design_notifications_toaster");
const toastDetails = {
  timer: 3000,
  success: {
    icon: "fa-circle-check",
  },
  error: {
    icon: "fa-circle-xmark",
  },
  warning: {
    icon: "fa-triangle-exclamation",
  },
  info: {
    icon: "fa-circle-info",
  },
};
const removeToast = (toast) => {
  toast.classList.add("hide");
  if (toast.timeoutId) clearTimeout(toast.timeoutId); // Clearing the timeout for the toast
  setTimeout(() => toast.remove(), 3000); // Removing the toast after 500ms
};
const createToast = (id, msg) => {
  const { icon, text } = toastDetails[id];
  const toast = document.createElement("li"); // Creating a new 'li' element for the toast
  toast.className = `toast ${id}`;
  toast.innerHTML = `<div class="column">
                         <i class="fa-solid ${icon}"></i>
                         <span>${msg}</span>
                      </div>
                      <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`;
  // notifications.appendChild(toast); // Append the toast to the notification ul
  toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
};
// Nofitication end.

$(document).ready(function () {
  jQuery.validator.addMethod(
    "lettersonly",
    function (e, n) {
      return this.optional(n) || /^[a-zA-Z\s'\-]+$/i.test(e);
    },
    "Invalid Value"
  );
}),
  $(document).ready(function () {
    // $("body").append("<ul class='design_notifications_toaster'></ul>");
    $(".form_submission").each(function () {
      var $form = $(this);
      $form.find('button[type="button"]').on("click", function () {
        $form.submit();
      });
      $form.validate({
        rules: {
          name: { required: !0, lettersonly: !0 },
          email: { email: !0, required: !0 },
          phone: { required: !0 },
          message: { required: false },
        },
        invalidHandler: function (event, validator) {
          $(this).find(".success").hide();
          $(this)
            .find(".error")
            .html(validator.errorList[0].message)
            .show();
        },
        submitHandler: function (e) {
          $(e).find(".error").hide();
          $(e).find(".success").hide();
          var t = {},
            n = $(e).find("[data-name]");
          if (0 !== n.length) {
            for (var i = 0; i < n.length; i++) {
              t[$(n[i]).attr("data-name")] = $(n[i]).val();
            }
          }
          console.log(e);
          $(e).find(".loader").show();
          var a = $(e).find('[name="name"]').val(),
            o = $(e).find('[name="email"]').val(),
            l = $(e).find('[name="phone"]').val(),
            r = $(e).find('[name="message"]').val(),
            s = window.location.href,
            c = window.location.origin,
            u = $(e).find('[name="subject"]').val();
          so = window.location.href;
          lead_url = window.location.origin;
          value = $(e).find('[name="price"]').val();
          (pt = $(e).find('[name="pkgtitle"]').val()),
            (pc = $(e).find('[name="pkgctgry"]').val()),
            (title = $(e).find('[name="title"]').val()),
            (tk = "9" + Math.floor(Math.random() * 9999999999 + 1000000000));

          var myurl = siteBaseUrl;
          var URL = myurl + "/form/submit.php?brand_key=" + BrandID;
          var Domain_url = myurl + "/";

          //   if (window.location.origin == "https://localhost") {
          //     URL =
          //       "http://localhost/brands/prestigebookpublishers.com_895962/form/submit.php?brand_key=" +
          //       BrandID;

          //     Domain_url =
          //       "http://localhost/brands/prestigebookpublishers.com_895962/";
          //   }

          var data = {
            name: a,
            email: o,
            phone: l,
            message: r,
            url: s,
            domain: c,
            details: title,
            subject: u,
            source: so,
            lead_url,
            optional: t,
            value,
            randomnum: tk,
          };

          console.log("data", data);

          $.ajax({
            type: "GET",
            url: myurl + "/smtp_email/form_submission.php",
            dataType: "json",
            data,
            success: function (t) {
              var response = t;
              var $form = $(e);

              if (response && response.success) {
                $form.find(".loader").hide();
                $form.find(".error").hide();
                $form
                  .find(".success")
                  .html("Thank you! Redirecting...")
                  .show();
                $form.trigger("reset");

                setTimeout(function () {
                  const params = new URLSearchParams(data).toString();
                  window.location = Domain_url + "thankyou.php?" + params;
                }, 1500);
              } else {
                $form.find(".loader").hide();
                $form
                  .find(".error")
                  .html(
                    (response && response.message) ||
                      "Something went wrong. Please try again."
                  )
                  .show();
              }
            },
            error: function (t, n, i) {
              var $form = $(e);
              $form.find(".success").hide();
              $form
                .find(".error")
                .html("Error Occurred. Please try again.")
                .show();
              $form.find(".loader").hide();
            },
          });
        },
      });
    });
  });
