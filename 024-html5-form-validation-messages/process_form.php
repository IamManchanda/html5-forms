<!DOCTYPE html>
<html>
  <head>
    <title>Form results</title>
  </head>
  <body>

    <h1>Form results</h1>

    You submitted: <br />
    <p>
      <?php
        // Display the POST values
        if ( ! empty($_POST))
        {
          foreach ($_POST as $name => $value)
          {
            echo "$name = $value<br />";
          }
        }
      ?>
    </p>

  </body>
</html>
