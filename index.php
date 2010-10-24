<?php include('top.php'); ?>
<!-- start index.php -->
<?php if(have_posts()): while(have_posts()): the_post();  ?> 
    <div class="entry">
        <div class="title"><a title="Click here to read more." href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
        <div class="info"> <?php
            $date_format = 'F jS, Y';
            $posted = get_the_time($date_format);
            $modified = get_the_modified_time($date_format);
            print $posted;
            if ($posted != $modified){ print " Last edited: $modified"; }
            edit_post_link('Edit', '&nbsp;|&nbsp;', '');?> </div>
        <div class="message"><?php the_content(); ?></div>
        <div class="comments"> <?php comments_popup_link('No Comments Yet &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> </div>
    </div>
<?php endwhile; ?>
<div class="navlinks"> <?php posts_nav_link(); ?> </div>
<?php else : ?>
    <div class="error"> </div>
<?php endif; ?>
<!--  end index -->
<?php include('bottom.php'); ?>
