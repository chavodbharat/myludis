/* This is your custom Javascript */

jQuery(document).ready(function($){
    jQuery('.appWrapper .mobile-header-icon a').click(function(e){
        e.preventDefault();
        jQuery('.appWrapper .mobile-header-icon a').removeClass('tab-show');
        jQuery(this).addClass('tab-show');
        const activeTab = $(this).attr('href')
        const activeTabMenu = $(this).attr('menu-active')
        // console.log(activeTabMenu);
        // console.log('.mobile_icon_menu' + activeTabMenu);

        jQuery('.appWrapper .tabContentWrap .tabContent').removeClass('content-show');
        jQuery('.appWrapper .tabContentWrap .tabContent' + activeTab).addClass('content-show');
        jQuery('.mobile_icon_menu').removeClass('menu-show');
        jQuery('.mobile_icon_menu' + activeTabMenu).addClass('menu-show');

    });
    jQuery('.mobileFooter > .innerWrap > .item.moreWrap .moreBtn').on('click', function(){
        jQuery(this).next('.moreDrop').toggleClass('show');
    });
    jQuery('.mobileFooter .innerWrap .item a.logoTh_01').on('click', function(){
       // console.log('logo clicked')
        jQuery('#bp-nouveau-activity-form').toggleClass('open-cs').addClass('modal-popup');
        jQuery('#bp-nouveau-activity-form').addClass('modal-popup');
        jQuery('#bp-nouveau-activity-form .activity-form').addClass('focus-in');

        setTimeout(function(){
            jQuery('#whats-new-form #whats-new-toolbar').remove('#whats-new-toolbar');
            jQuery('#whats-new-form').append('<div class="whats-new-form-footer"><div id="whats-new-toolbar"><div class="post-elements-buttons-item post-media media-support"><a href="#" id="activity-media-button" class="toolbar-button bp-tooltip" data-bp-tooltip-pos="up-left" data-bp-tooltip="Attach photo"><i class="bb-icon-l bb-icon-camera"></i></a></div></div><div id="activity-form-submit-wrapper"><div id="whats-new-submit" class="in-profile"><input type="submit" id="aw-whats-new-submit" class="button" name="aw-whats-new-submit" value="Post"><input type="reset" id="aw-whats-new-reset" class="text-button small" value="Cancel"><input type="button" id="discard-draft-activity" class="button outline" name="discard-draft-activity" value="Discard Draft"></div></div></div>');
            jQuery('#bp-nouveau-activity-form ').trigger('click');
        },100)
    });
    jQuery('.messageIcon a').click(function(e){
      
        jQuery('.moreDropMessage').css({"display": "block"});
        if (!jQuery('.moreDropMessage').hasClass( "openmodel" ) ) {
            jQuery('.moreDropMessage').addClass('openmodel');
            jQuery('.messageIcon #header-messages-dropdown-elem').addClass('selected');
        }else{
              jQuery('.moreDropMessage').removeClass('openmodel');
              jQuery('.messageIcon #header-messages-dropdown-elem').removeClass('selected');
        }
        
    });
   // bp-nouveau-activity-form
   /*jQuery('.add_activity_post').click(function(e){
    // alert('test');
       //  jQuery('#whats-new-form').trigger('click');
        jQuery('#bp-nouveau-activity-form').trigger('click');
        jQuery('#whats-new').trigger('click');
        jQuery('#whats-new-form').addClass('focus-in');
        jQuery('#whats-new').addClass('medium-editor-element');
        jQuery('#whats-new').css({"resize": "vertical", "height": "auto"});
        //resize: vertical; height: auto;

   });*/
   
}); 