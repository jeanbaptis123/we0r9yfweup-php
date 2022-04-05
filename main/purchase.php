<!DOCTYPE html>
<html lang="en">

<head>
	<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
	<link rel="stylesheet" href="https://cdn.proxyscrape.com/css/placeholder-loading.min.css?v=3">
<script>
  window.TrackJS && TrackJS.install({ 
    token: "68b50b0842b5417aa0b2b68a95b34ce0",
    application: "checkout"
  });
</script>
<script async src="https://cdn.requestmetrics.com/agent/current/rm.js" data-rm-token="x7ca4ny:v4jh8cp"></script>
	<script id="Cookiebot" src="https://cdn.proxyscrape.com/js/uc.js" data-cbid="e8dea03d-c444-4b5a-8290-dfc15a100857" data-blockingmode="auto" type="text/javascript"></script>
	<script type="text/javascript">
	function CookiebotCallback_OnAccept() {
		if(Cookiebot.consent.statistics) {
			console.log('thanks');
		}
	}
	</script>
	
    <?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$url_canonical = 'https://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo '<link rel="canonical" href="' . $url_canonical . '">';
?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ProxyScrape checkout">
	<meta name="robots" content="noindex, follow">
	<link rel="shortcut icon" type="image/x-icon" href="https://cdn.proxyscrape.com/img/favicon/favicon.ico">
	<!-- Google Tag Manager -->
	<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-5574P3K');
	</script>
	<!-- End Google Tag Manager -->
	<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('require', 'getClientId');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
	! function(f, b, e, v, n, t, s) {
		if(f.fbq) return;
		n = f.fbq = function() {
			n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
		};
		if(!f._fbq) f._fbq = n;
		n.push = n;
		n.loaded = !0;
		n.version = '2.0';
		n.queue = [];
		t = b.createElement(e);
		t.async = !0;
		t.src = v;
		s = b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t, s)
	}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1704999106306439');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1704999106306439&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
	<link rel="preload" as="font" href="https://cdn.proxyscrape.com/fonts/montserrat/Montserrat-Regular.woff2" type="font/woff2" crossorigin="anonymous">
	<title>ProxyScrape checkout</title>
	<style type="text/css">
	.redBox {
		background-color: pink;
		border-style: solid;
		border-color: red;
		border-radius: 10px;
		text-align: center;
	}

	.box {
		margin: 5px 0;
		padding: 20px;
		width: 100%
	}

	.box a {
		text-decoration: underline
	}

	main>div{
		    display: flex;
		    align-items: flex-start;
	}

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
		align-items: center;
		min-height: 100vh;
		background-color: #F8F9FB;

	}

	.checkout {
		max-width: 540px;
		width: 100%;
		    margin-left: 320px;
	}

	#description {
		background-color: #fff;
		width: 300px;margin-top: 76px; margin-left: 20px;    border-radius: 4px;
    box-shadow: 0 15px 30px 0 rgb(0 7 3 / 5%);
        overflow: hidden;
	}

	#description_text {
	
    padding-left: 20px;
    padding-bottom: 35px;
    padding-top: 23px;
    padding-right: 20px;
	}

	.top {
		padding-left: 20px;
		width: 100%;
		padding-top: 23px;
		padding-bottom: 23px;
		background-color: #4B88C7;
	}

	.top h1 {
		color: white;
	}

	.main {
		background-color: #fff;
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
		margin: 9px 8px 7px 5px;
		  -ms-transform: scale(1.6); /* IE */
  -moz-transform: scale(1.6); /* FF */
  -webkit-transform: scale(1.6); /* Safari and Chrome */
  -o-transform: scale(1.6); /* Opera */
  transform: scale(1.6);
  padding: 10px;
	}

	::placeholder {
		color: #d3d9db;
	}

	#buttons {
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
		background-image: url(https://cdn.proxyscrape.com/packs/gateways5.png);
		background-repeat: no-repeat;
		width: 27px;
		height: 27px;
		margin-right: 8px;
	}

	button svg {
		margin-left: auto;
	}

	/* test code */
	.payment-selector {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}


.payment-selector .custom-radio input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.payment-selector .custom-radio label div {
    width: 90px;
    height: 90px;
    position: relative;
    border-radius: 100%;
    line-height: 120px;
    border: 3px dotted transparent;
}
.payment-selector .custom-radio img {
    cursor: pointer;
}
.payment-selector .custom-radio label div span {
    position: absolute;
    bottom: -10px;
    left: 0;
    line-height: normal;
    text-align: center;
    right: 0;
    color: #041c4c;
    font-size: 14px;
    font-weight: 500;
}
.payment-selector .custom-radio input:checked~label>div:after {
    content: "";
    position: absolute;
    right: 10px;
    top: 3px;
    width: 7px;
    height: 12px;
    border: solid #fff;
    border-width: 0 2px 2px 0;
    transform: rotate(
45deg);
    background: transparent;
    z-index: 9;
}
.payment-selector .custom-radio input:checked~label>div:before {
    content: "";
    position: absolute;
    width: 28px;
    height: 28px;
    background-color: #2187ef;
    border-radius: 100%;
    top: -3px;
    right: 0;
    z-index: 9;
}
.payment-selector .custom-radio input:checked~label>div {
    border-color: #2187ef;
    background: #e8eaf0;
    cursor: pointer;
}
label {
    display: inline-block;
}
.payment-selector .custom-radio input:checked~label>div span {
    display: none;
}

.payment-selector .custom-radio {
    width: 100%;
        margin: 10px 0;
    max-width: 16.66%;
    text-align: center;
    flex: 0 0 16.66%;
}

@media only screen and (max-width: 1300px) {
	.checkout {
		    margin-left: 0;
	}
}


@media only screen and (max-width: 920px) {
main>div{
		    flex-direction: column;
	}

	#description {
		margin-top: 25px;
		margin-left: 0;
		max-width: 540px;
    width: 100%;
	}

}

@media only screen and (max-width: 767px) {
	.payment-selector .custom-radio {
    flex: 0 0 20%;
    max-width: 20%;
}
}

@media only screen and (max-width: 575px) {

.payment-selector .custom-radio {
    max-width: 25%;
    flex: 0 0 25%;
}
}

#totalpayment {
	margin-top: 20px;
	    font-size: 1.1em;
}

input[type="submit"] {
	    padding: 15px 40px;
    background: #3464e0;
    color: #fff;
    border-radius: 5px;
    outline: 0;
    box-shadow: none;
    transition: none;
    margin: 16px 0 8px 0;
    font-size: 16px;
    border-width: 0;
	}
.loader {
display: inline-block;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #4B88C7;
    border-radius: 50%;
    width: 13px;
    height: 13px;
    animation: spin 2s linear infinite;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.loader2 {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #4B88C7; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
      margin-bottom: 20px;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

#redirecting {
    display: flex;
    background-color: #fff;
    justify-content: center;
    flex-direction: column;
    padding: 50px;
    align-items: center;
}

@keyframes changeLetter {
	 0% {
		 content: "";
	}
	 33% {
		 content: ".";
	}
	 66% {
		 content: "..";
	}
	 100% {
		 content: "...";
	}
}
 #redirectingtext #dots:after {
	 animation: changeLetter 2s linear infinite;
	 content: "";
}

#order_title {
	display: block;
    font-weight: 600;
    padding-bottom: 0.7rem;
}
 
	</style>

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5574P3K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main>
		
		<div><form action="https://api.proxyscrape.com/v2/order/create" class="checkout"  onsubmit="formsubmit()">
			<div style="display: flex; justify-content: center;padding: 20px;">
<img src="https://cdn.proxyscrape.com/img/logo/dark_text_logo.png" id="toplogo" alt="dark proxyscrape logo" style="margin: 0px !important;">
</div>
			<div style="    border-radius: 4px;
    box-shadow: 0 15px 30px 0 rgb(0 7 3 / 5%);
        overflow: hidden;">
				<div class="top">
				<h1>Checkout</h1>
			</div>
			<div id="redirecting" style="display: none">
			<div class="loader2"></div>
			<h1 id="redirectingtext">Redirecting<span id="dots"></span></h1>
		</div>
			<div class="main" id="checkoutform">
				<p class="newuser">Email</p>
				<input class="newuser" type="email" name="email" placeholder="Email to have product sent to" id="email_box" required>
				<div id="invalid_mail" style="display: none">Please provide a valid email address.</div>
				<div id="no_mail" style="display: none">Please provide your email address.</div>
				<div id="parameter_container" style="display: none;">
					<input type="text" name="ref" id="refferal_box">
					<input type="text" name="key" id="key_box">
					<input type="text" name="ga_clientid" id="ga_clientid_box">
					<input type="text" name="wd_user" id="wd_user_box">
					<input type="text" name="id" id="id_box">
					<input type="text" name="sessionid" id="sessionid_box">
				</div>
				<span style="display: block;margin-top: 15px;" class="newuser"><input type="checkbox" name="accept_tac" id="accept_tac" required>I accept the <a href="/terms-and-conditions" target="_blank">terms and conditions.</a></span>
				<span style="display: block;margin-bottom: 15px;" class="newuser"><input type="checkbox" name="lose_right_of_withrawal" id="lose_right_of_withrawal" required>I agree to waive my right of withdrawal.</a></span>
				<div class="box redBox paddle" id="paddle_unavailable" style="display: none">Sorry, this payment method is currently unavailable. Please choose another payment method.</div>
				
					<h2>Select your payment method:</h2>
				
				<div class="payment-selector">
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="credit_card" id="__BVID__10" required>
      <label class="custom-control-label" for="__BVID__10">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAhCAMAAABDYWOIAAABSlBMVEUAAAD/mAD/mADWAAD/mQDVAADVAAD/mADVAAD/mQDVAADTAAD/mADVAAD/mADVAAD/lwD/mAD/mADWAAD/mAD/mAD/mADVAADVAADVAAD/mAD/mADWAADWAAD/mADVAADVAAD/mADVAAD/mQDZEAD/mADWAADXAADVAADSAAD/pADJAADVAAD/mADmIgDVAAD/mADVAADVAAD/mAD/tQD/mAD/mAD/mADUAAD/mQD/mAD/lwDWAADUAADVAADVAAD/mADVAAD/PQDSAADPAAD/PwD/LQD/owD/MADWAADMAAD/qAD/RQD/SwD/QgD/qgD/OgDZBwD/oAD/YgD/VAD/SAD7NgD/JwDuIwDgDwDUAAD/pQD/mgD/kQD/TgDqHADdCgD/rgD/mwD/gwD/fgD/eAD/cQD/NgD0LQD/IwD/aQD+ZgD/XADzKgBibIxmAAAAQHRSTlMA8upOKvrZzrutlXgT5eLQnH5dVPr2393VxsW+op2KhXx3a2pdV0UtJQ0J7uzUx8fBr6mUfWRCQDw7IR4aGRgFnq2nMgAAAd5JREFUOMuNlWdb4kAUha+E3hZkbWvvq9t7X5OBkABJAJGiCPau//+r5EmEYU589P3+PmfuyZ0J8fyXYtHZ6IL0j/r4R9Op1NzyL/JG+hRQHALhDNnE0yHZJfnFj8ZSUOGZiNFmZETmmf4xbPwNK0MUssX34yVZYJFX1gKgtJh+ciRKoYHyUxHI5lqmpeunkPQq7iqvFZHiQZcxVc93yiC5zqRgFHKHhsVsyZK3RSlNNgtwsmyjzmzUqxqMJPsfOZnJHC4qHU10Ij0nJip72YbhOmqzVoag30TBguDkdm3FDWIdmChF63i0lsn65M+gbx/FPBowOOccDveSPoNTZSrn1CBnhKYUGMfiHH1H2wfnBToG453tZzpP5ITBOVT5eW7bOE8UOihULM65hg7GKANrkLus812XsOuNgOe6uVT0k7bHxZvx+EBWP6arHYvOKJGEy3NnDlanjKvTI4jN1Z3m1LzZhphl21mHFoqtujNNE1+E5CbZzO/BE9IwKz2neYO35w85zMCDUGVGT9kpweVZpQfColSsWsZVV9OwswHzmHRZA8W3SjyZhCC9WfkqKh/jNMzWCr/hk0sbRP65Mc6IfCcP1qJTwcTbxMSHWYkc4t8ioXGfL/luepH7ldwDV8FmxZ2PtIoAAAAASUVORK5CYII=" alt=""><span>Credit Card</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="paypal" id="__BVID__11" required>
      <label class="custom-control-label" for="__BVID__11">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAtCAMAAAD1JOlfAAAB0VBMVEUAAAAAKo0ALooALYoALYoBm+EBqu4ALYoAJYIAKokAmeMAJYMAHX8AIpoALIkAI4MBm+IBpOYALY8BmuIAH38BpusAHn4BnOEAHH4AK4kALYoALI4BquwBm+IALI4AGncAJoYBm+EAKIgAEYQAL44AK4oAJoUAK5EALowAmeEALokBse8An+sBneEAGXkAMIwALIoAF4MAm+AAJIMBmuIAL4wApOgAse0Am+kAK4UADHYBm+MAMI0Ake4AnuIAKYkAmusAH38BmeIBmuAALYoBpOkBnOAALogBp+oBn+IALYoBneIALZMAHn8Bqu0AM3UBoeIBm+EAEIEBmuIBqfABmOEALooBnOIBm+ABsO8CrfEBmuECt+4Bm+EBm+EAFH4BmuIBsPgBmuABvPsBsfABu/QBouMBneIAFHkANZEBsPEAKYwBs/kAL4sAnOEBpuMAFHgBr+4ALYwAFogAqvMAKZYAK5AAq+4AGnQALIsBj98ByvsBse8AnN4ApvIAsOUAoOwB0v0AJZoALYUALYoBm+EALosALYkBnOEBmOABmuAALIkAKogBmeEALocBnuMALYYBoucAMooAKYYAJ4YAJYMBkt8Bnt4Bmt0Bj90AM4Hakdc+AAAAhHRSTlMAAyCYlevEnEU4eT4oE/38+/rs6efh4NrV1M/LycSysqygoJSRjX14d3BvbmhlYl5ZVlRMR0IyLCAeHBkYDgkHBf389vLx8e7t5+fl2djX1tLRzs3MwsK9vba0sqyopqObmpSTjo2NjYyJiIeAfnx7e3RzcmtqVFNQTkxLSEJBPDc0JgqOqvysAAACH0lEQVQ4y33UZVvcQBSG4TfLdrtKcadIcStSvEjd3d3d3T0TWy9Q+7UdkrNhYXZyf36uM3YlcMx1+bkibj1X5G/vGgwpEDRrqqD+kQ+rbbUrQXHb6omjcbWwIzHk2SzLUgfz53Vokkz715GXtaoymbK8cXWqlB5yq7md8izzys2+q7p8WqebvU7Jp2k9btapq3Jv3azII1uIzXymrF6+qF6Fr+lPdqXskQ9LbUKvsWMenE+Vi0cQYEYfuIjHOSswm2bGBXp4mZ8DeGgy4wS4Nnl1HPOlFmPV4DbKpmlLU7j2hzF2DFytJNO2hfDBtHh2FkCsuPCNaYei+MZMxrUACBW8r0zFU+Djdrti3QAGtZVbStgWl6quDAG478yy2ASABzptRW0eCI4GR0YiPgXATG+lyWzmUfugKdpMK3Jmx56dK7WSTmWYw+DqaNpCFDcaAoFAw+G92TSzLEbMffbDl9G0DVCyFlvLSP79Am5S15w1azCWZqLfYSx7l7unJrw0xOrXE9ie69Tdxc3kmsZi1e/h8OemDeF8/rRkkpWc6VdATlOWiKIyl+2+1HL1Tnh4Giv263RQBVmqSiYA2a+tBuN0UOMUBME4PVUT+mhN8zYEPXH3E7pl0ub7IWinRTMvcJEytgWCWsoSQZy06LamIbiXcLLFH9hFax5AAZM+2xTGDcoa4eUNbc24Di/h3EN2w0uj4R7Uy+PydcvKL0P0H2qZJlewiSXbAAAAAElFTkSuQmCC" alt=""><span>PayPal</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="BTC" id="__BVID__12" required>
      <label class="custom-control-label" for="__BVID__12">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAxCAMAAACvdQotAAABnlBMVEUAAAD3kxr4lRn7nBT5lhj4kxr3kxr4lBj5lRf4kxj4lBr6mxX5lxj7mxP3khr3lBn3kxr3lhr3lhn3mBj3khn4lBr4lBr5lxn5jxj4jxn5mBj4lBn4kxr4lRf7pRL3kxn3lRn3kxr3lBn3lRn3lRn3kxr5mxn4lhn4mRf7qxL4mBj9mBv5nRn5lRf3ih72lB32jhv3exv3jxj3gB/4ox34iRf4jxv2lRr9swj2khn3kxr////3khn3lBv2gAD2fgD3kRr2hwL3lRz2hQH3kRX3jhH5pUP3lh72kRv2iwn2hAD4mSf3khb3kBP2iQX+9ev4nC32khz2jhz3jQ72gQD/+fP+7tv7w4D2khn2jQ31eQD//Pn+8uL82a/816r6uWr6tmT5q073khv2fAD94sH80p/8z5n7wHr5sl34oDb3lhn1dAD0bgD//v7+9+/+6tP95Mb94L3827H81aX7yo/7yIz6vHD5r1X4ozz4njH2ih31dgD/9u396M793bf82K37xor6vnb5qUn4ojn1cQD+8+b95sz70J35qmLyVQBylLTrAAAAOnRSTlMA8qwQMc28hX94UkUiBfTx59rGu7Snl5GLd3ZrYxYL9urj4NS3nouKWkk+Nx8a+/rz7+7RycTBZSopIXAOEQAAA1hJREFUSMeFlfVDGzEUgDNkDHcbMnf3Le/8rnZ1p6W0lOKwAWPIcJv912uv5Xi5tvD9eLkvyZMkpJyRpoaa+jvt1zru9Qw8biFXUjt8/xa9gOO6bl5uvXjYzkmUhaO9ddWNxlsSR8vhuL7aykJdPa0Gd7upkjFML2GKGyg3bozRS5FqrMaAQjGKpvs0nmKCPaxxM8jG7eG3AolFr0/DDrPOk9AUZVBPYXxWpm5ZdlAT5w1Uv5dj5iYcPlmjvLgJkF7ORqczPnrBzjNT6XZSE9vCqSxGkmmAreU4wGwOKc7b50ZzCH0WDmD1R9YRA7+6uwZgV5kUnG/tbpCauBQoMA4QCyzuQSphY8oj1RZjd1KkBFbHocQ3gMOliIfHW3toKF24EXlNlTa+gmkdnkRw0mhbwXhu6URNkKMA8NVfsiY0HTtNhSpau13eLqyyErbHY4aTsrl4tm+6rc0lzkGemaSek+OGsy6iVmsnZKSNWoh8hzyTAuVdSz+M9CkJdA7qSLPVCHuNKAI+SpWcHQr89CHlExmynkPV+G11V5Rd6tmGkTZPGI0/Ig20Yiipo/kFt3uumDMRT9tL+iqGYhCFIgGZIu6TBxVCwUTT9ghz/K6bChvKint+tlgVv32Z51ml3xrKsVGVJUFMzKegmG5GqSGNuMG8Nip8L/3Gh5PhfcNxu/D91EeaKMJr29X9ZiUcyW1DmRPxtIPky0UCFfE4dpSGPL9Vb2FUdxvKBqM0E3JPMs+w6xcUmUkKgq6KxX6BTYEiagnpN0+YkDEzuz+bydqzM6W6+JDRRQh5im6KyT8rUMYaLv5YI8nTYd5HYUFwueNWxa3iJL8oKINBnLOzE4D1v2umkLILClPIAqOLEi7lOkD23zzARHxiejq9yTHtMvasdOnjm8/mh3FH7iBfmmVdlnXBhQ36kZR4GzR3Ky8AxHKeKOx5Eh5NYw8T53x+cV2aQ5qyHZ9MbgFMi9QKv9NATPpD/PlnThVkbyAzkVHLlNB7gviws4jGHDZBTyjWNZxvmEe2tTNEGTweqxF69ZkwjL676q18Xfb6t3ZL3CUG19lCynkkSdUf8ZpWUomn9VzlFaY6HpNqDN2tZLQ1jJLqtA5ftxr1gyPkClqGejuvlbjT01hHrPwHEJzYNL1W+T4AAAAASUVORK5CYII=" alt=""><span>Bitcoin</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="ETH" id="__BVID__13" required>
      <label class="custom-control-label" for="__BVID__13">
         <div><img src="data:image/png;base64,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" alt=""><span>Ethereum</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="webmoney" id="__BVID__14" required>
      <label class="custom-control-label" for="__BVID__14">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAxCAMAAACvdQotAAAAk1BMVEUAAAADbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLUDbLWSGQScAAAAMHRSTlMABJaOCDDzwaGbcfC6hms6IBl/YkkrDeawqmVANCUc6timeV3d1MxVT0QV3NC3w9+MMM+oAAACnElEQVRIx4XW52KqQBAF4AEUEMQWERGjib3nvP/T3R3YQlm93x8CMsIcho3U1R8NgkPs+/EhGIwKh/6n7/2gYTub0CfXJ1oFaxcIrz1643sJKXZROk6JAsC/kd0IuiKlCMKQG3G2fkp2v1DuG7GbACGVprxbUEfvBOW1IJaHfHhGpQRep8LktCRBRrs4IRebWyiOR624H1BcEoIDsclBHPgiSsGaYedQZnyJoehcbC8x2JxoLjZnx57VF7d7BMreh6hsxBnZmuqmUOZiL92i5KlIZhxH42Gab8umYucLyo56f2Kzoq61ng5u0EPtmlMutAigpfWaUFz0GpE2menJguFvzBjoE65hVZHpx5mgJlvI3kwLBfDLhRDcKugD6o5O9WAvKqR+mR5XCj89c1/Gi+dkKNJOso0JMHE4pZxKK7Q8b8Q8vksTRl9UD6jiou2sX4Wj/nzlkPFEC0+sI4MPiOgop8I4oWksjo3/IOUO3fiuGsyLYgbzAi0R01GbSPdpKcFIHNxDOskLjPcqE5HB3dp+JN9QM4ZjFUVID3QUaiZUqnM5f4XP8ZTTYZjpHOgp643A4mk5CmP+qIs/pWEiWniIMzaQFiKYcfkSW2R9dUM822eUXPVm9mGzI5VbpgZtRdrWWmFS48nf8Wgr1mb2PM0hJM8h8s6N9R4dS3HXt8Y1mTsgyRbzg5eqWH3BRI18RB8CCMzlXSot5QCqva6cB6v6g03ucmgdKt1g4VbPxWs2HHNJ9QAsZhwuV0R8lxsfws937T+YxUgvDk/Z8ctpvZv2ReCiRvpaZmI4R1gUegFKOA2HGnovWHzrLiOyCPFRShYrH29t9z2ymeR4w13QO8USFr99+iRNWqvUvftLyf577B77vn8IwmhNHf8ALgvoJPaAA2YAAAAASUVORK5CYII=" alt=""><span>WebMoney</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="alipay_cn" id="__BVID__15" wd_ename="thisisatest" required>
      <label class="custom-control-label" for="__BVID__15">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAtCAMAAADiBnmWAAABAlBMVEVbnt1bnt0AAABbndz///9bnt1ant1bnt1doeBbnt1bnt1bnttdouJandxbnt3U5vahyOxWm9xOlto6i9ZWmNdhpeVaoONdmttTldRbnt3///88jNdant1doN5VmtxSmds/jdc5itbt9fu92PLl8PpKldpCj9j8/f9EkdlNltpXnNyx0e9Pl9ulyu1Ik9nr8/uy0u/f7PmYwuoxhdXn8fra6fjP4/W71/GdxeuTv+mCtuZ+s+V7seRxq+Jhot/y9/zS5fbD3PO11PCKuueHued1ruNsqOFpp+BGktn1+f3A2vKqze5mpeApgNP4+/7j7vnJ3/SNvOitz+43idbv9fwbedAWOobgAAAAGXRSTlPyoQD+8vbO5ryYcWhUH/Py8vLy8peUgiQNWIQa6wAAApBJREFUOMuN0ud2mzAYgGEVNzvpXpKQEHaRBQZc4z3jbccjs73/WynTBuOc8P6TznN0PoGAJEmXpzn4Vifn15IEpF/nMFvfXXxKMmLyDVyTXEacI+DIvDL1OjI3ADAdpYqiwFQAnKT2zE3loVJpQJrG6ZO1OXIrQjML1hdFF5eh8jo2lCg+8LFi73bk1MlylBacLCu7ncOTxTQfVf7rz5wv7zY2ehKrLfR6czuJ9V4hajzyxrgvNKON5kBJYkKZGrbVPFxTq8EScy6T1AVpmAi+BtWCJYGpC0J9/jvsoeZfMFzVLA5TWMzQ8dosjZXNn7BS2Hrs2TuopDExcDL2r+/hFT76NoKftV/yhocnLI1NjvnSXnLGhGkEj2/j35OYB5hojEzWq8awMSo53YGNuWKQF8fDBQwPMBuMb9Guu+G6A+0q879gXyQxUaf36KDb4dMauT1imMCEe1+4Unrq9ftdp1BBse7lrZHA1HRHmC4xW2qawExftOr7iayZhoWyx6KLir0qhWHUxlpvVStGvm7NZMbMELMWalZhPENs4S3al19NCMO24WL8jJ5wAhOdP6JkdyOnr311sYWmLGHNl5EvOmMUr/4JAD5Blkpi1sbN4Lltcb8UH+c9APoCPah0R2VVC2ZouRdZqrKVj2OZNZBV1aPXg3s15OVg6o+vyu36HkMbImTpGDPGsJgHIxQ7VYOEN1C1SWWHCe4iVG5a7XZrPER+owGOXYJivdMIMYS4l09cu8NEcOye8+7QxR+8FaNOOFix8jzTmBzYGDeY6H4EJ8FgWJ9PnVa7szCxCKZN8y/gLFwYGmeYCZ3C1yKfwTuYOQB+wuwB6Ucuqz0DknSVUZ/euFi6ubx492YXV5L0H59Z33DDTlDUAAAAAElFTkSuQmCC" alt=""><span>Alipay</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="ideal_nl" id="__BVID__16" required>
      <label class="custom-control-label" for="__BVID__16">
         <div><img src="data:image/png;base64,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" alt=""><span>IDeal</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="unionpay_cn" id="__BVID__17" required>
      <label class="custom-control-label" for="__BVID__17">
         <div><img src="data:image/png;base64,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" alt=""><span>Unionpay</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="LTC" id="__BVID__18" required>
      <label class="custom-control-label" for="__BVID__18">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAABjFBMVEUAAAA0XZ0zXJ0zXJ4wV6EpTbAuZJU0XZ00XZ0zXJ00XZ0wXpozXZ00XZ0zXJ4zXZ0zXJ01XpwxWKEzXZwyXZ40XJ4wXZsxWKEzWaAyW580XZ00XZwwWKEuXJszXJ40WaE0Z5MuVaU0XZ4vWKEyXp0zXJ8rWKIzXZ0zW54yWp8yWp4vWKAwV6E0WaEwWKQ1V6E5cYo6Z5Q9XJ0zYJo0XZ0sUqk3VKI/WaFBaJM6aJE1W50SP740XZ3///81Xp40XpwOP4uars4URI5qiLczXJ0wWpsKPIksV5oqVZgWRY81XpsiT5VnhrZHbKYfTJP7/P15lL84YZ82X5svWZsmUpeesdCPpsmAmsJDaaU9Y6E3YJkaSJENPor09vqywtqUqsxbfLAzXJ82YpgcSpIRQYwAJ33t8fbr7/Xn7PTe5O/Y4O3O2OjL1ebH0uSuvtiitdNfgLJUd61BZ6Q5YaA7Ypg4ZJYFN4fb4u3V3erR2um5x923xdysvdeoudWJocZzj7tyjrtjgrRRdKsAMIIAnUwrAAAAPHRSTlMA8um8IQ8I9u3Irxjj2NTOxKail4eDalpPST40LATy3dO6taqejYZ+eHRjQzolGu7n49LSzMvHr6yokx648snqAAACuElEQVRIx4XU91MiMRTA8YcICth7PXs/r/d7ZFfcZUGko6LYe+96vf/jB2QXs5sA3xl+YfhMQjIvwOfpaG101dhsNfXulvZKKJunzV6FD0noGi+tppurkK+xuyhwjigorumJWHTWYLEk26RItGLJhnnxXkKmeDLoy5WKo1GD0yIG7pBNTf6ZzxXW0Ii8MJt321usIKtL3nzrsoJGd69ZMTonIZviO6VkUWa+vB16EFMJs8DQcpSScASZVtoM0fuImAWRf1HxeUdFtm3jfpoTaEk+p2TGT5BtboCKyi3JIgLaASWXQTSXeJwnjVaBwU0qDrQAmiOunHAoVkL8G8YRozXSkyUTc2hJ3flCSUwmaEn6kCX1aC0SpiJ6HUKuCgAP3Zbo6k+DKvJ1QztHcPerfvV+wgtpAkY4klLWKLnKBDTCkSEY5MjuPBXH9/dqmNuaUg91/BFfULKwvHA4mxH8/wq0lAwdUbKf/WgpjlSBzbKG9u/aW2jDh1w2M7mJrKbS3+jP185j4ZBKeGLaGAmFF469erE9OUKFdWO17GnIJ16j6E2EoKhqsONDO1fe/Zl1Ss6CilBIddDMXuJmDPd+UPLTT8TEDZPMSMYDvqAx9X8zKG4MpiXz1P+m4iiUFAupC6DPNC/yd/3qi+3rUS/AaIKd+sAhJek9H1MgXniXmnKvhWjq12YvZ5nSWmGV/HthlyxTz3fhN0Qt5Opmpj5zIiRLu7rADshnJ4WpTwtFdDmkP30vgeZBYkx9TEjOfAoV2AN6bTpRfZ/E+9JPXGqBQm9X6HSpizOCFkmALvIGmPpvt3IbI0FZlJa7FoU8c7LE0beNZVp5+hFMOfqlMuR5JVjqdZcWDQ7gGy++joQtIKzHXgy4uqBYHQ0i8KodStU1XGF5HZo6oVzOqTF3XbUtW3XtYGsn/6//A+5G4UlAf2ABAAAAAElFTkSuQmCC" alt=""><span>Litecoin</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="sofort" id="__BVID__19" required>
      <label class="custom-control-label" for="__BVID__19">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAgCAMAAAC8RHExAAAAilBMVEUwPEIAAAAwPEIwPEIwPEIwPEIwPEIwPEIwPEIwPEIvPEIwPEIwPEIwPEIwPEIwPEIwPEIwPEIwPEIwPEIvPEIwPEIwPEIwPEIwO0IwPEIwPEIwPEIvPEIwPEIwPEIwPEIwPEIwPEIwPEIwO0IvPEIwPEIwPEIwPEIwPEIwPUEwPEMwO0IwPEIwPEKs9HGWAAAALXRSTlPyAO7r+1jIxBr4hDuzKtvSoJqSeUjiuqpxUUs1MAoG1cC1gXx2aiIfE7pmEANniMGkAAAA8klEQVQ4y+3Rx2rDQBSF4ftb01St5t67U+77v15kAkFkJW9CCDmbOQzf4jAjNIVEAzI6rKTWoTGiT9h4sBWRf/szdux9FpnMqcbOHyaa7bu7qdfCO+en0rcWyJMNlBLgngQ4GiC9ADDq2Rm3vZttFwXtmXLqwrVgXTNZMEmYZ+P+hop3a5aoMM/Jowqj2Jbmlqjl+15/xWI1pSS1u02uZ+o7nDQm7Vu3WqeWtxmrC1X62EaY0yScCJrw0rdHYNuO9RUqDUtVrbc02q51EWSZa9+aryfsuvls3SGPEptf+sd/0MZPWB2cWLLhWDZlJKMh2dkPD+vAn5rBCksAAAAASUVORK5CYII=" alt=""><span>Sofort</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="eps_at" id="__BVID__20" required>
      <label class="custom-control-label" for="__BVID__20">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAfCAMAAAB9EQVVAAAAjVBMVEUAAADCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2zCA2xTy9oKAAAALnRSTlMA87me+BPowO+XNS4H26aD1WdrYh930LB5XVNNJ+LHqaGfk29IQzcZDoxXQDrX3jdbMgAAAYFJREFUOMudleuyQzAUhVdJNYjQUqX0fuH0st//8U6COTUcM/T7YRvjy9h7VgT2bCobHGgqe5jUwvNGOEbbOeRA4U9yTFQsJzgW8Iq9EFiMd84QM1VcPMY7a0CXG9zxjh05uiyjcITTY7QjTSnt89k+yqPJxzlbtIj4GIdVr/qGcXaAetz7yza1GSmC9OXc707YdebAg5HGr501NFGsAoWGvnPXK8bqslJOZc4FIDhlEK6jSLuOwJv4E4jeRCU8BpQGs5QeUg53oJ85Ebc3G9PT85gZgCSFg5IeENcsy8JFz7l/FkrAbcBrmmM7NNhdp1AplYuKZ+UEdZIEo3jrKkqAd/uxyMrRwE+ApR7/ADeqqO4X3blt9a4zj6fTSUrmA6/rNdf6Jk3DlcIFdl0HCX24oMFg+OPyTw6e0rMqAt17ERXuMqCbmNfkfjdvDloI/fEBaWYea+hnlPvrJFmvlprLXidnN3H/aCeY6iRfOCEQT3WO12y4n2/+10PnAmPD58Iv9TzCJRGWT80AAAAASUVORK5CYII=" alt=""><span>EPS</span></div>
      </label>
   </div>
   <div class="custom-control custom-radio">
      <input type="radio" name="gateway" class="custom-control-input" value="p24_pl" id="__BVID__21" required>
      <label class="custom-control-label" for="__BVID__21">
         <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAAUCAMAAADx/z7SAAABF1BMVEUAAAAAPWsAPWsAPWsAPWs3zb02zb0APWsAPWsAPWsAPWs3zb04z743zb0APWsAPWsAPWsAPWsAPWs3zb0APWsAPWsAPWsAPWsAPWsAPWs3zb03zb0APWs3zb0APWsAPWsAPWs3zb03zb03zb03zb0APWsAPWsAPWs3zb040b8APWsAPWsAPWsAPWsAPWs3zb03zb0APWs3zb03zb03zb03zb03zb0BP2w3zb0APWs3zb0APWs3zr43zb03zb03zb0APWs3zb0APWs3zb0APWsAJV43zb03z7440L8ANmc93cY508FA5Ms3zb03zb0APWsAPWsAIVsALGI3zb03zb1E79AAKF83zb03zb1B5swAPWs3zb0AMGOww0KHAAAAWnRSTlMA3wP65unl2GpUTDky+e/Rv7itoZWKZV01HripnpiPfm9iX1RPRSoWFAT01Ma8qJKJhHNsQS4oEQwMCAju2dKzm491WjwkIxAC5+bd0sXEsaKLhX99dTcrHgfa0kG9AAAB0klEQVQ4y5XT11YiQRSF4d12kxqUIEPOGUniCAg65jQ5p13z/s8xp5qmuQL1u2Txc05VLfB8v2tXxaNjvMxxTjk+1uFpp4IincFG91K5jrBicKm/g83qbnUC184eD6LRnkkWNiQPVTnUa129AbzMYkyvatCcY16O9T9X5sh8ubQBtJLDO/w9U6qG7q5k96hjOkELgjQgxuSpTNasWZYMAIjy3wwR+f4I8CtVxOgcjStcx5pA6DoNMSBRJkuVEllGgsyiTX7FT79kYT3Nh67KISybFmgOKk07lUol9O9nZxAmk0iTIaTIO3xQyh8BDnWbl4HTXcioPXpkMuxCgOQrnB6wICPfAu/U/sK5kTxulLqQnQEdxmlalmUMboGMSTJmSSaJgSi/4fH9DwBFWTSCerUaxkMDjhjjcPVo2PohS0BIZpr8hW4HCPuVmEJbv5uXtckKkJXA+di9Ykx8yuf3qdy+qCFSc99tlekDBUJpg8wASFLn2uIRwIl+N33AcGOZ6St0pekoQzRJ3kLrYJ2NOqslx8kgVuxhP17KwBFwd5RbPNNLLl0ssF2PY2j6zTyfOtimlYiSLbgm+WV0foPtbJJDrP1pfD+sRvCU7GUyuOn/9x/hJmvTQeCBmwAAAABJRU5ErkJggg==" alt=""><span>P24</span></div>
      </label>
   </div>
</div>
				<div id="totalpayment">Total payment amount: <span id="pricebox">
						<div class="loader"></div>
					</span></div>
				<input type="submit" value="Continue">
			</div>
			</div>
		</form>
		<div id="description">
			
			<div class="top">
				<h1 id="description_title">Order details</h1>
				
			</div>
			<div id="description_text">
				<div id="finaltext">
					<span id="order_title"></span>
				<span id="order_description"></span>
				</div>
				<div class="ph-item" id="loadingtext">
    <div class="ph-col-12">
<div class="ph-row">
        	<div class="ph-col-6 big" style="margin-bottom: 0.7rem;"></div>
            
            
            
        	<div class="ph-col-12"></div>
        	<div class="ph-col-8"></div>
            <div class="ph-col-4 empty"></div>
        </div>
    </div>
</div>
				
			</div>
		</div></div>
	</main>
	<script type="text/javascript">
	function parse_query_string(query) {
		var vars = query.split("&");
		var query_string = {};
		for(var i = 0; i < vars.length; i++) {
			var pair = vars[i].split("=");
			var key = decodeURIComponent(pair[0]);
			var value = decodeURIComponent(pair[1]);
			// If first entry with this name
			if(typeof query_string[key] === "undefined") {
				query_string[key] = decodeURIComponent(value);
				// If second entry with this name
			} else if(typeof query_string[key] === "string") {
				var arr = [query_string[key], decodeURIComponent(value)];
				query_string[key] = arr;
				// If third or later entry with this name
			} else {
				query_string[key].push(decodeURIComponent(value));
			}
		}
		return query_string;
	}

	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		var expires = "expires=" + d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;domain=.proxyscrape.com";
	}

	function getCookie(name) {
		var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
		return v ? v[2] : null;
	}
	var refferal = getCookie("ref");
	if(refferal == null) {
		refferal = "none";
	}
	var query_string = window.location.search.substring(1);
	var parsed_qs = parse_query_string(query_string);
	var email = parsed_qs.email;
	if(email != null) {
		document.getElementById("email_box").value = email;
	}

	if(parsed_qs.paddle != null || getCookie("paddle")) {
		if(!getCookie("paddle")) {
			setCookie("paddle", "unavailable", 7);
		}
		if(parsed_qs.paddle != null) {
			document.getElementById("paddle_unavailable").style.display = "block";
		}
		document.querySelectorAll("input[value=credit_card]")[0].parentNode.remove();
		document.querySelectorAll("input[value=paypal]")[0].parentNode.remove();
	}

	if(parsed_qs.tac != null) {
		document.getElementById('accept_tac').checked = true;
	}

	if(parsed_qs.row != null) {
		document.getElementById('lose_right_of_withrawal').checked = true;
	}

	if(parsed_qs.id != null) {
		document.getElementById("id_box").value = parsed_qs.id;
		document.getElementById("email_box").required = false;
		document.getElementById("accept_tac").required = false;
		document.getElementById("lose_right_of_withrawal").required = false;
		for(let el of document.querySelectorAll('.newuser')) el.style.display = 'none';
	}

	if(parsed_qs.sessionid != null) {
		document.getElementById("sessionid_box").value = parsed_qs.sessionid;
		document.getElementById("email_box").required = false;
		document.getElementById("accept_tac").required = false;
		document.getElementById("lose_right_of_withrawal").required = false;
		for(let el of document.querySelectorAll('.newuser')) el.style.display = 'none';
	}


	if(parsed_qs.key != null) {
		document.getElementById("key_box").value = parsed_qs.key;
		document.getElementById("email_box").required = false;
		document.getElementById("accept_tac").required = false;
		document.getElementById("lose_right_of_withrawal").required = false;
		for(let el of document.querySelectorAll('.newuser')) el.style.display = 'none';
	}

	for (var key in parsed_qs) {
		let usedpars = ['key', 'id', 'row', 'tac', 'paddle', 'email', 'sessionid'];
		const input = document.createElement('input');
		input.setAttribute('type', 'text');
		if (key && !usedpars.includes(key)) {
			console.log(key);
			console.log(parsed_qs[key]);
			console.log("=======");
			input.setAttribute('name', key);
			input.setAttribute('id', key+'_box');
			input.value = parsed_qs[key];
			console.log(input);
			document.getElementById('parameter_container').appendChild(input);
        }
	}

	document.getElementById("refferal_box").value = refferal;
	document.getElementById("ga_clientid_box").value = "none";
	setTimeout(function() {
		ga.getAll().forEach((tracker) => {
			var clientId = tracker.get('clientId');
			console.log(clientId);
			document.getElementById("ga_clientid_box").value = clientId;
		})
	}, 2000);

	window.addEventListener('CookiebotOnConsentReady', function(e) {
	    get_wd_user().then(response => {
	        wd_user = response;
	        return wd_user;
	    }).then(wd_user => {
	        document.getElementById("wd_user_box").value = wd_user;
	    });
	}, false);

	var accept_tac = 0;

	var div = document.getElementById('parameter_container');
	var inputs = div.getElementsByTagName('input');
	var inputArray = [];

	var descriptionurl = "https://api.proxyscrape.com/v2/order/create?getdetails=true";
	for(var i = 0; i < inputs.length; i += 1) {
		descriptionurl += "&" + inputs[i].name + "=" + inputs[i].value;
	}
	console.log(descriptionurl);
	fetch(descriptionurl).then(response => response.text()).then(data => {
		var jsondata = JSON.parse(data);
		document.getElementById("order_title").innerHTML = jsondata.title;
		document.getElementById("order_description").innerHTML = jsondata.description;
		document.getElementById("pricebox").innerHTML = "$"+jsondata.price;
		document.getElementById("finaltext").style.display = "block";
		document.getElementById("loadingtext").style.display = "none";
	}); 

	function accept_tacf() {
		if(document.getElementById('accept_tac').checked && accept_tac == 0) {
			console.log('tac accepeted');
			accept_tac = 1;
		}
	}
	var accept_wrow = 0;

	function accept_wrowf() {
		if(document.getElementById('lose_right_of_withrawal').checked && accept_wrow == 0) {
			console.log('lrow accepeted');
			accept_wrow = 1;
		}
	}
	var emailfill = 0;

	function emailfillf() {
		if(document.getElementById('email_box').value.length >= 3 && emailfill == 0) {
			console.log('email filled in');
			emailfill = 1;
		}
	}

	function formsubmit(){
		document.getElementById("checkoutform").style.display = "none";
		document.getElementById("description").style.display = "none";
		document.getElementsByClassName("checkout")[0].style.marginLeft = "0";
		document.getElementById("redirecting").style.display = "flex";
  }
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
<!--<script src="https://cdn.proxyscrape.com/js/wd.js?v=60"></script>-->
</body>

</html>