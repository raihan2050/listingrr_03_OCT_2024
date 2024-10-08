import{c as f,i as S,a as q,r as v,b as k,m as P}from"./switcher-styles-p0TfOZfa.js";import"./_commonjsHelpers-Cpj98o6Y.js";let m=document.querySelector("#colorID");m==null||m.addEventListener("input",I);let y=document.querySelector("#bgID");y==null||y.addEventListener("input",E);const s=e=>{const o=document.querySelector(":root");Object.keys(e).forEach(a=>{o.style.setProperty(a,e[a])})};function C(e){e.forEach(o=>{o.addEventListener("input",c=>{const a=`--primary-${c.target.getAttribute("data-id")}`,l=`--primary-${c.target.getAttribute("data-id1")}`,n=`--primary-${c.target.getAttribute("data-id2")}`;s({[a]:c.target.value,[l]:c.target.value+95,[n]:c.target.value})})})}function b(e){e.forEach(o=>{o.addEventListener("input",c=>{const a=`--dark-${c.target.getAttribute("data-id3")}`,l=`--dark-${c.target.getAttribute("data-id4")}`;s({[a]:c.target.value+"dd",[l]:c.target.value})})})}(function(){const e=document.querySelectorAll("input.color-primary-light"),o=document.querySelectorAll("input.background-primary-light");C(e),b(o),D()})();function D(){document.getElementById("loader").classList.add("d-none")}function I(){f();var e=document.getElementById("colorID").value;localStorage.setItem("sparicprimaryColor",e),localStorage.setItem("sparicprimaryHoverColor",e+95),localStorage.setItem("sparicprimaryBorderColor",e),d()}function E(){var e=document.getElementById("bgID").value;localStorage.setItem("sparicbgColor",e+"dd"),localStorage.setItem("sparicthemeColor",e),d(),document.body.classList.add("dark-mode"),document.body.classList.remove("light-mode"),$("#myonoffswitch2").prop("checked",!0),$("#myonoffswitch5").prop("checked",!0),$("#myonoffswitch8").prop("checked",!0),localStorage.setItem("sparicdarkMode",!0)}const A=e=>/^#([A-Fa-f0-9]{3,4}){1,2}$/.test(e),L=(e,o)=>e.match(new RegExp(`.{${o}}`,"g")),x=e=>parseInt(e.repeat(2/e.length),16),B=(e,o)=>typeof e<"u"?e/255:typeof o!="number"||o<0||o>1?1:o;function r(e,o){if(!A(e))return null;const c=Math.floor((e.length-1)/3),a=L(e.slice(1),c),[l,n,u,i]=a.map(x);return`rgba(${l}, ${n}, ${u}, ${B(i,o)})`}let t;function d(){let e=getComputedStyle(document.documentElement).getPropertyValue("--primary-bg-color").trim();t=localStorage.getItem("sparicprimaryColor")||e,document.querySelector("#timeline-chart")!==null&&S(t),document.querySelector("#vmap")!==null&&vectormap(t,r),document.querySelector("#spark1")!==null&&spark1(t,r),document.querySelector("#chart12")!==null&&q(t),document.querySelector(".canvasDoughnut")!==null&&canvasDoughnut(t,r),document.querySelector("#chart-circle-primary")!==null&&chartcircleprimary(t,r),document.querySelector("#revenue_chart")!==null&&v(t),document.querySelector(".canvasDoughnut2")!==null&&canvasDoughnut2(),document.querySelector("#expense")!==null&&expense(t,r),document.querySelector("#patient-visit")!==null&&k(t),document.querySelector("#projectTracked")!==null&&projectTracked(t,r),document.querySelector("#chart-circle-primary1")!==null&&chartcircleprimary1(),document.querySelector("#chart-circle-primary2")!==null&&chartcircleprimary2(t,r),document.querySelector("#chart-circle-primary3")!==null&&chartcircleprimary3(t,r),document.querySelector("#marketChart")!==null&&P(t),document.querySelector("#CryptoChart1")!==null&&cryptoChart1(t,r);let o=r(t||e,.1);document.querySelector("html").style.setProperty("--primary01",o);let c=r(t||e,.2);document.querySelector("html").style.setProperty("--primary02",c);let a=r(t||e,.3);document.querySelector("html").style.setProperty("--primary03",a);let l=r(t||e,.4);document.querySelector("html").style.setProperty("--primary04",l);let n=r(t||e,.5);document.querySelector("html").style.setProperty("--primary05",n);let u=r(t||e,.6);document.querySelector("html").style.setProperty("--primary06",u);let i=r(t||e,.7);document.querySelector("html").style.setProperty("--primary07",i);let p=r(t||e,.8);document.querySelector("html").style.setProperty("--primary08",p);let g=r(t||e,.9);document.querySelector("html").style.setProperty("--primary09",g);let h=r(t||e,.05);document.querySelector("html").style.setProperty("--primary005",h)}d();
