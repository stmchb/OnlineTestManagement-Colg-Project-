<?php
session_start();
session_destroy();
unset($_SESSIOn['admin']);
header("location:../index.php");