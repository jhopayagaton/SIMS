<?php
session_start();
session_destroy();

echo "<script type = 'text/javascript'>";
echo "alert ('Successfully Log Out');";
echo "window.location='index.php';";
echo "</script>";
?>
