"use strict";
var KTUsersAddUser = (function () {
       
      
    const t = document.getElementById("kt_modal_add_category"),
        e = t.querySelector("#kt_modal_add_category_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function () {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        category_name: {
                            validators: {
                                notEmpty: { message: "Full name is required" },
                            },
                        },
                        category_slug: {
                            validators: {
                                notEmpty: {
                                    message: "Valid email address is required",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                });
                const i = t.querySelector(
                    '[data-kt-users-modal-action="submit"]'
                );
                i.addEventListener("click", (t) => {
                    const formjs = $("#kt_modal_export_users_form");
                    let action = formjs.attr('action');
                    let formData = new FormData(formjs[0]);
                    console.log(formData.values);
                    t.preventDefault(),
                        o &&
                            o.validate().then(function (t) {
                                console.log(e.name_en.value),
                                console.log("validated!"),
                                    "Valid" == t
                                        ? (i.setAttribute(
                                              "data-kt-indicator",
                                              "on"
                                          ),
                                          (i.disabled = !0),
                                          setTimeout(function () {
                                              i.removeAttribute(
                                                  "data-kt-indicator"
                                              ),
                                                  (i.disabled = !1),
                                                  $.ajax({
                                                      type: "post",
                                                      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                                                      url: action,
                                                      data:  $("#kt_modal_add_category_form").serialize(),
                                                      cache: false,
                                                      processData: false,
                                                      success: function (data) {
                                                          Swal.fire({
                                                              text: "Form hsas been successfully submitted!",
                                                              icon: "success",
                                                              buttonsStyling:
                                                                  !1,
                                                              confirmButtonText:
                                                                  "Ok, got it!",
                                                              customClass: {
                                                                  confirmButton:
                                                                      "btn btn-primary",
                                                              },
                                                          }).then(function (t) {
                                                              t.isConfirmed &&
                                                                  n.hide();
                                                          });
                                                      },
                                                  });
                                          }, 2e3))
                                        : Swal.fire({
                                              text: "Sorry, looks like there are some errors detected, please try again.",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, got it!",
                                              customClass: {
                                                  confirmButton:
                                                      "btn btn-primary",
                                              },
                                          });
                            });
                }),
                    t
                        .querySelector('[data-kt-users-modal-action="cancel"]')
                        .addEventListener("click", (t) => {
                            t.preventDefault(),
                                Swal.fire({
                                    text: "Are you sure you would like to cancel?",
                                    icon: "warning",
                                    showCancelButton: !0,
                                    buttonsStyling: !1,
                                    confirmButtonText: "Yes, cancel it!",
                                    cancelButtonText: "No, return",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                        cancelButton: "btn btn-active-light",
                                    },
                                }).then(function (t) {
                                    t.value
                                        ? (e.reset(), n.hide())
                                        : "cancel" === t.dismiss &&
                                          Swal.fire({
                                              text: "Your form has not been cancelled!.",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, got it!",
                                              customClass: {
                                                  confirmButton:
                                                      "btn btn-primary",
                                              },
                                          });
                                });
                        }),
                    t
                        .querySelector('[data-kt-users-modal-action="close"]')
                        .addEventListener("click", (t) => {
                            t.preventDefault(),
                                Swal.fire({
                                    text: "Are you sure you would like to cancel?",
                                    icon: "warning",
                                    showCancelButton: !0,
                                    buttonsStyling: !1,
                                    confirmButtonText: "Yes, cancel it!",
                                    cancelButtonText: "No, return",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                        cancelButton: "btn btn-active-light",
                                    },
                                }).then(function (t) {
                                    t.value
                                        ? (e.reset(), n.hide())
                                        : "cancel" === t.dismiss &&
                                          Swal.fire({
                                              text: "Your form has not been cancelled!.",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, got it!",
                                              customClass: {
                                                  confirmButton:
                                                      "btn btn-primary",
                                              },
                                          });
                                });
                        });
            })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTUsersAddUser.init();
});
