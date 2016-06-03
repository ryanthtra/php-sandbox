<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Concatenation</title>
</head>

<body>
  <!-- Script 1.2 - first.php -->
  <?php
    $first_name = 'Melissa';
    $last_name = 'Bank';
    $author = $first_name . ' ' . $last_name;
    $book = 'The Girls\' Guide to Hunting and Fishing';
    
    echo "<p>The book <em>$book</em> was written by $author.</p>"
  ?>
</body>
</html>