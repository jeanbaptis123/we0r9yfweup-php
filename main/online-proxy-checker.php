<?php
$pagetitle = "Online proxy checker";
$pagedescription = "ProxyScrape online proxy checker, put your proxies in the textbox and start checking right away!";
$pagekeywords = "proxy checker, online proxy checker, http online proxy checker, socks online proxy checker, http proxy checker, socks proxy checker, socks5 proxy checker, socks4 proxy checker, socks5 online proxy checker, socks4 online proxy checker";
    include "assets/inc/header.inc.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h1>Online proxy checker</h1>
                        <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                        <p>Put your proxies in the textbox and start checking your proxies!</p>

                    </div>
                </div>
                <!--
                <div class="col-md-12">
                	<div class="itemcard downloadcard">
                		 <div class="box redBox">
                                    Sorry, our online proxy checker is currently disabled due to abuse.
                                </div>
                	</div>
               
                            </div>
-->
                <div class="col-lg-12 col-md-12 col-12 ">
          <style>
.table {
  width: 100%;
  margin-bottom: 20px;
}

.table th,
.table td {
  padding: 4px;
  line-height: 8px;
  text-align: left;
  font-size: 12px;
  vertical-align: middle;
  border-top: 1px solid #dddddd;
}

.table th {
  font-weight: bold;
}

.table thead th {
  vertical-align: bottom;
}


.proxy_loader {
  border: 3px solid #f3f3f3;
  border-radius: 50%;
  border-top: 3px solid #808080;
  width: 15px;
  height: 15px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.input{
  text-align: center;
}

.jumbotron {
  -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    background-color: #fff;
    border-radius: 5px;
    padding: 50px 30px;
    margin-bottom: 30px;
    text-align: center;
    box-shadow: 0 15px 30px 0 rgba(0,7,2.74,.050)
}

.jumbotron:hover {
  box-shadow: 0 15px 30px 0 rgba(0,35,137,.15)
}
</style>


<input id="download_btn_text" type="hidden" value="Download proxies">
<input id="invalid_list_text" type="hidden" value="The provided list contains invalid proxies">
<input id="not_finished_text" type="hidden" value="Please wait until the proxies are done checking">
<input id="checker_status_text" type="hidden" value="Checker status">
<input id="proxy_dead_text" type="hidden" value="Dead">
<input id="proxy_working_text" type="hidden" value="Working">
<input id="dead_proxies_text" type="hidden" value="Dead proxies">
<input id="working_proxies_text" type="hidden" value="Working proxies">
<input id="total_proxies_text" type="hidden" value="Total proxies">

<div id="jumbotrons">
<div align="center" class="jumbotron">
<div id="title"></div>
<textarea id="proxy_list" class="form-control" rows="10" placeholder="0.0.0.0:1234
127.0.0.1:3434
localhost:8080" style="margin-top: 0px; margin-bottom: 0px; height: 286px;min-height: 100px;"></textarea><br>
<div id="continue_div">
</div>
<button id="proxy_button" class="btn" onclick="StartCheck();">Check proxies</button><br><br>

</div>
</div>
        </div>
        
                <?php
include "assets/inc/blogcard.inc.php";
?>
            </div>
        </div>
    </main>
<script src="https://cdn.proxyscrape.com/js/ezproxy35.js?v=10"></script>
<?php include "assets/inc/footer.inc.php";?>