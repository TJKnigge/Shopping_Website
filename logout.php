<?php
session_start();

require('General.php');

session_destroy();

echo "<script>window.location.assign('login.php');</script>" ;