$(function(){window.formChangeStates=window.formChangeStates||[],$(document).on("click",".switchToggleOne",function(){var t=$(this).data("target_class"),a=$(this).hasClass("on")?1:0;$("."+t).val(a),$("form").each(function(e){const n=$(this),o=n.data("target_pulse"),l=$(`.${o}`),s=n.data("target_left_tab_pulse");n.find(`.${t}`).length>0&&($("#"+s).length>0&&r(s,o),formChangeStates[e]=!0,l.addClass("formChanged"))})}),$("form").each(function(t){window.formChangeStates[t]=!1;const a=$(this),e=a.data("target_pulse"),n=$(`.${e}`),o=a.data("target_left_tab_pulse");a.on("input",function(){$("#"+o).length>0&&r(o,e),window.formChangeStates[t]=!0,n.addClass("formChanged")}),a.on("reset",function(){window.formChangeStates[t]=!1,n.removeClass("formChanged")})}),$(window).on("beforeunload",function(t){Object.values(window.formChangeStates).some(e=>e)&&(t.preventDefault(),t.returnValue="")})});function r(t,a){let e=$("#"+t),n=e.val(),o=n?n.split(","):[];o.includes(a)||o.push(a),e.val(o.join(","))}