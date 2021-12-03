<?php
include_once 'header.php';
include_once 'footer.php';
?>

<html>
<body>

<h1>Customer Details</h1>

<form action="registrationPanel2.php" method="get">
    <label for="customername">Name:</label>
    <input type="text" id="customername" name='customername' required><br>
    <label for="customerpc">Postcode:</label>
    <input type="text" id="customerpc" name='customerpc' required><br>
    <label for="customeremail">Email:</label>
    <input type="email" id="customeremail" name='customeremail' optional><br>
    <input type="submit">
</form>

</body>
</html>

