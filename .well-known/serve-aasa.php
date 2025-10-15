<?php
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile(".well-known/apple-app-site-association");
?>
