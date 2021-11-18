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
<?php 
    require('db.php'):
    // when form submitted, insert values in the database
    if (isset($_REQUEST['Username'])) {
        //will remove backslash
        $Username = stripslashes($_REQUEST['Username']):
        // escapes special characters
        $Username = mysqli_real_escape_string($con, $Username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $create_datetime = date('Y-m-d H:i:s');
        $query = "INSERT into 'CustomerInformation' ('Username', 'Password', 'Phone Number', 'EmailAddress')
                 VALUES ('$Username', '$password', '$PhoneNumber', 'EmailAddress')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3> You are Registered Successfully </h3><br/>
                  <p class = 'link'> Click here to <a href = 'registration.php'>register</a> again.</p>
                  </div>";
        } else {
            echo "<div class='form'> 
                  <h3> Missing required info </h3><br/>
                  <p class='link'> click here to <a href='registration.php'> register </a> again.</p>
                  </div>";
        }
 
    } else {
?>

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
    <!-- Main Content -->
    <main>
        <div class="custom-padding">
            <div class="column-home">
                <h2 class="column-H2">
                    Register Your GameStore Account!
                </h2>

                <h3 class="column-H2">
                    Please Fill Out The Information Below!
                </h3><br>

                <form class="form-registration">
                    Username:
                    <input type="text" name="Username" class="form-control" placeholder> <br> Password:
                    <input type="text" name="password"><br>Confirm Password:
                    <input type="text" name="confirmPassword"><br>Phone Number:
                    <input type="text" name="phoneNum"><br>Email Address:
                    <input type="text" name="emailAddress"> <br> Age:
                    <input type="text" name="age">

                </form><br>
            </div>
            <div style="margin: auto;width: 50%;padding: 10px;">
                <button>
                <a href="Registered.html">Submit!</a>
            </button>
            </div>
        </div>

        <!-- End Main Content -->


        <!-- Footer -->
        <footer>
        </footer>
<?php
    }
?>
</body>

</html>