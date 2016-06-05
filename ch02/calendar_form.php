<!DOCTYPE html>
<html>
  
<head>
  <meta http-equiv="Content-Tyope"
    content="text/html; charset=utf-8" />
  <title>Calendar</title>
</head> 

<body>
  <form action="calendar.php" method="post">
    <?php
    
    $months = array(
      1=>'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December');
      
    $days = range(1, 31);       // Makes array from 1 - 31
    $years = range(2011, 2021); // Makes array from 2011 - 2021
    
    // Make the months pull-down menu:
    echo '<select name="month">';
    foreach ($months as $key=>$value)
    {
      echo "<option value=\"$key\"> $value</option>\n";
    }
    echo '</select>';
    
    // Make the days pull-down menu:
    echo '<select name="day">';
    foreach ($days as $value)
    {
      echo "<option value=\"$value\">$value</option>";
    }
    echo '</select>';
    
    // Make the years pull-down menu:
    echo '<select name="year">';
    foreach ($years as $value)
    {
      echo "<option value=\"$value\">$value</option>";
    }
    echo '</select>';
    ?>
  </form>
</body>
  
</html>