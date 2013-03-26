<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    </div><!-- end of #wrapper -->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">

    <div id="footer-wrapper">
    
        <div class="grid col-940">
            <ul>
                <li class="home"><a href="http://www.poojajuneja.com/">Home</a></li>
                <li><a href="http://www.poojajuneja.com/pages/about_us">About Us</a></li>
                <li><a href="http://www.poojajuneja.com/collections">Collection</a></li>
                <li><a href="http://www.poojajuneja.com/exhibition">Exhibition</a></li>
                <li><a href="http://www.poojajuneja.com/awards">Awards</a></li>
                <li><a href="http://www.poojajuneja.com/pages/contact_us">Contact Us</a>
                <li><a class="active" href="http://www.poojajuneja.com/blog">Blog</a>   
            </ul>
        
            <div class="right">
                Copyright &copy; 2012 Pooja Juneja. All rights reserved.
            </div>
        </div><!-- end #footer-wrapper -->
    </div>
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>