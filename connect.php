<?php
   define('DB_SERVER', 'fdb32.awardspace.net');
   define('DB_USERNAME', '3936440_briangamestorereg');
   define('DB_PASSWORD', '106649622Bm!');
   define('DB_DATABASE', '3936440_briangamestorereg');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


   if (mysqli_connect_error()){
   die('Connect Error ('. mysqli_connect_errno() .') '
   . mysqli_connect_error());
   }

   ?>