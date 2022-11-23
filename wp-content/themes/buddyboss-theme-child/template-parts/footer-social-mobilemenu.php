<?php
/**
 * Footer Social Mobilemenu
 */
$userID = get_current_user_id();
?>
 <div class="mobileFooter">
      <div class="innerWrap">
          <div class="item">
              <a href="<?php echo bp_core_get_user_domain($userID); ?>activity" >
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-activity.svg" alt="Activity" />
              <!-- <img src="/wp-content/uploads/2022/10/foot-icon-activity.svg" alt="" /> -->
                  
                  <h5><?php _e('Activity','myludis'); ?></h5>
              </a>
          </div>
          <div class="item">
          <a href="<?php echo bp_core_get_user_domain($userID); ?>messages/compose/" >
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-message.svg" alt="Message" />
                  <h5><?php _e('Message','myludis'); ?></h5>
              </a>
          </div>
          <div class="item">
              <a href="#!" class="logoTh" >
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-footerLogo.svg" alt="Activity" />
              </a>
          </div>
          <div class="item">
              <a href="<?php echo bp_core_get_user_domain($userID); ?>friends" >
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-friends.svg" alt="Friends" />
                 
                  <h5><?php _e('Friends','myludis'); ?></h5>
              </a>
          </div>
          <div class="item moreWrap">
              <a href="#!" class="moreBtn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-more-o.svg" alt="More" />
                 <h5><?php _e('More','myludis'); ?></h5>
              </a>
              <div class="moreDrop">
                <ul>
                    <li><a href="#!">How it works <i class="bb-icon-l bb-icon-brand-aperture"></i></a></li>
                    <li><a href="#!">Support <i class="bb-icon-l bb-icon-brand-apple"></i></a></li>
                    <li><a href="#!">Notification <i class="bb-icon-l bb-icon-award"></i></a></li>
                </ul>
              </div>
          </div>
      </div>
  </div>