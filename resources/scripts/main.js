window.addEventListener('DOMContentLoaded', event => {
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
});


function loadSchedule(type = '',obj){
    jQuery('.nav-link').removeClass('active');
    let match_ids = jQuery('#schedules-data').data('match_ids')
    jQuery(obj).addClass('active');
    jQuery.ajax({
        url: '/ajax/schedules/'+type,
        method:'POST',
        data: {
            match_ids:match_ids
        },
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