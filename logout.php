<?php
session_start();
require_once('include/config.php');
session_unset();
session_destroy();
header("location: index.php?Error=you have Successfuly logout");
exit();
?>    