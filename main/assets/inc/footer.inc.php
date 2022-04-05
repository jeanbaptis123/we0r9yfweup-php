    <footer>
        <div class="container">
            <div class="footer-main">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-12">
            <div class="itemcard">
              <div class="logo">
                <a href="/home" id="bottomlogo"></a>
              </div>
              <p>Looking for help with our proxies or want to help? Here are your options:</p>
              <div>
              <div class="footer-links">
                <ul>
                  <li><a href="/help-center">Visit help center</a></li>
                  <li><a href="https://support.proxyscrape.com/">Knowledge base</a></li>
                  <li><a href="https://www.linkedin.com/company/proxyscrape/">LinkedIn</a></li>
                  <li><a href="/contact">Contact</a></li>
               
                </ul>
              </div>
              <p>Thanks to everyone for the amazing support!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-12 ">
            <div class="itemcard mgl30">
              <h2>Quick Links</h2>
              <div class="footer-links">
                <ul>
                  <li><a href="/free-proxy-list">Free proxy list</a></li>
                  <li><a href="/web-proxy">Web proxy</a></li>
                  <li><a href="/premium?ref=footer">Premium</a></li>
                  <li><a href="/online-proxy-checker">Online Proxy Checker</a></li>
                  <li><a href="https://docs.proxyscrape.com/" target="_blank">API</a></li>
                  <li><a href="/login">Login</a></li>
                  <li><a href="/blog">Blog</a></li>
                  <li><a href="/proxy-types">Proxy types</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-12 ">
            <div class="itemcard mgl30">
              <h2>Important</h2>
              <div class="footer-links">
                <ul>
                  <li><a href="/cookie-policy">Cookie policy</a></li>
                  <li><a href="/disclaimer">Disclaimer</a></li>
                  <li><a href="/privacy-policy">Privacy policy</a></li>
                  <li><a href="/terms-and-conditions">Terms and conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
                </div>
            </div>
            <!--
            <div id="feedbackbtn">
<a href="/polls" onclick="gtag('event', 'visit_poll', {'event_category' : 'polls'});"><button class="feedback">Help us</button></a>
</div>
-->
            <div class="footer-bottom">


                <p class="notranslate"> © Copyright 2021 - <a href="https://thip.dev">Thib BV</a> | Brugstraat 18
| 2812 Mechelen | VAT BE 0749 716 760</p>
            </div>
        </div>
        <script src="https://cdn.proxyscrape.com/js/jquery.nice-select2.min.js?v=4"></script>
        <script src="https://cdn.proxyscrape.com/js/jquery.sticky.js"></script>
        <script src="https://cdn.proxyscrape.com/js/bootstrap.min.js"></script>
        <!--<script src="https://cdn.proxyscrape.com/js/wd.js?v=60"></script>-->
        <style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:24px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/24.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/24a.png);}
-->
</style>

<script type="text/javascript">

/* <![CDATA[ */
function doGTranslate(lang_pair) {if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];var plang=location.pathname.split('/')[1];if(plang.length !=2 && plang.toLowerCase() != 'zh-cn' && plang.toLowerCase() != 'zh-tw')plang='en';if(lang == 'en')location.href=location.protocol+'//'+location.host+location.pathname.replace('/'+plang+'/', '/')+location.search;else location.href=location.protocol+'//'+location.host+'/'+lang+location.pathname.replace('/'+plang+'/', '/')+location.search;}
/* ]]> */
</script>

    </footer>
  
</body>
<script type="text/javascript">$(document).ready(function() {
  $('select').niceSelect();
      $("#sticky-wrapper").sticky({topSpacing:0,zIndex:5});
      $("#bottomlogo").html("<img src='https://cdn.proxyscrape.com/img/logo/light_text_logo.png' alt='proxyscrape light logo'>");
      $('footer').css('background-image', 'url(https://cdn.proxyscrape.com/img/footer-bg.jpg)');

      $('<img/>').attr('src', 'https://cdn.proxyscrape.com/img/background.jpg').on('load', function() {
   $(this).remove();
   $('body').css('background-image', 'url(https://cdn.proxyscrape.com/img/background.jpg)');
   $('body').css('background-color', '#fff');
});
});
$(document).click(function (event) {
if (!$(event.target).is('#mainmenu *')) {
if ($(window).width() <= 767) {
$('#mainmenu').collapse('hide')
}
}
});



</script>
<script type="text/javascript">
  maxmind_user_id = "306854";
  (function() {
    var loadDeviceJs = function() {
      var element = document.createElement('script');
      element.src = 'https://device.maxmind.com/js/device.js';
      document.body.appendChild(element);
    };
    if (window.addEventListener) {
      window.addEventListener('load', loadDeviceJs, false);
    } else if (window.attachEvent) {
      window.attachEvent('onload', loadDeviceJs);
    }
  })();
</script>


</html>
