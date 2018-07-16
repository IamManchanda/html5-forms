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
        // Display the GET values if any sent
        if ( ! empty($_GET))
        {
          foreach ($_GET as $name => $value)
          {
            echo "$name = ";

            if (is_array($value))
            {
              echo implode(', ', $value);
            }
            else
            {
              echo $value;
            }

            echo '<br />';
          }
        }
      ?>
    </p>

  </body>
</html>
