<?php
session_start();

session_destroy();

echo "<script type='text/javascript'>window.top.location='../index.php';</script>"; exit;
 ?>