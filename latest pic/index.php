<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Invoice Template</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<style>
			@import url(http://fonts.googleapis.com/css?family=Bree+Serif);
			body, h1, h2, h3, h4, h5, h6{
				font-family: 'Bree Serif', serif;
			}
		</style>
	</head>
	<body>
		<!-- container -->
		<div class="container">
			<div class="row">
				<!-- logo -->
				<div class="col-xs-6">
					<h1>
						<a href="http://www.ey4u.it">
							<img src="logo.png">
							Logo here
						</a>
					</h1>
				</div><!-- /logo -->
				<!-- invoice number and date -->
				<div class="col-xs-6 text-right">
					<h1>INVOICE</h1>
					<h3><small>Invoice no: 1/2015</small></h3>
					<h4><small>Invoice date: 31-05-2015</small></h4>
				</div><!-- /invoice number and date -->
				<hr>
				<!-- client details -->
				<div class="row">
					<div class="col-xs-5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Invoice to: Client-Name</h4>
							</div>
							<div class="panel-body">
								<p>
									Address <br>
									details <br>
									more <br>
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-5 col-xs-offset-2 text-right">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Kind Attn: Mr Name-Sirname</h4>
							</div>
							<div class="panel-body">
								<p>
									Address <br>
									details <br>
									more <br>
								</p>
							</div>
						</div>
					</div>
				</div> <!-- /client details -->
				<!-- items -->
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><h4>SKU</h4></th>
							<th><h4>Description</h4></th>
							<th><h4>Quantity</h4></th>
							<th><h4>Unit Price</h4></th>
							<th><h4>Net Amount</h4></th>
							<th><h4>Tax Rate</h4></th>
							<th><h4>Tax Amount</h4></th>
							<th><h4>Gross Total</h4></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>001</td>
							<td>my first product</td>
							<td class="text-center">2</td>
							<td class="text-right">€100.00</td>
							<td class="text-right">€200.00</td>
							<td class="text-center">10%</td>
							<td class="text-right">€44.00</td>
							<td class="text-right">€244.00</td>
						</tr>
					</tbody>
				</table><!-- /items -->
				<!-- total -->
				<div class="row text-right">
					<div class="col-xs-2 col-xs-offset-8">
						<p>
							<strong>
							Sub Total : <br>
							TAX : <br>
							Total : <br>
							</strong>
						</p>
					</div>
					<div class="col-xs-2">
						<strong>
						$1200.00 <br>
						N/A <br>
						$1200.00 <br>
						</strong>
					</div>
				</div><!-- /total -->
				<!-- bottom info -->
				<div class="row">
					<!-- bank details -->
					<div class="col-xs-5">						
						<div class="panel panel-info">
							<div class="panel-heading">
								<h4>Bank details</h4>
							</div>
							<div class="panel-body">
								<p>Your Name</p>
								<p>Bank Name</p>
								<p>SWIFT : -------</p>
								<p>Account Number : 12345678</p>
								<p>IBAN : ------</p>
							</div>
						</div>
					</div><!-- bank details -->
					<!-- contact details -->
					<div class="col-xs-7">
						<div class="span7">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h4>Contact Details</h4>
								</div>
								<div class="panel-body">
									<p>
										Email : you@example.com <br><br>
										Mobile : +92123456789 <br> <br>
									</p>
									<h4><small>payment should be mabe by Bank Transfer</small></h4>
								</div>
							</div>
						</div>						
					</div><!-- /contact details -->
				</div><!-- /bottom info -->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</body>
</html>