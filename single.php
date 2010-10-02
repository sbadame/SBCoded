<?php get_header(); ?>
<body>
    <div id="main">
        <div id="sublayer">
            <span class="surround">
                <?php include("heading.php"); ?>
            <!-- Content -->
            <div id="content">
                <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                <?php if(have_posts()): ?> 
                    <?php while(have_posts()): the_post(); ?>
                        <div class="entry">
                            <div class="title"><?php the_title(); ?></div>
                            <div class="date"><?php the_date(); ?> </div>
                            <div class="message"><?php the_content(); ?></div>
                            <div class="meta"><?php edit_post_link('Edit', ' ', ''); ?></div>
                            <div class="comments"> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> </div>
                        </div>
                        <div class="comments-template">
                            <?php comments_template(); ?>
                        </div>
                    <?php endwhile; ?>
                    <div class="navlinks"> <?php posts_nav_link(); ?> </div>
                <?php else : ?>
                    <div class="error">
                    </div>
                <?php endif; ?>
                </div></div></div></div></div></div></div></div> <!-- close content decoration -->
            </div> <!-- close content -->
            <?php get_sidebar(); ?>
            <?php get_footer(); ?>
            </div></div> </div> </div> </div> </div> </div> </div></div> <!-- close sublayer decoration -->
        </div> <!-- close sublayer -->
    </div> <!-- close main -->
</body>
</html>
