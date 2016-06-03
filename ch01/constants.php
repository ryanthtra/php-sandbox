<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Constants</title>
</head>

<body>
  <!-- Script 1.9 - constants.php -->
  <?php
    define('TODAY', 'March 16, 2011');
    
    echo '<p>Today is ' . TODAY . '.<br />
      This server is running version <b>' .
      PHP_VERSION . '</b> of PHP on the <b>' .
      PHP_OS . '</b> operating system.</p>';
  ?>
</body>
</html>