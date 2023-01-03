<?php
global $messages_template;
$menu_link            = trailingslashit( bp_loggedin_user_domain() . bp_get_messages_slug() );
$unread_message_count = messages_get_unread_count();
?>
<div id="header-messages-dropdown-elem" class="dropdown-passive dropdown-right notification-wrap messages-wrap menu-item-has-children">
   
    <section class="notification-dropdown" id="myludismessage">
        <header class="notification-header">
            <h2 class="title"><?php _e( 'Messages', 'buddyboss-theme' ); ?></h2>
        </header>

        <ul class="notification-list">
            <p class="bb-header-loader"><i class="bb-icon-l bb-icon-spinner animate-spin"></i></p>
        </ul>

		<footer class="notification-footer">
			<a href="<?php echo $menu_link ?>" class="delete-all">
				<?php _e( 'View Inbox', 'buddyboss-theme' ); ?>
				<i class="bb-icon-l bb-icon-angle-right"></i>
			</a>
		</footer>
    </section>
</div>