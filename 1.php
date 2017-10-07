<?php
header('Content-Description: File Transfer');
header('Content-Type: application/doc');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($result));
?>
