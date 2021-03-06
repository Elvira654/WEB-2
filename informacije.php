<?php 

include_once 'includes/dbh.inc.php'

?>

<!DOCTYPE html>
<html>
<head>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>

		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="stranica.html">Početna</a></li>
				<li class="propClone"><a href="stranica.html">Lokacije</a></li>
				<li class="propClone"><a href="informacije.php">Plaćanje i rezervacija</a></li>
				<li class="propClone"><a href="ONama.html">O nama</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 Plaćanje i rezervacije
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- SADRŽAJ =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">Izvršite rezervaciju</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">
		<form id="edd_checkout_cart_form" method="post">
			<div id="edd_checkout_cart_wrap">
				<table id="edd_checkout_cart" class="ajaxed">
				<thead>
				<tr class="edd_cart_header_row">
					<th class="edd_cart_item_name">
						 Lokacija
					</th>
					<th class="edd_cart_item_price">
						 Cijena
					</th>
					<th class="edd_cart_actions">
						 Potvrda
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="25" height="25" src="images/rezervacijakupnja.jpg" alt="">
						</div>
						<span class="edd_checkout_cart_item_title">Apartmant Srce Prirode - Dvokrevetna</span>
					</td>
					<td class="edd_cart_item_price">
						 450KM
					</td>
					<td class="edd_cart_actions">
						<a class="edd_cart_remove_item_btn" href="#">Izbriši</a>
					</td>
				</tr>
				</tbody>
				<tfoot>
				<tr class="edd_cart_footer_row">
					<th colspan="5">
						<a class="edd-cart-saving-button edd-submit button " id="edd-save-cart-button" href="#">Sačuvaj karticu</a>
					</th>
				</tr>
				<tr class="edd_cart_footer_row edd_cart_discount_row" style="display:none;">
					<th colspan="5" class="edd_cart_discount">
					</th>
				</tr>
				<tr class="edd_cart_footer_row">
					<th colspan="5" class="edd_cart_total">
						 Total: <span class="edd_cart_amount" data-subtotal="450" data-total="450">450KM</span>
					</th>
				</tr>
				</tfoot>
				</table>
			</div>
		</form>
		<div id="edd_checkout_form_wrap" class="edd_clearfix">
			<form id="edd_purchase_form" class="edd_form" action="includes/signup.inc.php" method="POST">
				<fieldset id="edd_checkout_user_info">
					<legend>Popunite informacije</legend>
					<p id="edd-email-wrap">
						<label class="edd-label" for="edd-email">
						Email Adresa <span class="edd-required-indicator">*</span></label>
						<input class="edd-input required" type="email" name="email" placeholder="Unesite email" id="edd-email" value=""><br>
					</p>
					<p id="edd-first-name-wrap">
						<label class="edd-label" for="edd-first">
						Ime <span class="edd-required-indicator">*</span>
						</label>
						<input class="edd-input required" type="text" name="first" placeholder="Unesite ime" id="edd-first" value="" required=""><br>
					</p>
					<p id="edd-last-name-wrap">
						<label class="edd-label" for="edd-last">
						Prezime <span class="edd-required-indicator">*</span>
						</label>
						<input class="edd-input" type="text" name="last" id="last" placeholder="Unesite prezime" value=""><br>
					</p>
				</fieldset>
				<fieldset id="edd_purchase_submit">
					<p id="edd_final_total_wrap">
						<strong>Ukupan iznos:</strong>
						<span class="edd_cart_amount" data-subtotal="450" data-total="450">450KM</span>
					</p>
					<button type="submit" class="edd-submit button" >Rezervisi</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</section>
<!-- Blok za izgled =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
			</div>
		</div>
	</div>
</div>
</section>
<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				 &copy; 2021 Jaganjac Demir<br/>

			</p>
		</div>
	</div>
</div>

<!-- Učitavanje skripte =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>

</body>
</html>