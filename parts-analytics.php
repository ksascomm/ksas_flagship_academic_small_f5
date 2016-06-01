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
/*<![CDATA[*/
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '//siteimproveanalytics.com/js/siteanalyze_11464.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/
</script>

<script>
function _gaLt(event){
    var el = event.srcElement || event.target;

    /* Loop up the DOM tree through parent elements if clicked element is not a link (eg: an image inside a link) */
    while(el && (typeof el.tagName == 'undefined' || el.tagName.toLowerCase() != 'a' || !el.href)){
        el = el.parentNode;
    }

    if(el && el.href){
        /* link */
        var link = el.href;
        if(link.indexOf(location.host) == -1 && !link.match(/^javascript\:/i)){ /* external link */
            /* HitCallback function to either open link in either same or new window */
            var hitBack = function(link, target){
                target ? window.open(link, target) : window.location.href = link;
            };
            /* Is target set and not _(self|parent|top)? */
            var target = (el.target && !el.target.match(/^_(self|parent|top)$/i)) ? el.target : false;
            /* send event with callback */
            ga(
                "send", "event", "Outgoing Links", link,
                document.location.pathname + document.location.search,
                {"hitCallback": hitBack(link, target)}
            );

            /* Prevent standard click */
            event.preventDefault ? event.preventDefault() : event.returnValue = !1;
        }

    }
}

/* Attach the event to all clicks in the document after page has loaded */
var w = window;
w.addEventListener ? w.addEventListener("load",function(){document.body.addEventListener("click",_gaLt,!1)},!1)
 : w.attachEvent && w.attachEvent("onload",function(){document.body.attachEvent("onclick",_gaLt)});
</script>