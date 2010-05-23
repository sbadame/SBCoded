<?php get_header(); ?>
<body>
    <div id="main">
        <a href="<?php bloginfo('url'); ?>"><img id="header" width="375" height="55" alt="Sandro's Code" src="<?php bloginfo('template_directory'); ?>/images/header.gif" /></a>
        <div id="sublayer">
            <span class="surround">
                <div id="navlayer">
                    <span class="surround">
                        <!-- Grabbing the list of pages now -->
                        <ul>
                            <?php
                                $output = wp_list_pages('echo=0&title_li_=');
                                preg_match_all('!<a\s*href="(.*?)"\s*title="(.*?)">(.*?)</a>!', $output, $out, PREG_SET_ORDER);
                                $i = 0;
                                foreach ($out as $page){
                                    if ( $i == count($out) - 1){
                                        print("<li><a id='lastnavitem' href='$page[1]'>$page[3]</a></li>");
                                    }else{
                                        print("<li><a href='$page[1]'>$page[3]</a></li>");
                                    }
                                    $i++;
                                }
                            ?>
                        </ul>
                    </span>
                </div>
                <!-- <span id="meta"> <?php include(TEMPLATEPATH . '/searchform.php'); ?><?php wp_meta(); ?> </span> -->

                <!-- Content -->
                <div id="content">
                    <span class="surround">
                        <?php if(have_posts()): ?> 
                            <?php while(have_posts()): the_post(); ?>
                                <div class="entry">
                                    <div class="title"><?php the_title(); ?></div>
                                    <div class="info">
                                        <span>
                                            <?php
                                                $date_format = 'F jS, Y';
                                                $posted = get_the_time($date_format);
                                                $modified = get_the_modified_time('F jS, Y');
                                                echo $posted;
                                                if ($posted != $modified){
                                                    echo " Last edited: $modified";
                                                }
                                                edit_post_link('Edit', '&nbsp;|&nbsp;', ''); 
                                            ?>
                                        </span>
                                    </div>
                                    <!-- <div class="metadata"> <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php the_author(); ?> </div> -->
                                    <div class="message"><?php the_content(); ?></div>
                                    <div class="comments"> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> </div>
                                </div>
                            <?php endwhile; ?>
                            <div class="navlinks"> <?php posts_nav_link(); ?> </div>
                        <?php else : ?>
                            <div class="error">
                            </div>
                        <?php endif; ?>
                    </span>
                </div> <!-- close content -->
                <?php get_sidebar(); ?>
                <?php get_footer(); ?>
            </span> <!-- close sublayer decoration -->
        </div> <!-- close sublayer -->
    </div> <!-- close main -->
</body>
</html>
