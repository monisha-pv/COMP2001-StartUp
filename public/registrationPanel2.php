<?php

include_once "header.php";
include_once "footer.php";

$customerName = $_GET['customername'];
$customerPc = $_GET['customerpc'];
$customerEmail = $_GET['customeremail'];

echo "Welcome $customerName<br>";
echo "This is your postcode: $customerPc<br>";
echo "Your email is: $customerEmail<br>";

?>


