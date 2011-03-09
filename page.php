<?php include('top.php'); ?>
<!-- starting page.php -->
<?php if(have_posts()): ?> 
    <?php while(have_posts()): the_post(); ?>
        <div class="entry">
            <div class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
            <span class="date"> Last edited: <?php the_date(); ?></span>
            <span class="meta"><?php edit_post_link('Edit', '&nbsp;|&nbsp;', ''); ?></span>
            <div class="message"><?php the_content(); ?></div>
            <div class="pages"><?php link_pages('<p><strong>Pages:</strong>',"</p>",'number'); ?></div>
            <?php if (!in_array("nocomments", get_post_custom_keys())):  ?>
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                var disqus_shortname = 'sbcoded';
                var disqus_url = '<?php echo get_permalink(); ?>';
                <?php /* * * DON'T EDIT BELOW THIS LINE * * */ ?>
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <div class="error"> </div>
<?php endif; ?>
<!-- ending page.php -->
<?php include('bottom.php'); ?>
