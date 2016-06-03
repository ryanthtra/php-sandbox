<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>String Concatenation</title>
</head>

<body>
  <!-- Script 1.8 - numbers.php -->
  <?php
    $location = "Golden State";
    $mascot = "Warriors";
    $year = "2016";
    $league = "NBA";
    
    echo "<p><h3>Using Double Quotes</h3></p>";
    echo "<p>The $location $mascot are the $year $league champions!</p>";
    
    echo "<p><h3>Using Single Quotes</h3></p>";
    echo '<p>The ' . $location . ' ' . $mascot . ' are the ' . $year . ' ' . $league . ' champions!</p>';
  ?>
</body>
</html>