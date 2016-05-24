<?php
/**
* Plugin Name: furniture controller
* Description: This is a custom controller for the furniture site.  It includes Stripe integration.
* Version: 1.0
* Author: Jeremy Hilliard
*/

function stripe_checkout(){

	require_once('inc/config.php');

	$stripe_form = '<form action="/wp-content/plugins/furniture_controller/inc/charge.php" method="post">
		<label>Amount to pay</label>
		<input type="text" placeholde="Amount to pay" name="amount">
  		<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	          data-key="'.$stripe['publishable_key'].'"
	          data-description="Access for a year"
	          data-amount= $amount
	          data-locale="auto"></script>
		</form>';

		print $stripe_form;

}


?>