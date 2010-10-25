<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

     <!-- Style Sheets -->
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
     <link  href="//fonts.googleapis.com/css?family=Cantarell:regular,italic,bold,bolditalic&subset=latin" rel="stylesheet" type="text/css" >

     <!-- java script (not required for website functionality) -->
     <script src="http://code.jquery.com/jquery-latest.js"></script>
     <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/sbcoded.js"></script>

     <!-- Trendy Web 2.0 stuff... -->
     <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
     <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
     <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Make the SBCoded theme plugin friendly while ruining the indentation-->
<?php wp_head(); ?>
<!-- END wp_head() -->
</head>
<body>
    <div id="main">
        <div id="sublayer">
            <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                <div id="navlayer">
                    <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
                        <span class="header">
                            <h1 id="title"><a href="<?php bloginfo('url'); ?>">[ SB Coded ]</a></h1>
                            <!-- The top level pages.-->
                            <ul id="submenu">
                            <?php foreach( get_pages(array('parent'=>0)) as $toplevel_page ): #Returns the top-level pages ?>
    <li><a href="<?php echo get_page_link($toplevel_page->ID);?>"><?php echo get_the_title($toplevel_page->ID); ?></a></li>
                            <?php endforeach; ?></ul>

                            <?php if ( $post->post_parent > 0 ): #Make sure that our siblings aren't the top pages... ?>
                            <!-- The sibling level pages.-->
                            <ul id="submenu"> Related: <?php foreach( get_pages(array('parent'=>$post->post_parent)) as $sibling ): ?>
                                    <li><a href="<?php echo get_page_link($sibling->ID); ?>"><?php echo get_the_title($sibling->ID); ?></a></li>
                            <?php endforeach; ?></ul>
                            <?php endif; ?>

                            <?php if ( sizeOf($children = get_pages(array('parent'=>$post->ID,'hierarchical'=>0))) > 0): #Again, do we have children? ?>
                            <!-- The child pages -->
                            <ul id="submenu"> <?php foreach( $children as $child ): ?>
                                    <li><a href="<?php echo get_page_link($child->ID); ?>"><?php echo get_the_title($child->ID); ?></a></li>
                            <?php endforeach; ?></ul>
                            <?php endif; ?>

                        </span>
                    </div></div></div></div></div></div></div></div>
                </div>
                <!-- Content -->
                <div id="content">
                    <div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">
