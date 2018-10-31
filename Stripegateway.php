<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_9vjbOjq5l8yZmwKLKfsQBKpn",
  "publishable_key" => "pk_test_x9Zjrc7Mvg8YSvdcPeDauKQP"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>