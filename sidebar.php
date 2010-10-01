            <div id="sidebar">
                    <span class="surround">
                        <?php include(TEMPLATEPATH . '/searchform.php'); ?>
                        <!-- <?php print(_('Categories')."\n"); ?> 
                        <ul>
                            <?php wp_list_cats('sort_column=name&optioncount=1&heirarchical=0'); ?>
                        </ul>-->
                        <div style="margin-top:10px">
                            <?php
                                    wp_list_bookmarks( 'category_before=&category_after=&title_before=&title_after='  );
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
