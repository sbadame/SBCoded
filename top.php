<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
     <link  href="//fonts.googleapis.com/css?family=Cantarell:regular,italic,bold,bolditalic&subset=latin" rel="stylesheet" type="text/css" >
     <?php
        //Figure out which stylesheet to load
        if ( is_page() ){
            print('<link rel="stylesheet" href="' . get_bloginfo("template_directory") . '/pagestyle.css" type="text/css" media="screen" />'."\n");
        }
     ?>
     <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
     <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
     <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.js"></script>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.kwicks-1.5.1.pack.js"></script>
     <script>
        //Used to make the code look a little cleaner... should be done with php, not JS
        $().ready(function() {
            $('.surround').wrap('<div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr"></div></div></div></div></div></div></div></div>');
        });
     </script>
     <!-- <?php #wp_head(); ?> -->
</head>
<body>
    <div id="main">
        <div id="sublayer">
            <span class="surround">
                <div id="navlayer">
                    <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                        <span class="header">
                            <h1 id="title"><a href="index.php">[ SB Coded ]</a></h1>
                            <!-- Create a list of pages that belong on the top bar -->
                            <!-- ie) pages that have no parents -->
                            <ul>
                                <?php
                                    $args = array(
                                                'echo' => 0, #Don't print this out
                                                'title_li' => "", #No formatting please
                                                'depth' => 1 #Only top level pages please.
                                            );
                                    $output = wp_list_pages($args);
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
                        </span>
                    </div></div></div></div></div></div></div></div>
                </div>
                <!-- Content -->
                        <div id="content">
                            <span class="surround">
