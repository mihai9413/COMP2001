<body class="bginfo">
<?php include_once ('header.php');?>
<div class="container-fluid col-md-10 offset-md-1"></div>
<div class="row"></div>
<div class="card mt-3 px-2 py-2"></div>
<h1>Stationery Application</h1>
<p>“Welcome to this fictional stationery application page created for ISAD251 example. To continue please accept our terms and conditions</p>
<form method="POST" action="landingpage.php">
    <label for="customername">Customer Name:</label>
    <input type="text" id="customername" name="customername"><br>
    <label for="postcode">PostCode:</label>
    <input type="text" id="postcode" name="postcode"><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br>
    <button>Submit</button>
</form>
<?php include_once ('footer.php');?>
</body>