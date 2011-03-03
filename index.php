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
        <div class="comments"> <a href="<?php the_permalink(); ?>#disqus_thread">Loading Comments...</a> </div>
    </div>
<?php endwhile; ?>
<div class="navlinks"> <?php posts_nav_link(); ?> </div>
<?php else : ?>
    <div class="error"> </div>
<?php endif; ?>
<!--  end index -->
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'sbcoded'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
<?php include('bottom.php'); ?>
