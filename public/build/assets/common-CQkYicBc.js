import{c as w,g as y}from"./_commonjsHelpers-BosuxZz1.js";import{m as k}from"./ajax-BLA7SV_z.js";var g={exports:{}};/*!
 * Toastify js 1.12.0
 * https://github.com/apvarun/toastify-js
 * @license MIT licensed
 *
 * Copyright (C) 2018 Varun A P
 */(function(o){(function(r,e){o.exports?o.exports=e():r.Toastify=e()})(w,function(r){var e=function(t){return new e.lib.init(t)},f="1.12.0";e.defaults={oldestFirst:!0,text:"Toastify is awesome!",node:void 0,duration:3e3,selector:void 0,callback:function(){},destination:void 0,newWindow:!1,close:!1,gravity:"toastify-top",positionLeft:!1,position:"",backgroundColor:"",avatar:"",className:"",stopOnFocus:!0,onClick:function(){},offset:{x:0,y:0},escapeMarkup:!0,ariaLive:"polite",style:{background:""}},e.lib=e.prototype={toastify:f,constructor:e,init:function(t){return t||(t={}),this.options={},this.toastElement=null,this.options.text=t.text||e.defaults.text,this.options.node=t.node||e.defaults.node,this.options.duration=t.duration===0?0:t.duration||e.defaults.duration,this.options.selector=t.selector||e.defaults.selector,this.options.callback=t.callback||e.defaults.callback,this.options.destination=t.destination||e.defaults.destination,this.options.newWindow=t.newWindow||e.defaults.newWindow,this.options.close=t.close||e.defaults.close,this.options.gravity=t.gravity==="bottom"?"toastify-bottom":e.defaults.gravity,this.options.positionLeft=t.positionLeft||e.defaults.positionLeft,this.options.position=t.position||e.defaults.position,this.options.backgroundColor=t.backgroundColor||e.defaults.backgroundColor,this.options.avatar=t.avatar||e.defaults.avatar,this.options.className=t.className||e.defaults.className,this.options.stopOnFocus=t.stopOnFocus===void 0?e.defaults.stopOnFocus:t.stopOnFocus,this.options.onClick=t.onClick||e.defaults.onClick,this.options.offset=t.offset||e.defaults.offset,this.options.escapeMarkup=t.escapeMarkup!==void 0?t.escapeMarkup:e.defaults.escapeMarkup,this.options.ariaLive=t.ariaLive||e.defaults.ariaLive,this.options.style=t.style||e.defaults.style,t.backgroundColor&&(this.options.style.background=t.backgroundColor),this},buildToast:function(){if(!this.options)throw"Toastify is not initialized";var t=document.createElement("div");t.className="toastify on "+this.options.className,this.options.position?t.className+=" toastify-"+this.options.position:this.options.positionLeft===!0?(t.className+=" toastify-left",console.warn("Property `positionLeft` will be depreciated in further versions. Please use `position` instead.")):t.className+=" toastify-right",t.className+=" "+this.options.gravity,this.options.backgroundColor&&console.warn('DEPRECATION NOTICE: "backgroundColor" is being deprecated. Please use the "style.background" property.');for(var n in this.options.style)t.style[n]=this.options.style[n];if(this.options.ariaLive&&t.setAttribute("aria-live",this.options.ariaLive),this.options.node&&this.options.node.nodeType===Node.ELEMENT_NODE)t.appendChild(this.options.node);else if(this.options.escapeMarkup?t.innerText=this.options.text:t.innerHTML=this.options.text,this.options.avatar!==""){var d=document.createElement("img");d.src=this.options.avatar,d.className="toastify-avatar",this.options.position=="left"||this.options.positionLeft===!0?t.appendChild(d):t.insertAdjacentElement("afterbegin",d)}if(this.options.close===!0){var s=document.createElement("button");s.type="button",s.setAttribute("aria-label","Close"),s.className="toast-close",s.innerHTML="&#10006;",s.addEventListener("click",(function(h){h.stopPropagation(),this.removeElement(this.toastElement),window.clearTimeout(this.toastElement.timeOutValue)}).bind(this));var i=window.innerWidth>0?window.innerWidth:screen.width;(this.options.position=="left"||this.options.positionLeft===!0)&&i>360?t.insertAdjacentElement("afterbegin",s):t.appendChild(s)}if(this.options.stopOnFocus&&this.options.duration>0){var a=this;t.addEventListener("mouseover",function(h){window.clearTimeout(t.timeOutValue)}),t.addEventListener("mouseleave",function(){t.timeOutValue=window.setTimeout(function(){a.removeElement(t)},a.options.duration)})}if(typeof this.options.destination<"u"&&t.addEventListener("click",(function(h){h.stopPropagation(),this.options.newWindow===!0?window.open(this.options.destination,"_blank"):window.location=this.options.destination}).bind(this)),typeof this.options.onClick=="function"&&typeof this.options.destination>"u"&&t.addEventListener("click",(function(h){h.stopPropagation(),this.options.onClick()}).bind(this)),typeof this.options.offset=="object"){var c=l("x",this.options),p=l("y",this.options),m=this.options.position=="left"?c:"-"+c,b=this.options.gravity=="toastify-top"?p:"-"+p;t.style.transform="translate("+m+","+b+")"}return t},showToast:function(){this.toastElement=this.buildToast();var t;if(typeof this.options.selector=="string"?t=document.getElementById(this.options.selector):this.options.selector instanceof HTMLElement||typeof ShadowRoot<"u"&&this.options.selector instanceof ShadowRoot?t=this.options.selector:t=document.body,!t)throw"Root element is not defined";var n=e.defaults.oldestFirst?t.firstChild:t.lastChild;return t.insertBefore(this.toastElement,n),e.reposition(),this.options.duration>0&&(this.toastElement.timeOutValue=window.setTimeout((function(){this.removeElement(this.toastElement)}).bind(this),this.options.duration)),this},hideToast:function(){this.toastElement.timeOutValue&&clearTimeout(this.toastElement.timeOutValue),this.removeElement(this.toastElement)},removeElement:function(t){t.className=t.className.replace(" on",""),window.setTimeout((function(){this.options.node&&this.options.node.parentNode&&this.options.node.parentNode.removeChild(this.options.node),t.parentNode&&t.parentNode.removeChild(t),this.options.callback.call(t),e.reposition()}).bind(this),400)}},e.reposition=function(){for(var t={top:15,bottom:15},n={top:15,bottom:15},d={top:15,bottom:15},s=document.getElementsByClassName("toastify"),i,a=0;a<s.length;a++){u(s[a],"toastify-top")===!0?i="toastify-top":i="toastify-bottom";var c=s[a].offsetHeight;i=i.substr(9,i.length-1);var p=15,m=window.innerWidth>0?window.innerWidth:screen.width;m<=360?(s[a].style[i]=d[i]+"px",d[i]+=c+p):u(s[a],"toastify-left")===!0?(s[a].style[i]=t[i]+"px",t[i]+=c+p):(s[a].style[i]=n[i]+"px",n[i]+=c+p)}return this};function l(t,n){return n.offset[t]?isNaN(n.offset[t])?n.offset[t]:n.offset[t]+"px":"0px"}function u(t,n){return!t||typeof n!="string"?!1:!!(t.className&&t.className.trim().split(/\s+/gi).indexOf(n)>-1)}return e.lib.init.prototype=e.lib,e})})(g);var C=g.exports;const T=y(C);function v(o,r){let e;switch(r){case"success":e="linear-gradient(to right, #ff5f6d, #ffc371)";break;case"warning":e="linear-gradient(to right, #ffcc00, #ff9966)";break;case"error":e="linear-gradient(to right, #ff4e50, #fc913a)";break;default:e="#333"}T({text:o,style:{background:e},duration:3e3}).showToast()}$(function(){$('input[data-is_required="1"], select[data-is_required="1"], textarea[data-is_required="1"]').attr("required",!0),$(document).on("click",".submitForm",function(){var o=$(this),r=o.data("targetform"),e=$("."+r),f=!0;const l=$(this).closest("form"),u=$("form").index(l),t=$("."+e.data("target_pulse")),n=e.data("target_pulse"),d=e.data("target_left_tab_pulse");if(e.find('[data-is_required="1"]').each(function(){$(this).val()?($(this).removeClass("error"),$(this).siblings(".error-message").hide()):(f=!1,$(this).addClass("error"),$(this).siblings(".error-message").text(translations.super.this_field_is_required).show())}),!f)return v(translations.super.please_fill_in_all_required_fields,"warning"),!1;var s=new FormData(e[0]);$("."+r).find(":input").each(function(){var i=this.name;s.has(i)||($(this).is(":checkbox")?s.append(i,$(this).is(":checked")?$(this).val():"no"):$(this).is(":radio")?$(this).is(":checked")&&s.append(i,$(this).val()):s.append(i,$(this).val()))}),s.append("action","save_update_data"),s.append("target_form",r),o.addClass("loader"),o.prop("disabled",!0),k("POST",window.commonAsset.ajax,s,function(i,a){if(o.prop("disabled",!1),o.removeClass("loader"),i)console.error(i);else{if(a.type=="error")return v(a.msg,a.type),!1;N(u,t),$("#"+d).length>0&&(x(d,n),L(d)),v(a.msg,a.type)}})}),$(document).on("click",".clickToUpload",function(){var o=$(this).data("target_file_input");$("#"+o).click()}),$(document).on("change",".imgUploaderInput",function(){var o=$(this),r=o.data("target_preview"),e=$("#"+r),f=o[0].files[0];if(f){var l=new FileReader;l.onload=function(u){e.find("img").attr("src",u.target.result).show(),e.find("span").hide()},l.readAsDataURL(f)}else e.find("img").attr("src","").hide(),e.find("span").show()})});function N(o,r){window.formChangeStates[o]=!1,r.removeClass("formChanged")}function L(o){$("#"+o).val().split(",").forEach(function(l){l!=""&&$("."+l).addClass("formChanged")})}function x(o,r){let e=$("#"+o),f=e.val(),l=f?f.split(","):[];l=l.filter(u=>u!==r),e.val(l.join(","))}