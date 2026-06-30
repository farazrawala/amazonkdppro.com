var scriptElement = document.currentScript;

// Get the src attribute (filename) of the script
var scriptSrc = scriptElement.src;

// Extract variables from the filename
var filename = scriptSrc.split("/").pop(); // Get the filename from the path
var parts = filename.split("brand="); // Assuming variables are separated by underscores

const BrandID = parts[1];

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
      return this.optional(n) || /^[a-zA-Z\s]+$/i.test(e);
    },
    "Invalid Value"
  );
}),
  $(document).ready(function () {
    // $("body").append("<ul class='design_notifications_toaster'></ul>");
    $(".form_submission").each(function () {
      $(this).validate({
        rules: {
          name: { required: !0, lettersonly: !0 },
          email: { email: !0, required: !0 },
          phone: { required: !0 },
          message: { required: !0 },
        },
        submitHandler: function (e) {
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

          var myurl = window.location.origin;
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
              //   console.log("response__t", t);
              //   return false;
              var response = t;

              // if (typeof response == "string") {
              //   // createToast("error", errors[0]);
              console.log("typeof___", typeof response);
              console.log("response_direct___", response);
              if (typeof response == "object") {
                // response = JSON.parse(t);
                console.log("response__", response);
                $(".loader").hide();
                $(".form_submission").trigger("reset");

                createToast(
                  "success",
                  "Thank you for filling out your information!"
                );
                setTimeout(function () {
                  const params = new URLSearchParams(data).toString();

                  console.log(Domain_url + "thankyou.php?");
                  window.location = Domain_url + "thankyou.php?" + params;
                }, 3000);

                // response__
              }
            },
            error: function (t, n, i) {
              $(e)
                .find(".error")
                .html("Error Occurred " + i),
                $(e).find(".loader").hide();
              if (typeof e == "string") {
                createToast("error___", e);
              } else {
                var errArr = Object.entries(e);
                console.log("t____1", errArr);
                // createToast("error", errArr[0][1]);
                // console.log("type", typeof errArr);
              }
            },
          });
        },
      });
    });
  });
