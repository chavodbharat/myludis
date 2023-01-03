<?php
/**
 * Footer Social Mobilemenu
 */
$userID = get_current_user_id();
$show_messages      = buddyboss_theme_get_option( 'desktop_component_opt_multi_checkbox', 'desktop_messages' ) && is_user_logged_in();

$bp  = buddypress();
$current_component = !empty($bp->current_component)
    ? $bp->current_component
    : false;
 switch ($current_component) {
    case 'activity':
        $a_activecl="active";
        break;
    case 'messages':
        $m_activecl="active";
        break;   
    case 'groups':
        $g_activecl="active";
    break; 
    case 'forums':
        $for_activecl="active";
    break; 
    case 'blogs':
        $activecl="active";
    break; 
    case 'friends':
        $f_activecl="active";
    break;  
    case 'settings':
        $activecl="active";
    break; 
    case 'xprofile':
        $activecl="active";
    break;    
    
    default:
        # code...
        break;
 }   
?>
 <div class="mobileFooter">
      <div class="innerWrap social-menu">
          <div class="item">
              <a href="<?php echo bp_core_get_user_domain($userID); ?>activity" class="<?php echo $a_activecl; ?>" >
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-activity.svg" alt="Activity" />
              <!-- <img src="/wp-content/uploads/2022/10/foot-icon-activity.svg" alt="" /> -->
                  
                  <h5><?php _e('Activity','myludis'); ?></h5>
              </a>
          </div>
          <!-- <div class="item"> -->
                <!-- <a href="#!" class="<?php //echo $m_activecl; ?>" >
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-message.svg" alt="Message" />
                    <h5><?php //_e('Message','myludis'); ?></h5>
                </a> -->

              <!-- <a href="#!" class="moreBtn">
                <img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-more-o.svg" alt="More" />
                 <h5><?php //_e('More','myludis'); ?></h5>
              </a> -->
              <!-- <div class="moreDrop">
                <ul>
                    <li><a href="<?php //echo bp_core_get_user_domain($userID); ?>messages/compose/">Message Compose <i class="bb-icon-l bb-icon-brand-aperture"></i></a></li>
                    <li><a href="<?php //echo bp_core_get_user_domain($userID); ?>messages/compose/" class="<?php //echo $for_activecl; ?>">Support <i class="bb-icon-l bb-icon-brand-apple"></i></a></li>
                    <li><a href="<?php //echo bp_core_get_user_domain($userID); ?>messages/compose/">Notification <i class="bb-icon-l bb-icon-award"></i></a></li>
                </ul>
              </div> -->
          <!-- </div> -->
          <div class="item moreWrap">
          <a href="#!" class="<?php echo $m_activecl; ?> moreBtn">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-message.svg" alt="Message" />
                    <h5><?php _e('Message','myludis'); ?></h5>
                </a>
                <div class="moreDropMessage">
                    <?php
                        if ( $show_messages && function_exists( 'bp_is_active' ) && bp_is_active( 'messages' ) ) :
                            get_template_part('template-parts/myludismessages-dropdown');
                        endif;
                ?>   
              </div>
          </div>
          <div class="item add_activity_post" id="whats-new-form_01">
              <a href="#!" class="logoTh" >
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/social/foot-icon-footerLogo.svg" alt="Activity" />
                 <span class="plus-icon"><i class="bb-icon-plus bb-icon-l"></i></span>
              </a>
              
          </div>
          <div class="item">
              <a href="<?php echo bp_core_get_user_domain($userID); ?>friends" class="<?php echo $f_activecl; ?>" >
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
                    <!-- <li><a href="#!">How it works <i class="bb-icon-l bb-icon-brand-aperture"></i></a></li> -->
                    <li><a href="<?php echo home_url(); ?>/forums" class="<?php echo $for_activecl; ?>"><?php _e('Support','myludis'); ?> <i class="bb-icon-l bb-icon-brand-apple"></i></a></li>
                    <!-- <li><a href="#!">Notification <i class="bb-icon-l bb-icon-award"></i></a></li> -->
                </ul>
              </div>
          </div>
      </div>
  </div>