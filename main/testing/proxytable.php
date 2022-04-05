<!DOCTYPE html>
<html>

<head>
	<title>Proxytable</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.proxyscrape.com/css/bootstrap.min.css?v=1">
	<script src="https://cdn.proxyscrape.com/js/jquery.min.js"></script>
</head>

<body>
	<header></header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12 ">
					<div class="itemcard full">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Proxy</th>
									<th scope="col">Anonymity</th>
									<th scope="col">Protocol</th>
								</tr>
							</thead>
							<tbody id="proxytable">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<!-- Mag ook in een JS file geplaast worden -->
		<script type="text/javascript">
		$(document).ready(function() {
			fetch("https://api.proxyscrape.com/v2/proxytable.php").then(response => response.text()).then(function(response) {
				var obj = JSON.parse(response);
				var tablebuilder = [];
				for(var item in obj) {
					for(var item2 in obj[item]) {
						tablebuilder.push("<tr><td>" + item2 + "</td><td>" + obj[item][item2] + "</td><td>" + item + "</td>/tr>");
					}
				}
				$("#proxytable").html(tablebuilder.join(""));
			});
		});
		</script>
	</footer>
</body>

</html>