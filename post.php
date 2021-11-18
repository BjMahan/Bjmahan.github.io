<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brian's GameStore</title>
    <link href="FirstSiteDesign.css" rel="stylesheet" type="text/css">

</head>

<!-- Body Start -->

<body>

    <!-- Header -->
    <header>
        <h1>Brian's GameStore</h1>
    </header>

    <!-- Navigation -->
    <div class="custom-padding">
        <nav>
            <div class="logo"><img src="Images/bgslogo.png"></div>
            <ul class="menu-area">
                <li><a href="index.html">Home</a></li>
                <li><a href="ContactPage.html">Contact Us</a></li>
                <li><a href="AccountPage.html">Register!</a></li>
                <li><a href="StoreFront.html">Storefront</a></li>
                <li><a href="Checkout.html">Checkout</a></li>
            </ul>
        </nav>
    </div>
<?php
require('connect.php');
$username = filter_input(INPUT_POST, 'username');
$pass = filter_input(INPUT_POST, 'password');
$phoneNumber = filter_input(INPUT_POST, 'phoneNum');
$age = filter_input(INPUT_POST, 'age');
$email = filter_input(INPUT_POST, 'email');



if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO CustomerInformation (username, password, age, email, phoneNum)
values ('$username','$pass', '$age', '$email', '$phoneNum')";
if ($conn->query($sql)){
echo "New record is inserted sucecsfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>
</body>

</html>