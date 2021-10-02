<?php
require('./stripe-php-master/init.php');
$publishableKey = 'pk_test_51J1urBLJHAMK55Zrwlkfegs9KzGLV3lIex6256YuW0GrJUYtQCpMYPuNImNr3nwqKOr8rc9DhSBAYLpHcXXj9C9s0065LJtqho';
$secretKey = 'sk_test_51J1urBLJHAMK55ZrVvUrsd1OiW3RWiIqzG1bhCYrd3oPwGRtQ8myq2YkK5ffa3AAmCDRLNt6tRtMalX2aenYtEcl00ZWmVA4bP';

\Stripe\Stripe::setApiKey($secretKey);
?>