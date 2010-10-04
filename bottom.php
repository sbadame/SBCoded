                    </div></div></div></div></div></div></div></div>
                </div> <!-- close content -->
                <?php get_sidebar(); ?>
                <div id="footer">Copyright &#169; 2010 <?php bloginfo('name'); ?> <br />
			This website, and all sub-projects that this website holds are all original creations by Sandro Badame unless stated otherwise.<br /> 
			SBCoded is proudly powered by <a href="http://wordpress.org/">WordPress</a>
			<?php 
				$rssimg = get_bloginfo("template_directory")."/images/bluel-icon-128.png";
				$rss = get_bloginfo('rdf_url');
				print("<br /><a href='$rss'><img id='rssicon' src='$rssimg' /></a>"); 
			?>
		</div>

            <?php wp_footer(); ?> <!-- The SyntaxHighlighter plugin needs wp_footer() -->
        </div> <!-- close sublayer -->
    </div> <!-- close main -->
</body>
</html>
