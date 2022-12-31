<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuddyBoss_Theme
 */

?>

<?php do_action( THEME_HOOK_PREFIX . 'end_content' ); ?>
<?php

$bp  = buddypress();
			$current_component = !empty($bp->current_component)
				? $bp->current_component
				: false;

if ($current_component !='activity' && !empty($current_component)) {
	?>
		<?php bp_nouveau_before_activity_directory_content(); ?>

		<?php if ( is_user_logged_in() ) : ?>

			<?php bp_get_template_part( 'activity/post-form' ); ?>

		<?php endif; ?>

		<?php bp_nouveau_template_notices(); ?>
	<?php
}				
?>


</div><!-- .bb-grid -->
</div><!-- .container -->
</div><!-- #content -->

<?php do_action( THEME_HOOK_PREFIX . 'after_content' ); ?>

<?php do_action( THEME_HOOK_PREFIX . 'before_footer' ); ?>
<?php do_action( THEME_HOOK_PREFIX . 'footer' ); ?>
<?php do_action( THEME_HOOK_PREFIX . 'after_footer' ); ?>

</div><!-- #page -->

<?php do_action( THEME_HOOK_PREFIX . 'after_page' ); ?>

<?php wp_footer(); ?>

</body>
</html>
