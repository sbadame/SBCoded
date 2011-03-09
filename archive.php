<?php include('top.php'); ?>
                <?php if(have_posts()): ?> 
                    <?php while(have_posts()): the_post(); ?>
                        <div class="entry">
                            <div class="title"><?php the_title(); ?></div>
                            <div class="date"><?php the_date(); ?> </div>
                            <!-- <div class="metadata"> <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php the_author(); ?> </div> -->
                            <div class="message"><?php the_excerpt(); ?></div>
                            <div class="meta"><?php edit_post_link('Edit', ' ', ''); ?></div>
                        </div>
                    <?php endwhile; ?>
                    <div class="navlinks"> <?php posts_nav_link(); ?> </div>
                <?php else : ?>
                    <div class="error">
                    </div>
                <?php endif; ?>
<?php include('bottom.php'); ?>
