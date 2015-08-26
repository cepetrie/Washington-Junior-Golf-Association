</div>
<div id="utilities-footer">
<!-- Begin Social  Icon-->
<div id="util-footer">
<div id="social-footer">
<a href="mailto:wjgaoffice@aol.com"><i class="fa fa-envelope-o fa-2x"></i></a>
 <a href="https://www.facebook.com/pages/Washington-Junior-Golf-Association/98124954911" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
 <a href="https://mobile.twitter.com/wjga1976" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
 <a href="https://www.youtube.com/channel/UCOGe4Oqt2qZm8MSD1GBjeZw" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
 </div> <!-- end social icon -->
<div id="wjga"><p>Washington Junior Association</p></div>
<!-- begin search form -->
<div id="link">
<ul>
<li><a href="/contact">Contact | </a></li>
<li><a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=ONBOeocxofFvghp0U2wViOxh24FneLSlmH6xXJdxgmmAxG0gSHe67B786py&dispatch=5885d80a13c0db1f8e263663d3faee8d5c97cbf3d75cb63effe5661cdf3adb6d">Donate | </a></li>
<li><a href="/disclaimer">Disclaimer</a></li>
</ul>
</div>
</div> <!--end util-footer -->
</div> <!-- end utiliti menu -->

<div id="footer">
<!-- begin footer menu -->
<div id="menu-footer">
    <nav class="footer-main">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </nav>
    </div> <!-- end footer menu -->

<!-- Begin site inform -->
<div id="site-info">
<p>&copy;<?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. Built for the WJGA by Benjamin Clement, Brianna Karle, Victoria Moiseenko, Michael Murphy, and Christina Petrie <span class="alignright">&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?></span></p>
</div>
    <!-- End site inform -->
</div>
<!-- Start WP footer -->
<?php wp_footer(); ?>
<!-- Start WP footer -->
</body>
</html>
