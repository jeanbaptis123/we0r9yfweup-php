<!DOCTYPE html>
<html>

<head>
	<title>Pricing page</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/bootstrap.min.css?v=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/nice-select.min.css?v=1">
	<script src="https://cdn.proxyscrape.com/js/jquery.min.js"></script>
	<style type="text/css">
	.nice-select span .current {
		display: flex;
		align-items: center;
	}

	.nice-select span .current img {
		margin: 0 8px;
	}

	.nice-select ul li {
		display: flex;
		align-items: center;
	}

	.nice-select ul li img {
		margin: 0 8px;
	}
	</style>
</head>

<body>
	<header>
	</header>
	<main>
		<div class="container" id="selectcontainer">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="nice-select selectortypes" tabindex="0">
							<span><span class="current"></span></span>
							<ul class="list countryselect">
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" id="countrycontainer">
		</div>
	</main>
	<footer>
		<script src="https://cdn.proxyscrape.com/js/jquery.nice-select2.min.js?v=4"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('select').niceSelect();
		});

		function switchcountry(country) {
			$("#countrycontainer").children().hide();
			$('#country_' + country).show();
		}
		/*
		Pricing display type values
		Cards: 1
		Table: 2

		*/
		/* default (set here when testing, 1 or 2) */
		var ddisplaytype = 1;

		/* dont touch */
		var sdisplaytype = "%displayserverdata%";
		if(sdisplaytype != "%displayserverdata%") {
			var displaytype = sdisplaytype;
		} else {
			var displaytype = ddisplaytype;
		}

		/*
		Which country should be displayed?
		Possible values:
		- Any valid alpha-2 country code (lower-case) thats in the JSON
		- mixed (gives the user mixed proxies of random countries)
		- all (shows all options from the JSON)
		*/
		/* default */
		var ddisplaycountry = "all";

		/* dont touch */
		var sdisplaycountry = "%countryserverdata%";
		if(sdisplaycountry != "%countryserverdata%") {
			var displaycountry = sdisplaycountry;
		} else {
			var displaycountry = ddisplaycountry;
		}

		/*The JSON data - The first only gets used if the second one is not set. The second one can be set by Stackpath serverless scripting after retrieving the data from the backend via Stackpath.*/
		var ddata = '{"mixed":{"information":{"name":"Mixed","icon":"https://cdn.proxyscrape.com/img/country/mixed.png"},"cards":[{"title":"1000","price":24,"url":"https://proxyscrape.com/purchase?type=new_datacenter_shared&proxies[mixed]=1000"},{"title":"2500","price":54,"url":"https://proxyscrape.com/purchase?type=new_datacenter_shared&proxies[mixed]=2500"}]},"us":{"information":{"name":"United States","icon":"https://cdn.proxyscrape.com/img/country/us.png"},"cards":[{"title":"1000","price":26.40,"url":"https://proxyscrape.com/purchase?type=new_datacenter_shared&proxies[us]=1000"},{"title":"2500","price":59.40,"url":"https://proxyscrape.com/purchase?type=new_datacenter_shared&proxies[us]=2500"}]}}';
		/* dont touch */
		var sdata = "%jsonserverdata%";
		if(sdata != "%jsonserverdata%") {
			var fdata = sdata;
		} else {
			var fdata = ddata;
		}
		var obj = JSON.parse(fdata);
		var isfirstcountry = true;
		var tablebuilder = [];
		var cardimg = "https://proxyscrape.wpengine.com/wp-content/uploads/2021/03/prem_proxy_list_img.png";
		for(var country in obj) {
			if(obj.hasOwnProperty(country)) {
				var val = obj[country];
				sub_obj = val["cards"];
				//console.log(sub_obj);
				if(displaycountry != "all") {
					$("#selectcontainer").hide();
				}
				if(displaycountry == "all" || displaycountry == country) {
					if(displaycountry == "all" && country == "mixed") {
						$(".current").html('<img src="' + obj[country]["information"]["icon"] + '">' + obj[country]["information"]["name"]);
						$(".countryselect").append('<li data-value="' + country + '" class="option selected"><img src="' + obj[country]["information"]["icon"] + '">' + obj[country]["information"]["name"] + '</li>');
						isfirstcountry = false;
						var firstcountry = country;
					} else if(isfirstcountry) {
						isfirstcountry = false;
						var firstcountry = country;
						$(".current").html('<img src="' + obj[country]["information"]["icon"] + '">' + obj[country]["information"]["name"]);
						$(".countryselect").append('<li data-value="' + country + '" class="option selected"><img src="' + obj[country]["information"]["icon"] + '">' + obj[country]["information"]["name"] + '</li>');
					} else {
						$(".countryselect").append('<li data-value="' + country + '" class="option"><img src="' + obj[country]["information"]["icon"] + '">' + obj[country]["information"]["name"] + '</li>');
					}
					console.log(country);
					console.log(obj[country]["information"]["name"]);
					console.log(obj[country]["information"]["icon"]);
					console.log(sub_obj);
					if(country == firstcountry) {
						$("#countrycontainer").append('<div class="row" id="country_' + country + '"></div>')
					} else {
						$("#countrycontainer").append('<div class="row" id="country_' + country + '" style="display: none;"></div>')
					}
					tablebuilder = [];
					if(displaytype == 2) {
						$("#countrycontainer #country_" + country).append('<div class="col-lg-12 col-md-12 col-12 "><div class="itemcard full"><table class="table table-striped"><thead><tr><th scope="col">Proxies</th><th scope="col">Bandwidth</th><th scope="col">Threads</th><th scope="col">IP Authentication</th><th scope="col">Price</th><th scope="col"></th></tr></thead><tbody class="pricetable"></tbody></table></div></div>');
					}
					for(var country_item in sub_obj) {
						if(displaytype == 1) {
							tablebuilder.push("<div class='col-lg-3 col-md-12 col-xs-12'> <div class='itemcard single-pricing-table'> <h2 style=''>" + sub_obj[country_item]["title"] + " proxies</h2><a href='" + sub_obj[country_item]["url"] + "'><img src='" + cardimg + "'></a><div class='pricing-amount'> <div class='monthly_price'> <sup> <span class='currency'>$</span> </sup> <span class='price'> " + sub_obj[country_item]["price"] + "</span> <span class='subscription'> /Month </span> </div></div><div class='pricing-content'> <a class='pricing-btn blue-btn'href='" + sub_obj[country_item]["url"] + "'>Purchase</a> </div></div></div>");
						} else if(displaytype == 2) {
							tablebuilder.push("<tr><td>" + sub_obj[country_item]["title"] + "</td><td>Unlimited</td><td>Unlimited</td><td>Up to 3 IPs</td><td>$" + sub_obj[country_item]["price"] + "/Month</td><td><a class='btn btn-primary text-uppercase' href='" + sub_obj[country_item]["url"] + "' role='button'>buy now</a></td></tr>");
						}
					}
					if(displaytype == 1) {
						$("#countrycontainer #country_" + country).html(tablebuilder.join(""));
					} else if(displaytype == 2) {
						$("#countrycontainer #country_" + country + " .pricetable").html(tablebuilder.join(""));
					}
				}
			}
		}
		const countryselectlist = document.querySelectorAll('ul.countryselect');
		for(let i = 0; i < countryselectlist.length; i++) {
			countryselectlist[i].addEventListener('click', () => {
				const checkExist = setInterval(() => {
					if(document.querySelector("ul.countryselect > li.option.selected")) {
						selectedcountry = document.querySelector("ul.countryselect > li.option.selected").getAttribute("data-value");
						switchcountry(selectedcountry);
					}
				}, 100)
			})
		}
		</script>
	</footer>
</body>

</html>