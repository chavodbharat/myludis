<?php
$show_search        = buddyboss_theme_get_option( 'desktop_component_opt_multi_checkbox', 'desktop_header_search' );
$show_messages      = buddyboss_theme_get_option( 'desktop_component_opt_multi_checkbox', 'desktop_messages' ) && is_user_logged_in();
$show_notifications = buddyboss_theme_get_option( 'desktop_component_opt_multi_checkbox', 'desktop_notifications' ) && is_user_logged_in();
$show_shopping_cart = buddyboss_theme_get_option( 'desktop_component_opt_multi_checkbox', 'desktop_shopping_cart' );
$header_style       = (int) buddyboss_theme_get_option( 'buddyboss_header' );
$profile_dropdown   = buddyboss_theme_get_option( 'profile_dropdown' );


if ( 'off' !== $profile_dropdown ) {
			
			if ( is_user_logged_in() ) :
				?>
				<div class="user-wrap user-wrap-container menu-item-has-children">
					<?php
					$current_user = wp_get_current_user();
					$user_link    = function_exists( 'bp_core_get_user_domain' ) ? bp_core_get_user_domain( $current_user->ID ) : get_author_posts_url( $current_user->ID );
					$display_name = function_exists( 'bp_core_get_user_displayname' ) ? bp_core_get_user_displayname( $current_user->ID ) : $current_user->display_name;
					?>

					<a class="user-link" href="<?php echo esc_url( $user_link ); ?>">
						<?php
						if ( 'name_and_avatar' === $profile_dropdown ) {
							?>
							<span class="user-name"><?php echo esc_html( $display_name ); ?></span><i class="bb-icon-l bb-icon-angle-down"></i>
							<?php
						}
						echo get_avatar( get_current_user_id(), 100 );
						?>
					</a>

					<div class="sub-menu">
						<div class="wrapper">
							<ul class="sub-menu-inner">
								<li>
									<a class="user-link" href="<?php echo esc_url( $user_link ); ?>">
										<?php echo get_avatar( get_current_user_id(), 100 ); ?>
										<span>
											<span class="user-name"><?php echo esc_html( $display_name ); ?></span>
											<?php if ( function_exists( 'bp_is_active' ) && function_exists( 'bp_activity_get_user_mentionname' ) ) : ?>
												<span class="user-mention"><?php echo '@' . esc_html( bp_activity_get_user_mentionname( $current_user->ID ) ); ?></span>
											<?php else : ?>
												<span class="user-mention"><?php echo '@' . esc_html( $current_user->user_login ); ?></span>
											<?php endif; ?>
										</span>
									</a>
								</li>
								<?php
								if ( function_exists( 'bp_is_active' ) ) {
									$header_menu = wp_nav_menu(
										array(
											'theme_location' => 'header-my-account',
											'echo'        => false,
											'fallback_cb' => '__return_false',
										)
									);
									if ( ! empty( $header_menu ) ) {
										wp_nav_menu(
											array(
												'theme_location' => 'header-my-account',
												'menu_id' => 'header-my-account-menu',
												'container' => false,
												'fallback_cb' => '',
												'walker'  => new BuddyBoss_SubMenuWrap(),
												'menu_class' => 'bb-my-account-menu',
											)
										);
									} else {
										do_action( THEME_HOOK_PREFIX . 'header_user_menu_items' );
									}
								} else {
									do_action( THEME_HOOK_PREFIX . 'header_user_menu_items' );
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<?php
			endif;
		}
