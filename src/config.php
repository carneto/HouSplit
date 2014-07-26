<?php
    // MySQL configuration
    $mysql_username = "root";       // Change to your MySQL username
    $mysql_password = "";           // Change to your MySQL password
    $mysql_db = "rep";              // Change to the name of the database you created
    $mysql_server = "localhost";    // Change to your MySQL server (if not in the same server)

    // General options
    $republica = "RePepeca";        // Change to the name of your installation
    $locale = "en";                 // Change to the language you want your system to appear in
    $currency = "$";                // Change to the symbol of your local currency
    $dateformat = "m/d/Y";          // Change to the date format of your preference (default is mm/dd/yyyy)

    // Cryptography options
    $salt_source = "mcrypt_iv";     // Change to random_bytes if you have problems with registering/logging-in
    $crypt_iterations = "5000";     // The higher, the more secure. Default is 5000, minimum recommended is 1000
?>