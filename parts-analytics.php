<?php $theme_option = flagship_sub_get_global_options(); 
      $analytics_id = $theme_option['flagship_sub_google_analytics']; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $analytics_id; ?>', 'jhu.edu');
  ga('create', 'UA-40512757-1', {'name': 'globalKSAS'});
  ga('send', 'pageview');
  ga('globalKSAS.send', 'pageview');

</script>

<script type="text/javascript">
function viewport() {
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
  //Non-IE
  myWidth = window.innerWidth;
  myHeight = window.innerHeight;
  } else if( document.documentElement &&
 ( document.documentElement.clientWidth
 || document.documentElement.clientHeight ) ) {
  //IE 6+ in 'standards compliant mode'
  myWidth = document.documentElement.clientWidth;
  myHeight = document.documentElement.clientHeight;
  } else if( document.body &&
 ( document.body.clientWidth
 || document.body.clientHeight ) ) {
  //IE 4 compatible
  myWidth = document.body.clientWidth;
  myHeight = document.body.clientHeight;
  }
/* To Track Width x Height, leave this section uncommented */
  ga('send',
   'event',
   'Viewport',
   'Size',
   myWidth+'x'+myHeight,
   {'nonInteraction': 1});
/* To Track Width only, uncomment only this section
  ga('send',
   'event',
   'Viewport',
   'Width',
   ""+myWidth+"",
   {'nonInteraction': 1});
*/
/* To Tack Height only, uncomment only this section
  ga('send',
   'event',
   'Viewport',
   'Height',
   ""+myHeight+"",
   {'nonInteraction': 1});
*/
}
</script>