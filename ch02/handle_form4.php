<!DOCTYPE html>
<html>
  
<head>
  <meta http-equiv="Content-Tyope"
    content="text/html; charset=utf-8" />
  <title>Form Feedback</title>
  <style type="text/css" title="text/css" media="all">
    label
    {
      font-weight: bold;
      color: #300ACC;
    }
    .error
    {
      font-weight: bold;
      color: #C00;
    }
  </style>
</head> 

<body>
  <?php
  
  if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']))
  {
    echo "<p>Thank you, <b>{$_POST['name']}</b> for the following commends:<br />
    <tt>{$_POST['comments']}</tt></p>
    <p>We will reply to you at <i>{$_POST['email']}</i></p>\n";
  }
  else
  {
    echo '<p>Please go back and fill out the form again.</p>';
  }
  
  ?>
</body>
  
</html>