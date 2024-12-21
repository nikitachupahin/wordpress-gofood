<?php
/**
 * Template part for displaying home page content
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

?>

<div id="main-content" class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
  		<?php the_content(); ?>
  	<?php endwhile; // end of the loop. ?>
</div>