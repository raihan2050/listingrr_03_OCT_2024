import{a as s,i as k,b as f,r as b,d as q,m as v}from"./switcher-styles-BcF-6Dmt.js";let m=document.querySelector("#colorID");m==null||m.addEventListener("input",B);let i=document.querySelector("#bgID");i==null||i.addEventListener("input",C);const h=e=>{const r=document.querySelector(":root");Object.keys(e).forEach(a=>{r.style.setProperty(a,e[a])})};function I(e){e.forEach(r=>{r.addEventListener("input",c=>{const a=`--primary-${c.target.getAttribute("data-id")}`,l=`--primary-${c.target.getAttribute("data-id1")}`,u=`--primary-${c.target.getAttribute("data-id2")}`;h({[a]:c.target.value,[l]:c.target.value+95,[u]:c.target.value})})})}function w(e){e.forEach(r=>{r.addEventListener("input",c=>{const a=`--dark-${c.target.getAttribute("data-id3")}`,l=`--dark-${c.target.getAttribute("data-id4")}`;h({[a]:c.target.value+"dd",[l]:c.target.value})})})}(function(){const e=document.querySelectorAll("input.color-primary-light"),r=document.querySelectorAll("input.background-primary-light");I(e),w(r),A(),P()})();function P(){document.getElementById("loader").classList.add("d-none")}function A(){for(let e=0;e<localStorage.length;e++){const r=localStorage.key(e),c=localStorage.getItem(r);console.log(`Key: ${r}, Value: ${c}`)}return G(),!1}function B(){s();var e=document.getElementById("colorID").value;localStorage.setItem("sparicprimaryColor",e),localStorage.setItem("sparicprimaryHoverColor",e+95),localStorage.setItem("sparicprimaryBorderColor",e),y()}function C(){var e=document.getElementById("bgID").value;localStorage.setItem("sparicbgColor",e+"dd"),localStorage.setItem("sparicthemeColor",e),y(),document.body.classList.add("dark-mode"),document.body.classList.remove("light-mode"),$("#myonoffswitch2").prop("checked",!0),$("#myonoffswitch5").prop("checked",!0),$("#myonoffswitch8").prop("checked",!0),localStorage.setItem("sparicdarkMode",!0)}const D=e=>/^#([A-Fa-f0-9]{3,4}){1,2}$/.test(e),E=(e,r)=>e.match(new RegExp(`.{${r}}`,"g")),L=e=>parseInt(e.repeat(2/e.length),16),R=(e,r)=>typeof e<"u"?e/255:typeof r!="number"||r<0||r>1?1:r;function o(e,r){if(!D(e))return null;const c=Math.floor((e.length-1)/3),a=E(e.slice(1),c),[l,u,n,d]=a.map(L);return`rgba(${l}, ${u}, ${n}, ${R(d,r)})`}let t;function y(){let e=getComputedStyle(document.documentElement).getPropertyValue("--primary-bg-color").trim();t=localStorage.getItem("sparicprimaryColor")||e,document.querySelector("#timeline-chart")!==null&&k(t),document.querySelector("#vmap")!==null&&vectormap(t,o),document.querySelector("#spark1")!==null&&spark1(t,o),document.querySelector("#chart12")!==null&&f(t),document.querySelector(".canvasDoughnut")!==null&&canvasDoughnut(t,o),document.querySelector("#chart-circle-primary")!==null&&chartcircleprimary(t,o),document.querySelector("#revenue_chart")!==null&&b(t),document.querySelector(".canvasDoughnut2")!==null&&canvasDoughnut2(),document.querySelector("#expense")!==null&&expense(t,o),document.querySelector("#patient-visit")!==null&&q(t),document.querySelector("#projectTracked")!==null&&projectTracked(t,o),document.querySelector("#chart-circle-primary1")!==null&&chartcircleprimary1(),document.querySelector("#chart-circle-primary2")!==null&&chartcircleprimary2(t,o),document.querySelector("#chart-circle-primary3")!==null&&chartcircleprimary3(t,o),document.querySelector("#marketChart")!==null&&v(t),document.querySelector("#CryptoChart1")!==null&&cryptoChart1(t,o);let r=o(t||e,.1);document.querySelector("html").style.setProperty("--primary01",r);let c=o(t||e,.2);document.querySelector("html").style.setProperty("--primary02",c);let a=o(t||e,.3);document.querySelector("html").style.setProperty("--primary03",a);let l=o(t||e,.4);document.querySelector("html").style.setProperty("--primary04",l);let u=o(t||e,.5);document.querySelector("html").style.setProperty("--primary05",u);let n=o(t||e,.6);document.querySelector("html").style.setProperty("--primary06",n);let d=o(t||e,.7);document.querySelector("html").style.setProperty("--primary07",d);let g=o(t||e,.8);document.querySelector("html").style.setProperty("--primary08",g);let p=o(t||e,.9);document.querySelector("html").style.setProperty("--primary09",p);let S=o(t||e,.05);document.querySelector("html").style.setProperty("--primary005",S)}y();function G(){let e=document.querySelector("html");localStorage.SparicHeader==="dark"?(e.setAttribute("data-theme-mode","light"),e.setAttribute("data-header-styles","light"),e.setAttribute("data-menu-styles","light"),localStorage.getItem("primaryRGB")||e.setAttribute("style",""),e.removeAttribute("data-bg-theme"),document.querySelector("#switcher-light-theme").checked=!0,document.querySelector("#switcher-menu-light").checked=!0,document.querySelector("html").style.removeProperty("--body-bg-rgb",localStorage.bodyBgRGB),s(),e.style.removeProperty("--body-bg-rgb2"),e.style.removeProperty("--light-rgb"),e.style.removeProperty("--form-control-bg"),e.style.removeProperty("--input-border"),document.querySelector("#switcher-header-light").checked=!0,document.querySelector("#switcher-menu-light").checked=!0,document.querySelector("#switcher-light-theme").checked=!0,document.querySelector("#switcher-background4").checked=!1,document.querySelector("#switcher-background3").checked=!1,document.querySelector("#switcher-background2").checked=!1,document.querySelector("#switcher-background1").checked=!1,document.querySelector("#switcher-background").checked=!1,localStorage.removeItem("Sparicdarktheme"),localStorage.removeItem("SparicMenu"),localStorage.removeItem("SparicHeader"),localStorage.removeItem("bodylightRGB"),localStorage.removeItem("bodyBgRGB"),localStorage.getItem("Spariclayout")!="horizontal"&&e.setAttribute("data-menu-styles","dark"),e.setAttribute("data-header-styles","light"),e.setAttribute("data-menu-styles","light")):(e.setAttribute("data-theme-mode","dark"),e.setAttribute("data-header-styles","dark"),localStorage.getItem("primaryRGB")||e.setAttribute("style",""),e.setAttribute("data-menu-styles","dark"),document.querySelector("#switcher-dark-theme").checked=!0,document.querySelector("#switcher-menu-dark").checked=!0,document.querySelector("#switcher-header-dark").checked=!0,s(),document.querySelector("#switcher-menu-dark").checked=!0,document.querySelector("#switcher-header-dark").checked=!0,document.querySelector("#switcher-dark-theme").checked=!0,document.querySelector("#switcher-background4").checked=!1,document.querySelector("#switcher-background3").checked=!1,document.querySelector("#switcher-background2").checked=!1,document.querySelector("#switcher-background1").checked=!1,document.querySelector("#switcher-background").checked=!1,localStorage.setItem("Sparicdarktheme","true"),localStorage.setItem("SparicMenu","dark"),localStorage.setItem("SparicHeader","dark"),localStorage.removeItem("bodylightRGB"),localStorage.removeItem("bodyBgRGB"))}