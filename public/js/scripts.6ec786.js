"use strict";(self.webpackChunk_roots_bud_sage=self.webpackChunk_roots_bud_sage||[]).push([[787],{"./styles/custom.css":function(){},"./styles/main.css":function(){},"./scripts/main.js":function(){window.addEventListener("DOMContentLoaded",(e=>{document.body.querySelector("#mainNav")&&new bootstrap.ScrollSpy(document.body,{target:"#mainNav",offset:74});const s=document.body.querySelector(".navbar-toggler");[].slice.call(document.querySelectorAll("#navbarResponsive .nav-link")).map((function(e){e.addEventListener("click",(()=>{"none"!==window.getComputedStyle(s).display&&s.click()}))}))}))}},function(e){var s=function(s){return e(e.s=s)};s("./scripts/main.js"),s("./styles/main.css"),s("./styles/custom.css")}]);


function loadSchedule(type = '',obj){
    jQuery('.nav-link').removeClass('active');
    jQuery(obj).addClass('active');
    jQuery.ajax({
        url: '/ajax/schedules/'+type,
        method:'POST',
        success: function(res){
            jQuery('#schedules-data').html(res.html)
        }
    })
}