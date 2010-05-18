            <div id="sidebar">
                <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                    <?php print(_('Categories')."\n"); ?>
                    <ul>
                        <?php wp_list_cats('sort_column=name&optioncount=1&heirarchical=0'); ?>
                    </ul>
                    <?php print(_('Archives')."\n"); ?>
                    <ul>
                        <?php wp_get_archives('type=monthly&echo=1'); ?>
                    </ul>
                    <?php print(_('Links')."\n"); ?>
                    <ul>
                        <?php wp_list_bookmarks( "title_li=&title_before=&title_after="  ); ?>
                    </ul>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </div></div></div></div></div></div></div></div> <!-- close sidebar decoration -->
            </div>


