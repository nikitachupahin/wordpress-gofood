<?php
/**
 * Template part for displaying slider section
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

?>
<?php $static_image= get_stylesheet_directory_uri() . '/assets/images/header_img.png'; ?>
<?php if( get_theme_mod( 'restaurant_fast_food_slider_arrows') != '') { ?>

<section id="slider">
  <div class="slide-box">
    <div class="container">
        <div class="owl-carousel">
            <?php 
            $restaurant_fast_food_slide_pages = array();
            for ($restaurant_fast_food_count = 1; $restaurant_fast_food_count <= 4; $restaurant_fast_food_count++) {
                $restaurant_fast_food_mod = intval(get_theme_mod('restaurant_fast_food_slider_page' . $restaurant_fast_food_count));
                if ('page-none-selected' != $restaurant_fast_food_mod) {
                    $restaurant_fast_food_slide_pages[] = $restaurant_fast_food_mod;
                }
            }
            if (!empty($restaurant_fast_food_slide_pages)) :
                $restaurant_fast_food_args = array(
                    'post_type' => 'page',
                    'post__in' => $restaurant_fast_food_slide_pages,
                    'orderby' => 'post__in'
                );
                $restaurant_fast_food_query = new WP_Query($restaurant_fast_food_args);
                if ($restaurant_fast_food_query->have_posts()) :
                    while ($restaurant_fast_food_query->have_posts()) : $restaurant_fast_food_query->the_post(); ?>
                      <div class="row">
                          <div class="col-lg-6 col-md-6 align-self-center">
                              <div class="inner_content">
                                  <?php if (get_theme_mod('restaurant_fast_food_slider_short_heading') != '') { ?>
                                      <p class="slider-top"><?php echo esc_html(get_theme_mod('restaurant_fast_food_slider_short_heading', '')); ?></p>
                                  <?php } ?>
                                  <h1><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h1>
                                  <p><?php echo esc_html(wp_trim_words(get_the_content(), 25)); ?></p>
                                  <div class="search-bg">
                                      <div class="product-search">
                                          <?php if (get_theme_mod('restaurant_fast_food_search_icon', true) != '') { ?>
                                              <div class="search_inner">
                                                  <?php if (class_exists('woocommerce')) { ?>
                                                      <?php get_product_search_form(); ?>
                                                  <?php } ?>
                                              </div>
                                          <?php } ?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 align-self-center">
                              <div class="slider-thumbbx">
                                  <?php if (has_post_thumbnail()) : ?>
                                      <?php the_post_thumbnail(); ?>
                                  <?php else : ?>
                                      <div class="slide-thumbbx-color"></div>
                                  <?php endif; ?>
                              </div>
                          </div>
                      </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <div class="no-postfound"></div>
                <?php endif;
            endif;
            ?>
        </div>
    </div>
  </div>
    <div class="clearfix"></div>
</section>



<?php } ?>
