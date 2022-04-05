<!DOCTYPE html>
<?php
if (isset($_SERVER['HTTP_X_GT_LANG'])) {
    $websitelang = strtolower($_SERVER['HTTP_X_GT_LANG']);
} else {
    $websitelang = "en";
}
?>
<html lang="<?php echo $websitelang; ?>">
  <head>


<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="e8dea03d-c444-4b5a-8290-dfc15a100857" data-blockingmode="auto" type="text/javascript"></script>

<script type="text/javascript">
	function CookiebotCallback_OnAccept() {
           if (Cookiebot.consent.statistics)            {
               console.log("thanks");



}
}
</script>



    <?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$url_canonical = 'https://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo '<link rel="canonical" href="' . $url_canonical . '">';

if (isset($header_html) && !empty($header_html)) {
  echo $header_html;
}
?>




<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5574P3K');</script>

<!-- End Google Tag Manager -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1704999106306439');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1704999106306439&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Selly referal tracking -->
<script>
    function getCookie_alp(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}


    function parse_query_string_alp(query) {
  var vars = query.split("&");
  var query_string = {};
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    var key = decodeURIComponent(pair[0]);
    var value = decodeURIComponent(pair[1]);
    // If first entry with this name
    if (typeof query_string[key] === "undefined") {
      query_string[key] = decodeURIComponent(value);
      // If second entry with this name
    } else if (typeof query_string[key] === "string") {
      var arr = [query_string[key], decodeURIComponent(value)];
      query_string[key] = arr;
      // If third or later entry with this name
    } else {
      query_string[key].push(decodeURIComponent(value));
    }
  }
  return query_string;
}


var parsed_qs_alp = parse_query_string_alp(location.search.substring(1));
var refferal_alp = parsed_qs_alp.ref;
if (refferal_alp != null){
    document.cookie = "last_ref=" + encodeURI(refferal_alp) + "; expires=Thu, 18 Dec 2050 12:00:00 UTC; path=/";
}
var refferal_alp = getCookie_alp("ref");
if (refferal_alp == null) {
    var refferal_alp = parsed_qs_alp.ref;

}

var visits_alp = getCookie_alp("visits");
if (visits_alp != null) {
  visits_alp = parseInt(visits_alp);
  visits_alp += 1;
  document.cookie = "visits=" + encodeURI(visits_alp) + "; expires=Thu, 18 Dec 2050 12:00:00 UTC; path=/";
} else {
  document.cookie = "visits=1; expires=Thu, 18 Dec 2050 12:00:00 UTC; path=/";
}

if (refferal_alp != null){
    document.cookie = "ref=" + encodeURI(refferal_alp) + "; expires=Thu, 18 Dec 2050 12:00:00 UTC; path=/";
}

</script>
<!-- End shoppy referal tracking -->
<!-- BASIC META-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ProxyScrape">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--page specific tags-->

    <meta name='description' content='<?php echo $pagedescription; ?>'>
    <meta property='og:description' content='<?php echo $pagedescription; ?>'>

    <meta name='keywords' content='<?php echo $pagekeywords; ?>'>
    <meta name="facebook-domain-verification" content="00e61yfdunfqc7twc7qnsqx13g61vl" />

    <meta property='og:title' content='<?php echo $pagetitle; ?>'>
    <title><?php echo $pagetitle; ?></title>
        <!-- FAVICON -->
    <link rel="icon" href="https://cdn.proxyscrape.com/img/favicon/favicon.ico">
    <meta content='https://cdn.proxyscrape.com/img/favicon/favicon.png?v=3' property='og:image'>
    <link rel="preload" as="font" href="https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-SemiBold.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-Medium.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-Bold.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/normalize.min.css?v=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/bootstrap.min.css?v=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/fonts.min.css?v=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/style.min.css?v=35">
    <link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/nice-select.min.css?v=1">
    <script src="https://cdn.proxyscrape.com/js/jquery.min.js"></script>
    <?php
    $url = $_SERVER["REQUEST_URI"]; 
	$pos = strrpos($url, "web-proxy"); 

	if($pos != false) {
    	echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2236825590761473"
     crossorigin="anonymous"></script>'; 
	}
	?>
</head>

<body>
  <!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12878919;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12878919/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5574P3K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
        <nav id="sticky-wrapper">
            <div class="container accordion" id="navaccordion">
                <div class="row">
                    <div class="col-md-3 mobile-toggler-wrapper">
                        <a href="/home" id="logoheadurl">
                            <img src="https://cdn.proxyscrape.com/img/logo/dark_text_logo.png" id="toplogo" alt="dark proxyscrape logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"><svg height="384pt" viewBox="0 -53 384 384" width="384pt" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg></span>
                        </button>
                    </div>
                    <div class="col-md-9 navigation-container">
                  <div class="navigation navbar-expand">
                  <ul class="list-inline text-right collapse navbar-collapse" id="mainmenu">

                    <li><a href="/home">Home</a></li>
                    <li class="dropdown  current-menu-has-children">
                      <a data-toggle="collapse" data-target="#extramenu" aria-controls="extramenu" aria-expanded="false" aria-label="Toggle extra navigation" class="collapsed">Services<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg></a>
                      <div class="collapse" id="extramenu" data-parent="#navaccordion">
                      <ul class="dropdown-nav dropdown-nav-left">
                          <li><a href="/premium?ref=head" style="">Premium</a></li>
                    
                    <li><a href="/residential-proxies?ref=head">Residential proxies</a></li>
                        <li><a href="/dedicated-proxies?ref=head">Dedicated proxies</a></li>
                      </ul>
                  </div>
                    </li>
                    

                    <li class="dropdown  current-menu-has-children">
                      <a data-toggle="collapse" data-target="#extramenu" aria-controls="extramenu" aria-expanded="false" aria-label="Toggle extra navigation" class="collapsed">Freebies<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg></a>
                      <div class="collapse" id="extramenu" data-parent="#navaccordion">
                      <ul class="dropdown-nav dropdown-nav-left">
                        <li><a href="/free-proxy-list">Free proxy list</a></li>
                     <li><a href="/web-proxy">Web proxy</a></li>

                        <li><a href="/online-proxy-checker">Online proxy checker</a></li>
                        <li><a href="/proxy-filter">Proxy filter</a></li>
                        <li><a href="https://docs.proxyscrape.com/" target="_blank">API</a></li>
                      </ul>
                  </div>
                    </li>

                    <li class="dropdown current-menu-has-children">
                      <a data-toggle="collapse" data-target="#helpmenu" aria-controls="helpmenu" aria-expanded="false" aria-label="Toggle help navigation" class="collapsed">help center<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg></a>
                      <div class="collapse" id="helpmenu" data-parent="#navaccordion">
                      <ul class="dropdown-nav dropdown-nav-left">
                        <li><a href="/help-center">Visit help center</a></li>
                        <li><a href="https://support.proxyscrape.com/">Knowledge base</a></li>
                        <li><a href="https://roadmap.proxyscrape.com/">Roadmap</a></li>
                        <li><a href="/contact">Contact</a></li>
                      </ul>
                  </div>
                    </li>
                    <li><a href="/blog/">Blog</a></li>
                  <li><a href="https://dashboard.proxyscrape.com/login">Login</a></li>
<!--
                      <li class="dropdown current-menu-has-children">
                        <?php
$languages = '[{
  "name_eng": "English",
  "name_lang": "English",
  "language_code": "en",
  "country_code": ""
},
{
  "name_eng": "Turkish",
  "name_lang": "Türk",
  "language_code": "tr",
  "country_code": ""
},
{
  "name_eng": "Punjabi",
  "name_lang": "پنجابی",
  "language_code": "pa",
  "country_code": ""
},
{
  "name_eng": "Hindi",
  "name_lang": "हिन्दी",
  "language_code": "hi",
  "country_code": ""
},
{
  "name_eng": "indonesian",
  "name_lang": "bahasa Indonesia",
  "language_code": "id",
  "country_code": ""
},
{
  "name_eng": "Russian",
  "name_lang": "Pусский",
  "language_code": "ru",
  "country_code": ""
},
{
  "name_eng": "German",
  "name_lang": "Deutsch",
  "language_code": "de",
  "country_code": ""
},
{
  "name_eng": "Portuguese",
  "name_lang": "Português",
  "language_code": "pt",
  "country_code": ""
},
{
  "name_eng": "French",
  "name_lang": "Français",
  "language_code": "fr",
  "country_code": ""
},
{
  "name_eng": "Chinese (Simplified)",
  "name_lang": "简体中文",
  "language_code": "zh-CN",
  "country_code": ""
}
]';

?>
<?php
$dlanguages = json_decode($languages);
$card = "";
$setlang = 0;
for ($i = 0; $i < count($dlanguages); $i++) {
    $current = $dlanguages[$i];
    if (isset($_SERVER['HTTP_X_GT_LANG']) && strtolower($_SERVER['HTTP_X_GT_LANG']) == strtolower($current->language_code)) {
        echo '<a data-toggle="collapse" data-target="#langmenu" aria-controls="langmenu" aria-expanded="false" aria-label="Toggle language navigation" class="collapsed"><i class="sprite sprite-' . strtolower($current->country_code) . '_flag" role="img" aria-label="[Current language: ' . $current->name_eng . ']"></i><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg></a>';
        $setlang = 1;
    }
    $card .= '<li><a href="#" onclick="doGTranslate(\'en|' . $current->language_code . '\');return false;" title="' . $current->name_eng . '" class="nturl"><i class="sprite sprite-' . strtolower($current->country_code) . '_flag"  role="img" aria-label="[Select: ' . $current->name_eng . ']"></i> ' . $current->name_lang . '</a></li>';
}

if (1 != $setlang) {
    echo '<a data-toggle="collapse" data-target="#langmenu" aria-controls="langmenu" aria-expanded="false" aria-label="Toggle language navigation" class="collapsed"><i class="sprite sprite-gb_flag" role="img" aria-label="[Current language: english]"></i><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg></a>';
}
?>
<div class="collapse" id="langmenu" data-parent="#navaccordion">
                      <ul class="dropdown-nav dropdown-nav-left notranslate" style="max-height: 270px;overflow-y: scroll;">
                        <?php
echo $card;
?>

                      </ul>
                  </div>
                    </li>
-->
                  </ul>
                </div>
  </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>