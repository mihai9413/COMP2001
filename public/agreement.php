<!doctype html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>

<body class=’bginfo’>
<?php include_once 'header.php';?>
<div class=’container-fluid col-md-10 offset-md-1’></div>
<div class=’row’></div>
<div class=’card mt-3 px-2 py-2’></div>
<h1>Stationary application</h1>
<p>Welcome to this fictional stationery application page created for ISAD251 example. To continue please accept our terms and conditions</p>
<form action="registrationPanel.php">

    <?php
    echo "Welcome. You have selected " .$_GET['decision']. " for the agreement<br>";
    ?>
    <?php include_once 'footer.php';?>
    <button>Continue</button>
</body>