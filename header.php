<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
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
        $().ready(function() {
            $('#navlayer ul').kwicks({
                max: 205,
                spacing: 15
            });

            $('.surround').wrap('<div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr"></div></div></div></div></div></div></div></div>');
        });
     </script>
     <?php wp_get_archives('type=monthly&format=link'); ?>
     <?php //comments_popup_script(); // off by default ?>
     <?php wp_head(); ?>
</head>

