<!DOCTYPE html>

<html lang="en">

<head>
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="e8dea03d-c444-4b5a-8290-dfc15a100857" data-blockingmode="auto" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ProxyScrape premium add extra bandwidth">
<link rel="shortcut icon" type="image/x-icon" href="https://cdn.proxyscrape.com/img/favicon/favicon.ico">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
gtag('require', 'getClientId');
  gtag('config', 'UA-101859787-2', { 'optimize_id': 'GTM-T2PCVNK'});
    gtag('config', 'AW-660743332');
</script>

    <link rel="preload" as="font" href="https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-Regular.woff2" type="font/woff2" crossorigin="anonymous">

	<title>Update your premium subscription</title>

	<style type="text/css">
@font-face {
    font-family: 'Montserrat';
    src: url('https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-Regular.woff2') format('woff2'),
        url('https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

		* {
			font-size: 1em;
			font-family: 'Montserrat', sans-serif;

			margin: 0;

			box-sizing: border-box;

			color: #3e445b;

		}

		main {
    padding: 3%;
			display: flex;

			justify-content: center;

			height: 100vh;

			background-color: #eaeaea;

		}








		.checkout {
max-width: 540px;
			margin: auto;

			width: 100%;

			overflow: hidden;

			border-radius: 4px;

		}

		.top {

			padding-left: 20px;

			width: 100%;

			padding-top: 23px;

			padding-bottom: 23px;

			background-color: #4B88C7;

		}

		.top p {

			color: white;

		}

		.main {

			background-color: #F8F9FB;

			padding-left: 20px;

			padding-bottom: 35px;

			padding-top: 23px;

			padding-right: 20px;

		}

		input[type="email"] {
margin-top: 5px;
			width: 100%;

			height: 35px;

			border-radius: 3px;

			border-style: solid;

			border-color: #e1e8eb;

			padding-left: 5px;

		}

input[type="checkbox"] {

			margin-top: 7px;
			margin-right:5px;

		}

		::placeholder {

			color: #d3d9db;

		}



		.buttons {

			border-radius: 3px;

			overflow: hidden;

			margin-top: 12px;

		}

		button {
width: 100%;
			padding: 10px;

			background-color: #F8F9FB;

			border-color: #e1e8eb;

			border-style: solid;

			border-width: 2px;

			display: flex;

			align-items: center;

		}
button:hover {
  background-color: #e1e8eb;
  cursor: pointer;
}
		.btn-icon {

			background-image: url(https://cdn.proxyscrape.com/packs/gateway-13800131138eb05882e43b36d8f0d8a8.png);

			background-repeat: no-repeat;

			width: 27px;

			height: 27px;

			margin-right: 8px;

		}

		button svg{

			margin-left: auto;

		}

	</style>

</head>

<body>

	<main>

		<form action="https://api.proxyscrape.com/updateaccount.php" class="checkout">

			<div class="top">

				<p>Checkout</p>

			</div>

			<div class="main">

 <input type="text" name="ref" id="refferal_box" style="display: none;">
                                        <input type="text" name="serialkey" id="serialkey_box" style="display: none;">
                                        <input type="number" name="bandwidth" id="bandwidth" style="display: none;">
                                        <input type="text" name="ga_clientid" id="ga_clientid" style="display: none;">


				<div class="buttons">
<!--
					<button value="pp" name="gateway">

						<div class="btn-icon" style="background-position: -79px -116px;">



						</div>

						<div class="btn-text">

							<span>PayPal</span>

						</div>

						<svg aria-hidden="true" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" height="14px" class="mla mr10 text-muted">

            <path fill="#c1c1c1" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path>

        </svg>

					</button>
-->
					<button value="btc" name="gateway" >

						<div class="btn-icon" style="background-position: -79px -5px;;">



						</div>

						<div class="btn-text">

							<span>Bitcoin</span>

						</div>

						<svg aria-hidden="true" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" height="14px" class="mla mr10 text-muted">

            <path fill="#c1c1c1" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path>

        </svg>

					</button>

					<button value="eth" name="gateway" style="border-top-width: 0px;">

						<div class="btn-icon" style="background-position: -5px -79px;">



						</div>

						<div class="btn-text">

							<span>Ethereum</span>

						</div>

						<svg aria-hidden="true" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" height="14px" class="mla mr10 text-muted">

            <path fill="#c1c1c1" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path>

        </svg>

					</button>

					<button style="border-top-width: 0px;" value="ltc" name="gateway">

						<div class="btn-icon" style="background-position: -79px -79px;">



						</div>

						<div class="btn-text">

							<span>Litecoin</span>

						</div>

						<svg aria-hidden="true" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" height="14px" class="mla mr10 text-muted">

            <path fill="#c1c1c1" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path>

        </svg>

					</button>

				</div>

			</div>

	</form>

	</main>
<script type="text/javascript">
        function parse_query_string(query) {
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

        function getCookie(name) {
            var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return v ? v[2] : null;
        }
        var refferal = getCookie("ref");
        if (refferal == null) {
            refferal = "none";
        }
        var query_string = window.location.search.substring(1);
        var parsed_qs = parse_query_string(query_string);


        if (parsed_qs.serialkey != null) {
            document.getElementById("serialkey_box").value = parsed_qs.serialkey;
        }

if (parsed_qs.bandwidth != null) {
            document.getElementById("bandwidth").value = parsed_qs.bandwidth;
        }
        document.getElementById("refferal_box").value = refferal;

        document.getElementById("ga_clientid").value = "none";
setTimeout(function(){
    ga.getAll().forEach( (tracker) => {
  var clientId = tracker.get('clientId');
  console.log(clientId);
  document.getElementById("ga_clientid").value = clientId;
})
}, 2000);

    </script>
</body>

</html>
