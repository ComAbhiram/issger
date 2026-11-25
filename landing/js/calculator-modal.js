// (window.calculatorModalInitialized &&
//   console.log("Calculator modal already initialized, skipping duplicate load"),
//   (window.calculatorModalInitialized = !0),
//   document.addEventListener("DOMContentLoaded", function () {
//     const e = document.querySelectorAll(".questionAnswerWrapper > .item"),
//       t = document.querySelectorAll(".progressWrap .progress"),
//       o = document.getElementById("backBtn");
//     let n = 0,
//       s = !1;
//     const l = [
//         "Website Design",
//         "Corporate Website",
//         "Mobile Application",
//         "Other",
//       ],
//       i = ["Ecommerce Store", "Shopify Store", "CRM / ERP Solution"];
//     function a() {
//       const t = e[0].querySelector(".option.selected");
//       return t ? t.dataset.value : "";
//     }
//     function c() {
//       return i.includes(a());
//     }
//     function r() {
//       const e = document.getElementById("pagesStep"),
//         t = document.getElementById("productsStep");
//       e &&
//         t &&
//         (l.includes(a())
//           ? ((e.style.display = ""),
//             (t.style.display = "none"),
//             t
//               .querySelectorAll(".option")
//               .forEach((e) => e.classList.remove("selected")))
//           : c()
//             ? ((e.style.display = "none"),
//               (t.style.display = ""),
//               e
//                 .querySelectorAll(".option")
//                 .forEach((e) => e.classList.remove("selected")))
//             : ((e.style.display = ""), (t.style.display = "none")));
//     }
//     function d() {
//       return (r(), c() ? [0, 1, 3, 4, 5, 6] : [0, 1, 2, 4, 5, 6]);
//     }
//     function u(s) {
//       n = s;
//       const l = d();
//       if (!l.includes(s)) return;
//       (e.forEach((e, t) => {
//         e.classList.toggle("active", t === s);
//       }),
//         (function (e) {
//           const o = e.indexOf(n);
//           t.forEach((t, n) => {
//             ((t.style.display = n < e.length ? "block" : "none"),
//               t.classList.toggle("active", n <= o));
//           });
//         })(l),
//         (function (e) {
//           const t = e.indexOf(n) + 1,
//             o = document.querySelector(".stepWrap .count");
//           o &&
//             (o.innerHTML = `Step <span id="currentStep">${t}</span> of ${e.length}`);
//         })(l));
//       const i = l.indexOf(s);
//       o.style.display = 0 === i ? "none" : "flex";
//     }
//     (u(0),
//       document.querySelectorAll(".option").forEach((t) => {
//         t.addEventListener("click", function (t) {
//           if ((t.stopPropagation(), s)) return;
//           if (!e[n].contains(this)) return;
//           (this.closest(".optionsWrap")
//             .querySelectorAll(".option")
//             .forEach((e) => {
//               e.classList.remove("selected");
//             }),
//             this.classList.add("selected"),
//             (s = !0),
//             setTimeout(() => {
//               const e = d(),
//                 t = e.indexOf(n),
//                 o = e[t + 1];
//               (void 0 !== o && u(o), (s = !1));
//             }, 250));
//         });
//       }),
//       document.querySelectorAll(".nextBtn").forEach((e) => {
//         e.addEventListener("click", function (e) {
//           e.preventDefault();
//           const t = this.closest(".form-group"),
//             o = t.querySelector(".form-control");
//           if (
//             !(function (e, t) {
//               if ("Mobile2" === e.id) {
//                 const o = e.value.replace(/[\s\-\(\)\+]/g, ""),
//                   n = e.value.trim();
//                 return n
//                   ? /[^0-9\s\+\-\(\)]/.test(n)
//                     ? ((t.textContent = "Please enter a valid phone number."),
//                       (t.style.color = "#d44242"),
//                       (t.style.fontSize = "14px"),
//                       (t.style.wordSpacing = "2px"),
//                       t.classList.remove("d-none"),
//                       !1)
//                     : /^\d+$/.test(o)
//                       ? /^0+$/.test(o)
//                         ? ((t.textContent =
//                             "Please enter a valid phone number."),
//                           (t.style.color = "#d44242"),
//                           (t.style.fontSize = "14px"),
//                           (t.style.wordSpacing = "2px"),
//                           t.classList.remove("d-none"),
//                           !1)
//                         : o.length < 10
//                           ? ((t.textContent =
//                               "Phone number must be at least 10 digits."),
//                             (t.style.color = "#d44242"),
//                             (t.style.fontSize = "14px"),
//                             (t.style.wordSpacing = "2px"),
//                             t.classList.remove("d-none"),
//                             !1)
//                           : o.length > 15
//                             ? ((t.textContent =
//                                 "Phone number must not exceed 15 digits."),
//                               (t.style.color = "#d44242"),
//                               (t.style.fontSize = "14px"),
//                               (t.style.wordSpacing = "2px"),
//                               t.classList.remove("d-none"),
//                               !1)
//                             : ((e.value = o), t.classList.add("d-none"), !0)
//                       : ((t.textContent = "Please enter a valid phone number."),
//                         (t.style.color = "#d44242"),
//                         (t.style.fontSize = "14px"),
//                         (t.style.wordSpacing = "2px"),
//                         t.classList.remove("d-none"),
//                         !1)
//                   : ((t.textContent = "Phone number is required."),
//                     (t.style.color = "#d44242"),
//                     (t.style.fontSize = "14px"),
//                     (t.style.wordSpacing = "2px"),
//                     t.classList.remove("d-none"),
//                     !1);
//               }
//               return e.value.trim()
//                 ? (t.classList.add("d-none"), !0)
//                 : ((t.textContent = "This field is required."),
//                   (t.style.color = "#d44242"),
//                   (t.style.fontSize = "14px"),
//                   (t.style.wordSpacing = "2px"),
//                   t.classList.remove("d-none"),
//                   !1);
//             })(o, t.querySelector(".help-block"))
//           )
//             return void o.focus();
//           const s = d(),
//             l = s.indexOf(n),
//             i = s[l + 1];
//           void 0 !== i && u(i);
//         });
//       }),
//       document.getElementById("Mobile2").addEventListener("input", function () {
//         this.closest(".form-group")
//           .querySelector(".help-block")
//           .classList.add("d-none");
//       }),
//       o &&
//         o.addEventListener("click", function () {
//           const e = d(),
//             t = e.indexOf(n),
//             o = e[t - 1];
//           void 0 !== o && u(o);
//         }));
//   }),
//   (function () {
//     "use strict";
//     const e = "stepCalculatorModal",
//       t = 30e3,
//       o = 0.9,
//       n = 100;
//     let s = !1,
//       l = !1,
//       i = !1,
//       a = null,
//       c = null,
//       r = null,
//       d = null;
//     function u() {
//       i ||
//         ((l = !0),
//         (s = !0),
//         (i = !0),
//         (function () {
//           a && (window.removeEventListener("scroll", a), (a = null));
//           c && (document.removeEventListener("mousemove", c), (c = null));
//           r && (document.removeEventListener("mouseleave", r), (r = null));
//         })(),
//         setTimeout(() => {
//           (function () {
//             const t = document.getElementById(e);
//             if (!t) return (console.error("Modal element not found"), !1);
//             try {
//               (t.classList.add("show"),
//                 (t.style.display = "block"),
//                 t.setAttribute("aria-hidden", "false"));
//               let e = document.querySelector(".modal-backdrop");
//               return (
//                 e
//                   ? e.classList.add("show")
//                   : ((e = document.createElement("div")),
//                     (e.className = "modal-backdrop fade show"),
//                     document.body.appendChild(e)),
//                 (document.body.style.overflow = "hidden"),
//                 document.body.classList.add("modal-open"),
//                 !0
//               );
//             } catch (e) {
//               return (console.error("Error showing modal directly:", e), !1);
//             }
//           })()
//             ? (console.log("Calculator modal opened successfully"), (l = !1))
//             : (console.error("Failed to show modal"), (s = !1), (l = !1));
//         }, 50));
//     }
//     function m() {
//       const t = document.getElementById(e);
//       t &&
//         (t.classList.remove("show"),
//         (t.style.display = "none"),
//         t.setAttribute("aria-hidden", "true"));
//       const o = document.querySelector(".modal-backdrop");
//       (o && o.remove(),
//         (document.body.style.overflow = ""),
//         document.body.classList.remove("modal-open"),
//         clearTimeout(d),
//         (d = setTimeout(() => {
//           ((s = !1), (l = !1));
//         }, 500)),
//         console.log("Modal closed"));
//     }
//     function p() {
//       document.getElementById(e)
//         ? (!(function () {
//             const t = document.getElementById(e);
//             t &&
//               (t.addEventListener("click", function (e) {
//                 if (e.target.closest(".btn-close"))
//                   return (
//                     e.stopPropagation(),
//                     e.preventDefault(),
//                     console.log("Close button clicked"),
//                     void m()
//                   );
//               }),
//               document.addEventListener(
//                 "click",
//                 function (e) {
//                   const t = document.querySelector(".modal-backdrop");
//                   e.target === t &&
//                     (e.stopPropagation(), console.log("Backdrop clicked"), m());
//                 },
//                 !0,
//               ),
//               document.addEventListener("keydown", function (e) {
//                 "Escape" === e.key &&
//                   s &&
//                   (e.preventDefault(), console.log("Escape key pressed"), m());
//               }));
//           })(),
//           setTimeout(() => {
//             i || (console.log("Timer trigger activated (30s)"), u());
//           }, t),
//           (function () {
//             let e = !1;
//             ((a = function () {
//               if (i || e) return;
//               const t = window.innerHeight,
//                 n = document.documentElement.scrollHeight;
//               (window.scrollY + t) / n >= o &&
//                 ((e = !0), console.log("Scroll trigger activated (90%)"), u());
//             }),
//               window.addEventListener("scroll", a, { passive: !0 }));
//           })(),
//           (function () {
//             let e = !1,
//               t = !1;
//             ((r = function (e) {
//               i ||
//                 t ||
//                 ((e.clientY <= 0 || void 0 === e.clientY) &&
//                   ((t = !0),
//                   console.log("Exit intent trigger activated (mouse leaving)"),
//                   u()));
//             }),
//               (c = function (o) {
//                 i ||
//                   t ||
//                   (o.clientY <= n && o.clientY > 0
//                     ? e ||
//                       ((e = !0),
//                       setTimeout(() => {
//                         i ||
//                           !e ||
//                           t ||
//                           ((t = !0),
//                           console.log(
//                             "Exit intent trigger activated (mouse near top)",
//                           ),
//                           u());
//                       }, 300))
//                     : (e = !1));
//               }),
//               document.addEventListener("mouseleave", r),
//               document.addEventListener("mousemove", c, { passive: !0 }));
//           })(),
//           console.log("Calculator modal triggers initialized successfully"))
//         : console.error(`Modal with id "${e}" not found`);
//     }
//     "loading" === document.readyState
//       ? document.addEventListener("DOMContentLoaded", p)
//       : p();
//   })(),
//   (function (e) {
//     function t(t) {
//       return (
//         e(".questionAnswerWrapper > .item")
//           .eq(t)
//           .find(".option.selected")
//           .data("value") ||
//         e(".questionAnswerWrapper > .item")
//           .eq(t)
//           .find(".option.selected")
//           .text()
//           .replace(/\s+/g, " ")
//           .trim()
//       );
//     }
//     function o() {
//       const t = e("#pagesStep .option.selected");
//       if (t.length) return t.text().replace(/\s+/g, " ").trim();
//       const o = e("#productsStep .option.selected");
//       return o.length ? o.text().replace(/\s+/g, " ").trim() : "";
//     }
//     function n(t) {
//       phoneLeadSaved = !1;
//       var o = e(t);
//       (o.removeClass("show"),
//         setTimeout(function () {
//           (o.hide().css("display", "none"),
//             0 === e(".modal.show").length &&
//               (e("body")
//                 .removeClass("modal-open")
//                 .css("overflow", "")
//                 .css("padding-right", ""),
//               e(".modal-backdrop").remove()));
//         }, 150));
//     }
//     ((window.submitLead = function () {
//       var s = e(".estimateBtn");
//       if (!s.hasClass("submitting")) {
//         s.addClass("submitting").prop("disabled", !0).text("Submitting...");
//         var l = {
//           project_type: t(0),
//           business_type: t(1),
//           project_size: o(),
//           brand_name: e("#brandName").val(),
//           phone: e("#Mobile2").val().replace(/\D/g, "").substring(0, 10),
//           budget: t(6),
//         };
//         (console.log("Lead Data:", l),
//           e.ajax({
//             url: landing_ajax.ajaxurl,
//             type: "POST",
//             dataType: "json",
//             data: Object.assign({ action: "landing_calculator_submit" }, l),
//             success: function (t) {
//               t.success
//                 ? (console.log("Lead Saved"),
//                   n("#stepCalculatorModal"),
//                   setTimeout(function () {
//                     (!(function (t) {
//                       var o = e(t);
//                       (e(".modal.show").each(function () {
//                         "#" + this.id !== t && n("#" + this.id);
//                       }),
//                         e("body").addClass("modal-open"),
//                         o.css("display", "block").show(),
//                         o.length && o[0].offsetHeight);
//                       (o.addClass("show"),
//                         0 === e(".modal-backdrop").length &&
//                           e("body").append(
//                             '<div class="modal-backdrop fade show"></div>',
//                           ));
//                     })("#thankYouModal"),
//                       s
//                         .removeClass("submitting")
//                         .prop("disabled", !1)
//                         .text("Get Estimate"));
//                   }, 300))
//                 : (alert("Submission failed. Please try again."),
//                   s
//                     .removeClass("submitting")
//                     .prop("disabled", !1)
//                     .text("Get Estimate"));
//             },
//             error: function () {
//               (alert("Submission error. Please check your connection."),
//                 s
//                   .removeClass("submitting")
//                   .prop("disabled", !1)
//                   .text("Get Estimate"));
//             },
//           }));
//       }
//     }),
//       e(document).ready(function () {
//         (e(document).on("click", ".option", function () {
//           var t,
//             o = e(this).closest(".questionAnswerWrapper > .item"),
//             n = e(".questionAnswerWrapper > .item").index(o);
//           ((t =
//             (0 === n && e(this).data("value")) ||
//             e(this).text().replace(/\s+/g, " ").trim()),
//             console.log("Stored:", n, t));
//         }),
//           e(document).on("click", ".estimateBtn", function (e) {
//             (e.preventDefault(), submitLead());
//           }));
//         var s = !1;
//         (e(document).on("input", "#Mobile2", function () {
//           var n = e(this).val().replace(/\D/g, "");
//           if (
//             (n.length > 10 && ((n = n.substring(0, 10)), (this.value = n)),
//             10 === n.length && !s)
//           ) {
//             s = !0;
//             var l = {
//               action: "phone_lead_submit",
//               project_type: t(0),
//               business_type: t(1),
//               project_size: o(),
//               brand_name: e("#brandName").val(),
//               phone: n,
//             };
//             (console.log("Phone Lead Data:", l),
//               e.ajax({
//                 url: landing_ajax.ajaxurl,
//                 type: "POST",
//                 dataType: "json",
//                 data: l,
//                 success: function (e) {
//                   e.success ? console.log("Phone lead saved") : (s = !1);
//                 },
//                 error: function () {
//                   (console.log("Phone lead save error"), (s = !1));
//                 },
//               }));
//           }
//         }),
//           e(document).on("click", '[data-bs-dismiss="modal"]', function (t) {
//             t.preventDefault();
//             var o = e(this).closest(".modal");
//             o.length && n("#" + o.attr("id"));
//           }),
//           e(document).on("click", ".modal", function (t) {
//             e(t.target).hasClass("modal") && n("#" + this.id);
//           }));
//       }));
//   })(jQuery));
