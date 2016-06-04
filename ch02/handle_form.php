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
  </style>
</head> 

<body>
  <?php
    // Create a shorthand for the form data:
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comments = $_REQUEST['comments'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    
    // Print the submitted information:
    echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
    <tt>$comments</tt></p>
    <p>We will reply to you at <i>$email</i>.</p>\n";
    echo "<p>Your age and gender were entered as <b>$age</b> and <b>$gender</b>, respectively.</p>";
  ?>
</body>
  
</html>