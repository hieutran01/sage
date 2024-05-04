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

function addFavorite(item_id,type = 'match'){
    jQuery.ajax({
        url: '/ajax/scheduleFavorite/'+item_id+'/'+type,
        method:'POST',
        success: function(res){

            jQuery('.favoriteScheduleMatch').removeClass('fas');
            jQuery('.favoriteScheduleSclass').removeClass('fas');

            let match_ids = res.match_ids;
            let sclass_ids = res.sclass_ids;
            jQuery.each(sclass_ids,function(key,sclass_id){
                console.log('sclass_id',sclass_id);
                jQuery('.favoriteScheduleSclass_'+sclass_id).addClass('fas');
            });

            jQuery.each(match_ids,function(key,match_id){
                console.log('match_id',match_id);
                jQuery('.favoriteScheduleMatch_'+match_id).addClass('fas');
            });
        }
    })
}