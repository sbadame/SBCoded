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
            print('<link rel="stylesheet" href="' . get_bloginfo("template_directory") . '/pagestyle.css" type="text/css" media="screen" />'."\n");
     ?>
     <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
     <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
     <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     
     <!-- Stuff for the SyntaxHighligher http://code.google.com/p/syntaxhighlighter/wiki/Usage --->
     <?php wp_head(); ?>
     
</head>
<body>
    <div id="main">
        <div id="sublayer">
	    <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                <div id="navlayer">
                    <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                        <span class="header">
                            <h1 id="title"><a href="http://www.sbcoded.com/index.php">[ SB Coded ]</a></h1>
                            <ul>
				<li><a href="http://www.sbcoded.com/index.php"> Home </a></li>
				<!-- Create a list of pages that belong on the top bar -->
				<!-- ie) pages that have no parents -->
                                <?php
                                    foreach( get_pages(array('parent'=>0)) as $page){
                                        $link = get_page_link($page->ID);
                                        $title = get_the_title($page->ID);
                                        if ($post->ID == $page->ID){ $title = "[$title]"; }
                                        if ( $i == count($out) - 1){
                                            print("<li><a id='lastnavitem' href='$link' title='$title'>$title</a></li>\n");
                                        }else{
                                            print("<li><a href='$link'>$title</a></li>\n");
                                        }
                                    }
                                ?>
                            </ul>
                            <!-- Get the list of pages that are children of this one. -->
                            <?php
                                #Are we on the top page? If so, then we already have a menu
                                if ( is_page() && $post->ID > 0) {
                                    
                                    #At this point we know that this is not the home page
                                    if ($post->post_parent == 0){
                                        #So now we know that this pages's parent is the home page..
                                        $children = wp_list_pages( 'depth=1&echo=0&child_of='.$post->ID.'&title_li=' );
                                    }else{
                                        #This pages parent is a sub category
                                        $children = wp_list_pages( 'depth=1&echo=0&child_of='.$post->post_parent.'&title_li=' );
                                    }
                                    #If we have a submenu, print it.
                                    if ($children){
                                        print("<ul id='submenu'> $children </ul>\n");
                                    }
                                }
                            ?>
                        </span>
                    </div></div></div></div></div></div></div></div>
                </div>
                <!-- Content -->
                        <div id="content">
                            <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
