<?php
/*
* Display Theme menus
*/
?>

<div class="menubar mobile_menu">
	<div class="menubox align-self-center">
  		<div class="innermenubox">
          	<div class="toggle-nav mobile-menu">
    			<button onclick="restaurant_fast_food_menu_open()" class="responsivetoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','restaurant-fast-food'); ?></span></button>
  			</div>
 	 		<div id="mySidenav" class="nav sidenav">
    			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Menu', 'restaurant-fast-food' ); ?>">
	              	<?php 
	                  	wp_nav_menu( array(
		                    'theme_location' => 'primary-3',
		                    'container_class' => 'main-menu clearfix' ,
		                    'menu_class' => 'clearfix',
		                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
		                    'fallback_cb' => 'wp_page_menu',
	                  	) );
	              	?>
      				<a href="javascript:void(0)" class="closebtn mobile-menu" onclick="restaurant_fast_food_menu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','restaurant-fast-food'); ?></span></a>
        		</nav>
      		</div>
  			<div class="clearfix"></div>
		</div>
	</div>
</div>
