<?php include('top.php'); ?>
<!-- starting page.php -->
<?php if(have_posts()): ?> 
    <?php while(have_posts()): the_post(); ?>
        <div class="entry">
            <div class="title"><?php the_title(); ?></div>
            <div class="date"> Last edited: <?php the_date(); ?></div>
            <div class="message"><?php the_content(); ?></div>
            <div class="pages"><?php link_pages('<p><strong>Pages:</strong>',"</p>",'number'); ?></div>
            <div class="meta"><?php edit_post_link('Edit', ' ', ''); ?></div>
            <div class="comments-template"> <?php comments_template(); ?> </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <div class="error"> </div>
<?php endif; ?>
<!-- ending page.php -->
<?php include('bottom.php'); ?>
