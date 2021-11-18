<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brian's GameStore</title>
    <link href="FirstSiteDesign.css" rel="stylesheet" type="text/css">
</head>
<!-- Start Body -->
<body>
    <!-- Header -->
    <header>
        <marquee behavior="scroll" direction="left">
            <h1 style="text-align:center">Brian's GameStore</h1>
        </marquee>
    </header>
    <!-- Navigation -->
    <div class="custom-padding">
        <nav>
            <div class="logo"> <img src="Images/bgslogo.png">
            </div>
            <ul class="menu-area">
                <li><a href="index.html">Home</a></li>
                <li><a href="ContactPage.html">Contact Us!</a></li>
                <li><a href="Registration.html">Register!</a></li>
                <li><a href="StoreFront.html">Store</a></li>
                <li><a href="Checkout.html">Checkout</a></li>
            </ul>
        </nav>
    </div>
    <!-- Main Content -->
    <main>
        <div class="custom-padding">
            <div class="column-home">
                <h2 class="column-H2">
                    Log in to Your GameStore Account!
                </h2>

                <h3 class="column-H2">
                    Please Fill Out The Information Below!
                </h3><br>

                <form class="form-registration" method="post" name="login">
                    Username:
                    <input type="text" name="username" class="form-control" placeholder> <br> Password:
                    <input type="text" name="password"><br>
                    <div style="margin: auto;width: 50%;padding: 10px;">
                        <input type="submit" value="Submit">
                    </div>
                </form><br>
            </div>

        </div>
    </main>

</body>

</html>
<?php
    require('connect.php');
    if (isset($_POST['username'])) {
        $username = $_stripslashes['username'];
        $username = mysqli_real_escape_string($conn,$username);
        $password = $_stripslashes['password'];
        $password = mysqli_real_escape_string($conn,$password);

        $query = "SELECT * FROM 'CustomerInformation' WHERE username ='$username'
            AND password='$password'";
        
        $result = mysqli_query($conn, $query) or die ($error);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            echo "<script>window.location.href='index.html';</script>";
            exit;
        } else {
            echo "<div class='form'>
                <h3>Incorrect user/pass</h3><br/>
                <p>click here to <a href='login.php'Login></a> again. </p>
            </div>";
        }
    }
    
    ?>