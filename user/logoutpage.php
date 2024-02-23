<?php
session_start();
session_destroy();
unset($_SESSIOn['user']);
header("location:../index.php");