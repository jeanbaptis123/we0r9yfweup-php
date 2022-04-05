<?php
$pagetitle = "Shared proxies ".$_GET["id"];
$pagedescription = "Shared proxies ".$_GET["id"];
$pagekeywords = "Shared proxies ".$_GET["id"];
$header_html = '<meta name="robots" content="noindex, follow">';
include "assets/inc/header.inc.php";
?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ea8732e81693d0012e58a78&product=sop' async='async'></script>
<style type="text/css">
  .sharethis-inline-share-buttons {
    margin-bottom: 15px;
  }
  .sharethis-inline-share-buttons img{
    min-height: unset;
    max-height: unset;
    min-width: unset;

}
</style>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h1>Shared proxies</h1>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <p>Share the link with anyone.<br>The proxies are updated every minute<br>according to the settings used before sharing.</p>

                    </div>
                </div>
                <div class="col-md-12">

        <div class="itemcard wp">
          <!-- ShareThis BEGIN -->
<div class="sharethis-inline-share-buttons"></div>
<!-- ShareThis END -->
        	<textarea style="min-height: 450px;max-height: 1000px;min-width: 100%;" id="proxyshare">Loading...</textarea>
<button id="downloadbtn" type="submit" onclick="savetofile()" class="btn btn-blue" style="
    width: 100%; display: none;
">Download</button>
   </div>
 </div>
    </main>
      <?php




  $plainurl = preg_replace('/proxytype=/', 'protocol=', $plainurl);
  $url = preg_replace('/.com/', '.com/v2/', $plainurl);
  $url = 'https://api.proxyscrape.com/shareget.php?id='.$_GET["id"];
  ?>
<script type="text/javascript">
  var plainurl = <?php echo '"'.$url.'"';?>;
  var urlnext = "";

       $.ajax({
           url : plainurl,
           dataType: "text",
           success : function (data) {
               urlnext = data.replace('proxytype=', 'protocol=');
               urlnext = urlnext.replace('.com', '.com/v2/');
                      $.ajax({
           url : urlnext,
           dataType: "text",
           success : function (data) {
               $("#proxyshare").text(data);
               $("#downloadbtn").show();
           },
           error: function () {
            $("#proxyshare").text("Something went wrong while loading the proxies.");
           }
       });
           },
           error: function () {
            $("#proxyshare").text("Something went wrong while loading the proxies.");
           }
       });
   
    function savetofile(){
    var text = document.getElementById("proxyshare").value;
    text = text.replace(/\n/g, "\r\n"); // To retain the Line breaks.
    var blob = new Blob([text], { type: "text/plain"});
    var anchor = document.createElement("a");
    anchor.download = "proxies.txt";
    anchor.href = window.URL.createObjectURL(blob);
    anchor.target ="_blank";
    anchor.style.display = "none"; // just to be safe!
    document.body.appendChild(anchor);
    anchor.click();
    document.body.removeChild(anchor);
 }
</script>
<?php include "assets/inc/footer.inc.php";?>