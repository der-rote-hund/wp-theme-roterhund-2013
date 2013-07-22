<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the class=content div and all content after
 *
 * @package Der Rote Hund
 */
?>
        </div> <!-- .content -->

        <footer id="contact">
            <article class="imprint">
                <p><?php echo __('Concept, Design, Frontend-Development &copy; 2013 by Philipp Marquardt &nbsp;', 'der_rote_hund'); ?> <a href="<?php echo __('mailto:pm@roterhund.de?subject=Inquiry%20from%20roterhund.de&amp;body=Dear%20Philipp,', 'der_rote_hund'); ?>">pm@roterhund.de</a></p>
                <p><?php echo __('Dynamic thanks to <a href="http://wordpress.org" rel="nofollow">Wordpress</a>', 'der_rote_hund'); ?></p>
            </article>
            <aside>
                <p id="fn-1" class="fussnote"><?php echo __('(*) Mostly. May contain traces of CSS 3 and HTML 5.', 'der_rote_hund'); ?></p>
            </aside>

            <?php wp_footer(); ?>

        </footer>

    </div> <!-- .wrapper -->

    <?php do_action('icl_language_selector'); ?>

<!-- Back to top -->
    <div id="to-top" style="position: fixed; right: 0; bottom: 0; display: block;"><p><a href="#anchor-top" class="button button--up" title="zum Seitenanfang"><span class="triangle triangle-up"></span></a></p></div>


<!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.min.js"><\/script>')</script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.localscroll-min.js"></script>

    <!--script src="<?php echo get_template_directory_uri(); ?>/js/jquery.balancetext.js"></script -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/rhd-scripts.js"></script>

<!-- Piwik --> 
    <script type="text/javascript">
    var pkBaseURL = (("https:" == document.location.protocol) ? "https://www.roterhund.de/piwik-analytics/" : "http://www.roterhund.de/piwik-analytics/");
    document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
    </script><script type="text/javascript">
    try {
    var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
    piwikTracker.trackPageView();
    piwikTracker.enableLinkTracking();
    } catch( err ) {}
    </script>
    <noscript><p><img src="http://www.roterhund.de/piwik-analytics/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>