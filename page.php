<?php get_header(); ?>
<body>
    <div id="main">
        <a href="<?php bloginfo('url'); ?>"><img id="header" width="375" height="55" alt="Sandro's Code" src="<?php bloginfo('template_directory'); ?>/images/header.gif" /></a>
        <div id="sublayer">
            <span class="surround">
                <div id="navlayer">
                    <span class="surround">
                        <!-- Grabbing the page right now -->
                        <ul>
                            <?php
                                $output = wp_list_pages('echo=0&title_li_=');
                                preg_match_all('!<a\s*href="(.*?)"\s*title="(.*?)">(.*?)</a>!', $output, $out, PREG_SET_ORDER);
                                $i = 0;
                                foreach ($out as $page){
                                    if ( $i == count($out) - 1){
                                        print("\t\t\t\t<li><a id='lastnavitem' href='$page[1]'>$page[3]</a></li>\n");
                                    }else{
                                        print("\t\t\t\t<li><a href='$page[1]'>$page[3]</a></li>\n");
                                    }
                                    $i++;
                                }
                            ?>
                        </ul>
                    </span>
                </div>

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
