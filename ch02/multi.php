<!DOCTYPE html>
<html>
  
<head>
  <meta http-equiv="Content-Tyope"
    content="text/html; charset=utf-8" />
  <title>Calendar</title>
</head> 

<body>
  <?php
  
  $mexico = array(
    'YU' => 'Yucatan',
    'BC' => 'Baja California',
    'OA' => 'Oaxaca'
  );
  
  $us = array(
    'MD' => 'Maryland',
    'IL' => 'Illinois',
    'PA' => 'Pennsylvania',
    'IA' => 'Iowa'
  );
  
  $canada = array(
    'QC' => 'Quebec',
    'AB' => 'Alberta',
    'NT' => 'Northwest Territories',
    'YT' => 'Yukon',
    'PE' => 'Prince Edward Island'
  );
  
  $n_america = array(
    'Mexico' => $mexico,
    'United States' => $us,
    'Canada' => $canada
  );
  
  foreach ($n_america as $country => $list)
  {
    echo "<h2>$country</h2><ul>";
    arsort($list);
    foreach ($list as $symbol => $name)
    {
      echo "<li>$symbol - $name</li>\n";
    }
    echo "</ul>";
  }
  ?>
</body>
  
</html>