<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
     <link rel="shortcut icon" href="favicon.ico" >
     <link  href="//fonts.googleapis.com/css?family=Cantarell:regular,italic,bold,bolditalic&subset=latin" rel="stylesheet" type="text/css" >
     <script src="http://code.jquery.com/jquery-latest.js"></script>
     <script type="text/javascript" src="http://view.jquery.com/trunk/plugins/validate/jquery.validate.js"></script>
     <?php
        //Figure out which stylesheet to load
            print('<link rel="stylesheet" href="' . get_bloginfo("template_directory") . '/pagestyle.css" type="text/css" media="screen" />'."\n");
            print('<script src="' . get_bloginfo("template_directory") . '/sbcoded.js"></script>');
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
                            <h1 id="title"><a href="<?php bloginfo('url'); ?>">[ SB Coded ]</a></h1>
                            <!-- Get siblings Yes, you are your own sibling-->
                            <ul id="submenu">
                            <?php foreach( get_pages(array('parent'=>$post->parent_ID)) as $sibling ): ?>
                                <?php $name = get_the_title($sibling->ID); ?>
                                <?php $link = get_page_link($sibling->ID); ?>
                                <li><a href="<?php echo $link ?>"><?php echo $name ?></a></li>
                            <?php endforeach; ?>
                            </ul>

                            <!-- Show off the first level of children -->
                            <ul id="submenu">
                            <li><a href="">Home</a></li>
                                <?php foreach( get_pages(array('parent'=>$post->ID)) as $child ): ?>
                                    <?php $name = get_the_title($child->ID); ?>
                                    <?php $link = get_page_link($child->ID); ?>
                                    <li><a href="<?php echo $link ?>"><?php echo $name ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </span>
                    </div></div></div></div></div></div></div></div>
                </div>
                <!-- Content -->
                        <div id="content">
                            <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
