            <div id="sidebar" style="float:right;">
                <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                    <ul>
                        <li>
                            <?php _e('Categories'); ?>
                            <ul>
                                <?php wp_list_cats('sort_column=name&optioncount=1&heirarchical=0'); ?>
                            </ul>
                        </li>
                        <li>
                            <?php _e('Archives'); ?>
                            <ul>
                                <?php wp_get_archives('type=monthly'); ?>
                            </ul>
                        </li>
                        <?php get_links_list(); ?>
                        <li>
                            <ul>
                                <?php wp_register(); ?>
                                <li><?php wp_loginout(); ?></li>
                                <?php wp_meta(); ?>
                            </ul>
                        </li>
                    </ul>
                </div></div></div></div></div></div></div></div> <!-- close sidebar decoration -->
            </div>


