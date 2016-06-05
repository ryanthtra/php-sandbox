<!DOCTYPE html>
<html>
  
<head>
  <meta http-equiv="Content-Tyope"
    content="text/html; charset=utf-8" />
  <title>Simple HTML Form</title>
  <style type="text/css" title="text/css" media="all">
    label
    {
      font-weight: bold;
      color: #300ACC;
    }
  </style>
</head> 

<body>
  <form action="handle_form4.php" method="post">
    <fieldset>
      <legend>Enter your information in the form below:</legend>
      <p>
        <label>Name: 
          <input type="text" name="name" size="20" maxlength="40"/> 
        </label>
      </p>
      <p>
        <label>Email Address:
          <input type="text" name="email" size="40" maxlength="60" />
        </label>
      </p>
      <p>
        <label>Gender:
          <input type="radio" name="gender" value="M" />Male
          <input type="radio" name="gender" value="F" />Female
        </label>
      </p>
      <p>
        <label>Age:
          <select name="age">
            <option value="0-29">Under 30</option>
            <option value="30-60">Between 30 and 60</option>
            <option value="60+">Over 60</option>            
          </select>
        </label>
      </p>
      <p>
        <label>Comments:
          <textarea name="comments" cols="40" rows="3"></textarea>
        </label>
      </p>
    </fieldset>
    <p align="center">
      <input type="submit" name="submit" value="Submit My Information">
    </p>
  </form>
</body>
  
</html>