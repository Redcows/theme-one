<<<<<<< HEAD
<?php get_header(); ?>
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        </div><!-- /.blog-main -->
=======
<?php get_header(); ?>
      <div class="row">
        <div class="col-sm-8 blog-main">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        </div><!-- /.blog-main -->
>>>>>>> ce08e21d6fff969a3ad3160d7749c703b7cabf97
<?php get_footer(); ?>