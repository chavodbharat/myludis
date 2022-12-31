<?php
/**
 * Footer Shop Mobilemenu
 */
  
if (is_product()) {
    $product_cl="";
}
if (is_cart()) {
    $cart_cl="active";
}
if (is_shop()) {
    $shop_cl="active";
}
if (is_checkout()) {
    $checkout_cl="active";
}
if (is_account_page()) {
    $account_cl="active";
}


if (is_wc_endpoint_url('payment-methods')) {
    $wallet_cl="active";
    
}
if (is_wc_endpoint_url('edit-address')) {
    $editaddress="current_page_item";
}

if (is_wc_endpoint_url('my-account')) {
    $myaccount ="current_page_item";
}
if (is_wc_endpoint_url('edit-account')) {
    $editaccount ="current_page_item";
}
//edit-account

if(checkCurrentPage('orders')){
    $order_cl="active"; 
    $ordersmenu ="current_page_item"; 
}

// if(checkCurrentPage('my-account')){
//     $ordersmenu ="current_page_item"; 
// }

if(checkCurrentPage('edit-address')){
    $editaddress="current_page_item";
}
if(checkCurrentPage('edit-address')){
    $editaddress="current_page_item";
}
?>
 <div class="mobileFooter">
      <div class="innerWrap" id="shop_menus">
          <div class="item">
              <a href="<?php echo home_url('shop');?>" id="shop_menu" class="<?php echo $shop_cl; ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/shop/noun-market-place.svg" alt="shop" />
                  <h5><?php _e('Shop','myludis'); ?></h5>
              </a>
          </div>
          <div class="item">
              <a href="<?php echo home_url('my-account/orders/');?>" class="<?php echo $order_cl; ?>" >
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/shop/Group1066.svg" alt="My Stuff" />
                 
                  <h5><?php _e('My Orders','myludis'); ?></h5>
              </a>
          </div>
          <div class="item">
              <!-- <a href="#!" class="logoTh" >
              </a> -->

              <div class="">
                                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="logoTh">
                                            <!-- <span data-balloon-pos="down" data-balloon="<?php _e( 'Cart', 'buddyboss-theme' ); ?>"> -->
                                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/shop/cart.svg" alt="" /> -->
                                            <i class="bb-icon-l bb-icon-shopping-cart customicon"></i>
                                                <?php
                                                if ( is_object( WC()->cart ) ) {
                                                $wc_cart_count = wc()->cart->get_cart_contents_count();
                                                if( $wc_cart_count != 0 ) { ?>
                                                    <span class="customcount count"><?php echo wc()->cart->get_cart_contents_count(); ?></span>
                                                <?php }
                                                }
                                                ?>
                                            <!-- </span> -->
                            </a>
                            <section class="notification-dropdown">
                                <header class="notification-header">
                                    <h2 class="title"><?php esc_html_e( 'Shopping Cart', 'buddyboss-theme' ); ?></h2>
                                    <?php
                                    if ( is_object( WC()->cart ) ) {
                                        $wc_cart_count = wc()->cart->get_cart_contents_count();
                                        if ( 0 !== $wc_cart_count ) {
                                            ?>
                                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="header-view-cart-link">
                                                <?php esc_html_e( 'View Cart', 'buddyboss-theme' ); ?>
                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </header>
                                <div class="header-mini-cart">
                                    <?php
                                    if ( is_object( WC()->cart ) ) {
                                        woocommerce_mini_cart();
                                    }
                                    ?>
                                </div>
                            </section>
            </div>
          </div>
          <div class="item">
              <a href="<?php echo home_url('my-account/payment-methods/') ?>" class="<?php echo $wallet_cl; ?>" >
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/shop/wallet.svg" alt="Wallet" />
                  <h5><?php _e('Wallet','myludis'); ?></h5>
              </a>
          </div>
         <div class="item moreWrap">
              <a href="#!" class="moreBtn">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svg/shop/more-o.svg" alt="More" />
                 <h5><?php _e('More','myludis'); ?></h5>
              </a>
              <div class="moreDrop">
                <ul>
                    <li><a href="<?php echo home_url('my-account'); ?>" class="<?php echo $myaccount; ?>"><?php _e('My Account','myludis'); ?> <i class="bb-icon-l bb-icon-brand-aperture"></i></a></li>
                    <li><a href="<?php echo home_url('my-account/edit-account/'); ?>" class="<?php echo  $editaccount; ?>"><?php _e('Account details','myludis'); ?> <i class="bb-icon-l bb-icon-brand-aperture"></i></a></li>
                    <li><a href="<?php echo home_url('my-account/orders/'); ?>" class="<?php echo $ordersmenu; ?>"><?php _e('My Order','myludis'); ?>  <i class="bb-icon-l bb-icon-brand-apple"></i></a></li>
                    <li><a href="<?php echo home_url('my-account/edit-address/'); ?>" class="<?php echo $editaddress; ?>"><?php _e('Address','myludis'); ?>  <i class="bb-icon-l bb-icon-award"></i></a></li>
                </ul>
              </div>
          </div>
      </div>
  </div>