import{m as o}from"./ajax-BLA7SV_z.js";import{D as m}from"./dataTables-B9FWpZWP.js";import"./_commonjsHelpers-BosuxZz1.js";new m("#currencyListTable",{responsive:!0});$(document).ready(function(){$(".modalCurrencyFormBtn").on("click",function(r){r.preventDefault();var e=$(this).data("currency_id");let t=$(this).data("bs-effect");$("#modalCurrencyForm").addClass(t),n(e)}),$("#modalCurrencyForm").on("hidden.bs.modal",function(){let r=$(this).attr("class").match(/(^|\s)effect-\S+/g);r&&(r=r[0].trim(),$(this).removeClass(r))})});function n(r){$("#modalCurrencySubmit").prop("disabled",!0);var e=new FormData;e.append("action","load_currency_create_edit_form"),e.append("currency_id",r),$("#modalCurrencyBody").html('<div class="text-center"><img src="../../../build/assets/images/svgs/loader.svg" alt=""></div>'),o("POST",window.commonAsset.ajax,e,function(t,a){c(t,a)})}function c(r,e){if($("#modalCurrencySubmit").prop("disabled",!1),r)console.error("Error:",r);else return e.type=="error"?(Swal.fire({icon:"error",title:e.msg}),!1):($("#modalCurrencyTitle").html(e.form_title),$("#modalCurrencySubmit").html(e.form_btn),$("#modalCurrencyBody").html(e.form_body),!0)}