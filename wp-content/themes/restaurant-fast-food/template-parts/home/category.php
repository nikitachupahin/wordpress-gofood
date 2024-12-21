<?php
/**
 * Template part for displaying product section
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

?>

<?php if( get_theme_mod( 'restaurant_fast_food_show_hide_product_section') != '') { ?>
<section id="product_cat_slider">
    <div class="container">
        <?php if( get_theme_mod('restaurant_fast_food_category_small_heading') != ''){ ?>
            <p class="text-center short_head"><?php echo esc_html(get_theme_mod('restaurant_fast_food_category_small_heading','')); ?></p>
        <?php }?>
        <?php if( get_theme_mod('restaurant_fast_food_product_heading') != ''){ ?>
            <h2 class="text-center pb-3"><?php echo esc_html(get_theme_mod('restaurant_fast_food_product_heading','')); ?></h2>
        <?php }?>
        <div class="owl-carousel">
            <?php
            $product_cat_id = get_theme_mod('restaurant_fast_food_prod_cat');
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 10,
                'product_cat'    => $product_cat_id
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="product_cat_box text-center py-5 px-3">
                        <a href="<?php the_permalink(); ?>" class="product-img">
                            <?php if (has_post_thumbnail()) : ?>
                              <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <div class="product-color"></div>
                            <?php endif; ?>
                        </a>
                    <a href="<?php the_permalink(); ?>"><p class="pt-3"><?php the_title(); ?></p></a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php }?>
