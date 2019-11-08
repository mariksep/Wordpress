<?php get_header();?>
<div class="content-row">

<main>
<?php if( have_posts()):?>
<?php while(have_posts()):?>

 <?php   the_post();?>
 <h2><?php the_title(); ?></h2>
  <?php  the_content();?>
<?php endwhile; ?>
<?php endif; ?>

<h3 class"postaukset"> Uudet postaukset</h3>

<?php

$recent_posts = wp_get_recent_posts(array('numberposts' =>'4'));
 foreach($recent_posts as $post) :
?>

<article>
<a href='<?php echo get_permalink($post['ID']); ?>'>
 <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
<h4> <?php echo $post ['post_title']; ?> </h4>
<p> <?php echo substr($post['post_excerpt'],0 ,20) ?> Lue lisää...</p>
</a>
</article>
<?php endforeach; wp_reset_query(); ?>

</main>
</div>

<?php
get_footer();
?>
