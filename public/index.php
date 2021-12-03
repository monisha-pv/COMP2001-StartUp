<?php
include_once 'header.php';
include_once 'footer.php';
?>

<body class="bg-info">
<div class="container-fluid col-md-10 offset-md-1">
    <div class="row">
        <div class="card mt-3 px-2 py-2">
            <h1>Stationery Application</h1>
            <p> Welcome to this fictional stationery
                application page created for ISAD251 example. To continue please accept our terms and conditions </p>

            <form action="agreement.php" method="get">
               A. I agree    <input type="radio" value="I agree" name='agree'><br>
               B. I disagree <input type="radio" value="I disagree" name='disagree'><br><br>
                <input type="submit">
            </form>