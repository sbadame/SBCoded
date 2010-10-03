            <div id="sidebar">
                    <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                            <?php print("<span class=\"category\">"._('Archives')."</span>\n"); ?>
                            <ul>
                                <?php wp_get_archives('type=monthly&echo=1'); ?>
                            </ul>
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
                            <?php
                                    print("<span class='category'>");
                                    wp_register('',''); 
                                    print("<br>");
                                    wp_loginout(); 
                                    wp_meta(); 
                                    print("</span>");
                            ?>
                    </div></div></div></div></div></div></div></div>
            </div>
