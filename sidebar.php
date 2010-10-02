            <div id="sidebar">
                    <span class="surround">
                        <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                        <div style="margin-top:10px">
                            <?php
                                    $args = array(
                                        'class' => 'sidebarlinks',
                                        'title_before' => '<span class="category">',
                                        'title_after' => '</span>',
                                        'category_before' => '',
                                        'category_after' => ''
                                    );
                                    wp_list_bookmarks($args);
                            ?>
                            <?php print(_('Archives')."\n"); ?>
                            <ul>
                                <?php wp_get_archives('type=monthly&echo=1'); ?>
                            </ul>
                            <?php>
                                    wp_register('',''); 
                                    print("<br>");
                                    wp_loginout(); 
                                    wp_meta(); 
                            ?>
                        </div>
                    </span>
            </div>
