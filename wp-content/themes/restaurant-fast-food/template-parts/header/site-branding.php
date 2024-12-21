<?php
/*
* Display Logo and Menus details
*/
?>

<div class="headerbox">
  <div class="container">
    <div class="menu-bg">
    <div class="row">
      
        <div class="col-lg-5">
        <?php get_template_part( 'template-parts/navigation/site', 'nav-1' ); ?>
      </div>
      <div class="col-lg-2 col-md-12 align-self-center position-relative">
        <?php $restaurant_fast_food_logo_settings = get_theme_mod( 'restaurant_fast_food_logo_settings','Different Line');
        if($restaurant_fast_food_logo_settings == 'Different Line'){ ?>
          <div class="logo">
            <?php if( has_custom_logo() ) restaurant_fast_food_the_custom_logo(); ?>
            <?php if( get_theme_mod('restaurant_fast_food_site_title_text',true) == 1){ ?>
              <?php if (is_front_page() && is_home()) : ?>
                <h1 class="text-capitalize">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1> 
              <?php else : ?>
                  <p class="text-capitalize site-title">
                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </p>
              <?php endif; ?>
            <?php }?>
            <?php $restaurant_fast_food_description = get_bloginfo( 'description', 'display' );
            if ( $restaurant_fast_food_description || is_customize_preview() ) : ?>
              <?php if( get_theme_mod('restaurant_fast_food_site_tagline_text',false)){ ?>
                <p class="site-description"><?php echo esc_html($restaurant_fast_food_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($restaurant_fast_food_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-center">
                <?php if( has_custom_logo() ) restaurant_fast_food_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-center">
                <?php if(get_theme_mod('restaurant_fast_food_site_title_text',true) != ''){ ?>
                  <?php if (is_front_page() && is_home()) : ?>
                    <h1 class="text-capitalize">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                    </h1> 
                  <?php else : ?>
                      <p class="text-capitalize site-title">
                          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                      </p>
                  <?php endif; ?>
                <?php }?>
                <?php $restaurant_fast_food_description = get_bloginfo( 'description', 'display' );
                if ( $restaurant_fast_food_description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('restaurant_fast_food_site_tagline_text',false) != ''){ ?>
                    <p class="site-description"><?php echo esc_html($restaurant_fast_food_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
        <?php get_template_part( 'template-parts/navigation/responsive', 'menu' ); ?>
      </div>
      <div class="col-lg-5">
        <?php get_template_part( 'template-parts/navigation/site', 'nav-2' ); ?>
      </div>
      </div> 
    </div>
  </div> 
  <div class="clear"></div>
  </div>
</div>