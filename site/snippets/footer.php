	<footer id="footer">
		<div id="footer-links" class="left"><?php echo $site->footer()->kirbytext() ?></div>
		<div id="copyright" class="right"><p>&copy; 2015-<?php echo date("Y") ?> <?php echo $site->title()->html() ?>. All rights reserved. Louisville, KY.</p></div>
	</footer>

</div> <!-- End .wrap -->

<script id="dsq-count-scr" src="//pine.disqus.com/count.js" async></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40780689-4', 'auto');
  ga('send', 'pageview');

</script>

<?php snippet('piwik') ?>

</body>
</html>