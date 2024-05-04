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
jQuery('body').on('click','.loadSchedule',function(){
    var type = jQuery(this).data('type');
    var obj = jQuery(this);
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
})
jQuery('body').on('click','.addFavorite',function(){
    var item_id = jQuery(this).data('item_id');
    var type = jQuery(this).data('type');
    jQuery.ajax({
        url: '/ajax/scheduleFavorite/'+item_id+'/'+type,
        method:'POST',
        success: function(res){

            jQuery('.favoriteScheduleMatch').removeClass('fas');
            jQuery('.favoriteScheduleSclass').removeClass('fas');

            let match_ids = res.match_ids;
            let sclass_ids = res.sclass_ids;
            jQuery.each(sclass_ids,function(key,sclass_id){
                jQuery('.favoriteScheduleSclass_'+sclass_id).addClass('fas');
            });

            jQuery.each(match_ids,function(key,match_id){
                jQuery('.favoriteScheduleMatch_'+match_id).addClass('fas');
            });
        }
    })
});
