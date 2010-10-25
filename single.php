<?php include('top.php'); ?>
<!-- start single.php -->
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <div class="entry">
            <div class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="date"><?php the_date(); ?> </div>
            <div class="message"><?php the_content(); ?></div>
            <div class="meta"><?php edit_post_link('Edit', ' ', ''); ?></div>
            <div class="comments-template"> <?php comments_template(); #Must be call from within 'The Loop' ?> </div>
        </div>
    <?php endwhile; ?>
    <div class="navlinks"> <?php posts_nav_link(); ?> </div>
<?php else : ?>
    <div class="error">
    </div>
<?php endif; ?>
<!-- end single.php -->
<?php include('bottom.php'); ?>
