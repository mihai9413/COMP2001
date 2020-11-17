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
<form action="agreement.php">
    <div>
        <input type="radio" id="agree" name="decision" value="agree">
        <label for="agree">Agree</label><br>
        <input type="radio" id="disagree" name="decision" value="disagree">
        <label for="disagree">Disagree</label><br>
        <input type="submit" value="Submit">
    </div>
</form>
<?php include_once 'footer.php';?>
</body>