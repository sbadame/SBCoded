                <div id="navlayer">
                    <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                        <h1 id="title"><a href="index.php">[ SB Coded ]</a></h1>
                        <!-- Grabbing the list of pages now -->
                        <ul>
                            <?php
                                $output = wp_list_pages('echo=0&title_li_=');
                                preg_match_all('!<a\s*href="(.*?)"\s*title="(.*?)">(.*?)</a>!', $output, $out, PREG_SET_ORDER);
                                for ( $i = 0; $i < count($out); $i++){
                                    $page = $out[$i];
                                    if ( $i == count($out) - 1){
                                        print("<li><a id='lastnavitem' href='$page[1]'>$page[3]</a></li>\n");
                                    }else{
                                        print("<li><a href='$page[1]'>$page[3]</a></li>\n");
                                    }
                                }
                            ?>
                        </ul>

                    </div></div></div></div></div></div></div></div>
                </div>
