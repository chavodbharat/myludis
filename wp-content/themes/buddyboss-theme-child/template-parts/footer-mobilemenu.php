<?php 
/**
 * Common Footer menu
 */

?>
<?php
$bp  = buddypress();
$current_component = !empty($bp->current_component)
    ? $bp->current_component
    : false;

    
    if (isset($current_component) && !empty($current_component)) {
        $social_tabShow ='menu-show';
        $shop_tabShow="";
        $lab_tabshow="";
    }else if (is_woocommerce()){
         $shop_tabShow='menu-show';
         $social_tabShow="";
         $lab_tabshow="";
    }else if(checkCurrentPage('lab')){ 
        $lab_tabshow="menu-show";
        $social_tabShow="";
        $shop_tabShow="";
}else {
        $social_tabShow ='menu-show';
} ?>
<div class="mobile_menu_item">
        <?php //if (is_woocommerce()) { ?>
                <div class="mobile_icon_menu mobile-shop-menu <?php echo  $shop_tabShow;  ?>" id="show-cartmenu" >
                        <?php get_template_part( 'template-parts/footer-shop-mobilemenu' ); ?> 
                 </div>
                
        <?php //}else { ?>
                <div class="mobile_icon_menu mobile-social-menu <?php echo $social_tabShow;  ?>" id="show-socialmenu">
                        <?php get_template_part( 'template-parts/footer-social-mobilemenu' ); ?> 
                 </div>
      <?php //} ?>
       
        <div class="mobile_icon_menu mobile-lab-menu <?php echo $lab_tabshow; ?>" id="show-labmenu">
                <?php get_template_part( 'template-parts/footer-labs-mobilemenu' ); ?> 
        </div>
</div>        
