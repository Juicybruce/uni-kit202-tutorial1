<?php

// Add code here
session_start();
session_destroy();
header('location: login.php');
