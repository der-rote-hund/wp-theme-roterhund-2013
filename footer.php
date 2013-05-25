<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Der Rote Hund
 */
?>

<?php wp_footer(); ?>

        </div> <!-- .content -->

        <footer id="contact">
            <article class="imprint">
                <p>&copy; 2013 Philipp Marquardt <a href="mailto:pm@roterhund.de?subject=Inquiry%20from%20roterhund.de&amp;body=Dear%20Philipp,">pm@roterhund.de</a></p>
            </article>
            <aside>
                <p id="fn-1" class="fussnote">(*) Mostly. May contain traces of CSS 3 and HTML 5.</p>
            </aside>
        </footer>

    </div> <!-- .wrapper -->

<!-- Back to top -->
    <div id="to-top" style="position: fixed; right: 0; bottom: 0; display: block;"><p><a href="#anchor-top" class="button button--up" title="zum Seitenanfang"><span class="triangle triangle-up"></span></a></p></div>


<!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>

    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/jquery.localscroll-min.js"></script>
    <script src="js/rhd-scripts.js"></script>

<!-- Piwik --> 
    <script type="text/javascript">
    var pkBaseURL = (("https:" == document.location.protocol) ? "https://roterhund.de/piwik-analytics/" : "http://roterhund.de/piwik-analytics/");
    document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
    </script><script type="text/javascript">
    try {
    var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
    piwikTracker.trackPageView();
    piwikTracker.enableLinkTracking();
    } catch( err ) {}
    </script>
    <noscript><p><img src="http://roterhund.de/piwik-analytics/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>