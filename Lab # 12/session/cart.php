<?php
session_start();
print_r($_SESSION);
echo "Checkout " . $_SESSION['val'];


?>