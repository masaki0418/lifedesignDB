<?php
/*
Template Name: Web履歴書用テンプレート
*/
?>
<?php get_header(); ?>
<div class="menuBody">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
<?php get_footer(); ?>