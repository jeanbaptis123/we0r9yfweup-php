<?php
header("Location: https://dashboard.proxyscrape.com/login");
die();
$pagetitle = "Premium login";
$pagedescription = "ProxyScrape premium login page";
$pagekeywords = "paid proxies premium, premium proxt list premium, best paid proxies premium, best premium proxies premium, premium proxies premium, cheap proxis premium, cheap premium proxies premium, cheapest proxies premium, cheapest premium proxies premium, best cheap proxy list premium, best cheap proxies premium, HQ premium proxy list premium";
    include "assets/inc/header.inc.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h1>Premium login</h1>
                    <img src="https://cdn.proxyscrape.com/img/section-shape.png" alt="section-shape">
                    <p>Login to ProxyScrape to gain all premium features</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                     <div class="itemcard">
                        <label for="serialbox"><h2>Login</h2></label>
                       
                           <div id="login">
                            <div id="lslide2">
                                <input placeholder="Your serial key here" type="text" class="form-control" id="serialbox" name="serialbox">
                                <button type="submit" id="applykey" class="btn btn-blue" onclick="ga('send', 'event', 'haskey', 'apply')">Apply key</button>
                                <p>Don't have a key yet?<br><a href="https://proxyscrape.com/premium?ref=nyk" style="text-decoration: underline;">Check out what you can get with ProxyScrape premium!</a></p>
                            </div>
                        </div>
                        <div id="msgcontainer">
                            <div id="mslide1" style="display: none">
                                <div class="box redBox">
                                    Invalid serial key, you can <a href='https://proxyscrape.com/premium?ref=expired'>buy a serial key here</a>.
                                    <div>
                                        <button type='submit' class='btn btn-blue loginbtn'>Apply other serial key.</button>
                                    </div>
                                </div>
                            </div>
                            <div id="mslide2" style="display: none">
                                <div class="box redBox">
                                    Expired serial key, you can <a href='https://proxyscrape.com/premium?ref=expired'>buy a serial key here</a>.
                                    <div>
                                        <button type='submit' class='btn btn-blue loginbtn'>Apply other serial key.</button>
                                    </div>
                                </div>
                            </div>
                            <div id="mslide3" style="display: none">
                                <div class="box greenBox">
                                    Serial key is applied, you can now use <a href="/dashboard">all premium features</a>.<br>
                                    <a href="#" id="logout" onclick="gtag('event', 'logout', {'event_category' : 'haskey'});">Logout</a>
                                </div>
                            </div>
                            <div id="mslide4" style="display: none">
                                <div class="box redBox">
                                    Unknown error.
                                </div>
                            </div>
                        </div>
                        
                     </div>
                  </div>

        </div>
    </main>

<?php include "assets/inc/footer.inc.php";?>
<script type="text/javascript">
function keycheck(serialkey) {
    fetch("https://api.proxyscrape.com/?request=keystatus&serialkey=" + serialkey)
    .then(response => response.text())
    .then(function(response){
        console.log(response)
            mslide1.style.display = "none";
            mslide2.style.display = "none";
            mslide3.style.display = "none";
            mslide4.style.display = "none";
            if (response.includes("Invalid serial key")) {
                msgbox.style.display = "block";
                login.style.display = "none";
                mslide1.style.display = "block";
            } else if (response.includes("Key has expired")) {
                msgbox.style.display = "block";
                login.style.display = "none";
                mslide2.style.display = "block";
            } else if (response.includes("Serial key is active")) {
                msgbox.style.display = "block";
                login.style.display = "none";
                document.cookie = "serialkey=" + encodeURI(serialkey) + "; expires=Thu, 18 Dec 2050 12:00:00 UTC; path=/";
                mslide3.style.display = "block";
                ispremium = true;
                usedserialkey = serialkey;
                window.location.replace("/dashboard");
            } else {
                msgbox.style.display = "block";
                login.style.display = "none";
                mslide4.style.display = "block";
                console.log(serialkey);
                console.log(response);
            }
    });

}

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
}

var slide1 = document.getElementById("slide1");
var mslide1 = document.getElementById("mslide1");
var lslide2 = document.getElementById("lslide2");
var mslide2 = document.getElementById("mslide2");
var slide3 = document.getElementById("slide3");
var mslide4 = document.getElementById("mslide4");
var login = document.getElementById("login");
var msgbox = document.getElementById("msgcontainer");
var keybox = document.getElementById("serialbox");
var msgtext = document.getElementById("msgtext");
var colorcontainer = document.getElementById("colorcontainer");
lslide2.style.display = "block";
msgbox.style.display = "none";

var serialcookie = getCookie("serialkey");
if (serialcookie != null) {
    keycheck(serialcookie);
}

var loginbtns = document.querySelectorAll('.loginbtn');
for (var i = 0; i < loginbtns.length; i++) {
    loginbtns[i].addEventListener('click', function(event) {
        keybox.value = "";
        login.style.display = "inline-block";
        msgbox.style.display = "none";
        lslide2.style.display = "block";
    });
}

document.querySelector('#applykey').addEventListener('click', (e) => {
    keycheck(keybox.value);

});

document.querySelector('#logout').addEventListener('click', (e) => {
    document.cookie = "serialkey= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
    lslide2.style.display = "block";
    msgbox.style.display = "none";
    login.style.display = "block";
});




</script>