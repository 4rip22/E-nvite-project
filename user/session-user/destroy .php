<?php
//log out admin
session_start();
session_destroy();
header("Location: landingpage.html");
exit();
?>