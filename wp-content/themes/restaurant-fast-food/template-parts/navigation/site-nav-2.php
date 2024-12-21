<?php
/*
* Display Theme menus
*/
?>

<div class="menubar">
	<div class="menubox align-self-center">
  		<div class="innermenubox">
 	 		<div id="mySidenav" class="nav right-menu">
    			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Right Side Menu', 'restaurant-fast-food' ); ?>">
	              	<?php 
	                  	wp_nav_menu( array(
		                    'theme_location' => 'primary-2',
		                    'container_class' => 'main-menu clearfix' ,
		                    'menu_class' => 'clearfix',
		                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
		                    'fallback_cb' => 'wp_page_menu',
	                  	) );
	              	?>
        		</nav>
      		</div>
  			<div class="clearfix"></div>
		</div>
	</div>
</div>
