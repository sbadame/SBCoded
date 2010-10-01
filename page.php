<?php get_header(); ?>
<body>
    <div id="main">
        <div id="sublayer">
            <span class="surround">
                <?php include("heading.php"); ?>

            <!-- Content -->
            <div id="content">
                <span class="surround">
                    <?php if(have_posts()): ?> 
                        <?php while(have_posts()): the_post(); ?>
                            <div class="entry">
                                <div class="title"><?php the_title(); ?></div>
                                <div class="date"> Last edited: <?php the_date(); ?></div>
                                <!-- <div class="metadata"> <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php the_author(); ?> </div> -->
                                <div class="message"><?php the_content(); ?></div>
                                <div class="pages"><?php link_pages('<p><strong>Pages:</strong>',"</p>",'number'); ?></div>
                                <div class="meta"><?php edit_post_link('Edit', ' ', ''); ?></div>
                                <div class="comments"> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="error">
                        </div>
                    <?php endif; ?>
                </span><!-- close content decoration -->
            </div> <!-- close content -->
            <?php get_sidebar(); ?>
            <?php get_footer(); ?>
            </span> <!-- close sublayer decoration -->
        </div> <!-- close sublayer -->
    </div> <!-- close main -->
</body>
</html>
