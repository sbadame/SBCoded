<?php get_header(); ?>

            <!-- Content -->
            <div id="content">
                <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                <?php if(have_posts()): ?> 
                    <?php while(have_posts()): the_post(); ?>
                        <div class="entry">
                            <div class="title"><?php the_title(); ?></div>
                            <div class="date"><?php the_date(); ?> </div>
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
                </div></div></div></div></div></div></div></div> <!-- close content decoration -->
            </div> <!-- close content -->
            <?php get_sidebar(); ?>
            <?php get_footer(); ?>
            </div></div> </div> </div> </div> </div> </div> </div></div> <!-- close sublayer decoration -->
        </div> <!-- close sublayer -->
    </div> <!-- close main -->
</body>
</html>
