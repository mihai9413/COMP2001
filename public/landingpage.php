<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $customername = $_POST['customername'];
    if (empty($customername)) {
        $customername = "Name is empty";
    }
    $postcode = $_POST['postcode'];
    if (empty($postcode)) {
        $postcode = "postcode is empty";
    }
    $email = $_POST['email'];
    if (empty($email)) {
        $email = "email is empty";
    }
}
?>
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
<?php
echo "Welcome " . $_POST["customername"] . " Your contact details are " . $_POST["postcode"] . " and "  . $_POST["email"] . "." ;
?>
</form>
<?php include_once 'footer.php';?>
</body>
