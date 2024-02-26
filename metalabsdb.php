<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "root");
define("DATABASE", "metalabs_lite");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if (!$connection) {
    die("Not connected...");
}

?>