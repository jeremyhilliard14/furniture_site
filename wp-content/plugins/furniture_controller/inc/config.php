<?php

	require_once('stripe/init.php');
	
	$stripe = array(
  		"secret_key"      => "sk_test_f8WmD3UEdPs75vFvC5CJBzaQ",
  		"publishable_key" => "pk_test_rWLa6iTLc7PEWPlIsrkXjHyN"
	);

	\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>