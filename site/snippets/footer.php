<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <?php echo $site->footerLeft()->kirbytext(); ?>
        </div>
        <div class="col-md-6 pull-right" >
              <?php echo $site->footerRight()->kirbytext(); ?>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <?php echo js('assets/js/jquery.fullpage.min.js') ?>
  <?php echo js('assets/js/default.js?v1.0') ?>

  <!-- Matomo -->
  <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//piwik.sofasurfer.org/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '47']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->

</body>
</html>