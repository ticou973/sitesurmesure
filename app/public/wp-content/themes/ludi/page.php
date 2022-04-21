<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php the_post_thumbnail(); ?>

<div id="ludi-main">
    <div id="ludi-content">

        <?php the_content(); ?>

         <p>Voic la note attribuée : <?php the_field( 'notes'); ?></p>



        <?php endwhile; endif; ?>
    </div>


  <aside class="site__sidebar">
    <ul>
		<?php dynamic_sidebar( 'blog-sidebar' ); ?>
    </ul>
  </aside>

</div>

<?php get_footer(); ?>
