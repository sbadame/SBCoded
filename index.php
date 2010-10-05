<?php include('top.php'); ?>
                        <?php if(have_posts()): while(have_posts()): the_post();  ?> 
                            <div class="entry">
                                <div class="title"><?php the_title(); ?></div>
                                <div class="info"> <?php
                                    $date_format = 'F jS, Y';
                                    $posted = get_the_time($date_format);
                                    $modified = get_the_modified_time($date_format);
                                    print $posted;
                                    if ($posted != $modified){
                                        print " Last edited: $modified";
                                    }
                                    edit_post_link('Edit', '&nbsp;|&nbsp;', '');?> </div>
                                <!-- <div class="metadata"> <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php the_author(); ?> </div> -->
                                <div class="message"><?php the_content(); ?></div>
                                <div class="comments"> <?php comments_popup_link('No Comments Yet &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> </div>
                            </div>
                        <?php endwhile; ?>
                            <div class="navlinks"> <?php posts_nav_link(); ?> </div>
                        <?php else : ?>
                            <div class="error"> </div>
                        <?php endif; ?>
<?php include('bottom.php'); ?>
