<!-- begin olark code -->
<script type="text/javascript" async>
  /* eslint-disable */
  ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
  /* custom configuration goes here (www.olark.com/documentation) */
  var lang = "<?php echo get_bloginfo( 'language' ); ?>";
  olark.configure("system.localization", lang);
  if (lang === 'fr-FR') {
    olark.configure('WelcomeAssist.welcome_messages', ["Merci de votre visite ! Comment puis-je vous aider ?"]);
  } else {
    olark.configure('WelcomeAssist.welcome_messages', ["Thanks for stopping by! Can I help you with anything?"]);
  }
  olark.identify('4536-145-10-3984');
</script>
<!-- end olark code -->