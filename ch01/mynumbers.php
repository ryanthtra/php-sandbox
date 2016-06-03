<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Number Manipulation</title>
</head>

<body>
  <!-- Script 1.8 - numbers.php -->  
  <?php
    $curr1_name = "USD";
    $curr2_name = "PHP";
    
    $curr1_amount = 20000;
    $conv_rate = 45.54;
    
    $curr2_amount = $curr1_amount * $conv_rate;
    
    echo "<p>" . number_format($curr1_amount, 2) . " $curr1_name converted to $curr2_name at $conv_rate is " . number_format($curr2_amount, 2) . "</p>";
  ?>
</body>
</html>