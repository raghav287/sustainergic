<?php
/**
 * Backward compatibility 301 redirect for ECSBC Compliance Page
 */
header("HTTP/1.1 301 Moved Permanently");
header("Location: ecsbc-compliance.php");
exit();
