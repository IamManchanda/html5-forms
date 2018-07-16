<!DOCTYPE html>
<html>
  <head>
    <title>Form POST example</title>
  </head>
  <body>

    <h1>Form POST example</h1>

    <?php
      // Display the post values if any sent
      if ( ! empty($_POST))
      {
        echo "You submitted: <br />";

        foreach ($_POST as $name => $value)
        {
          echo "$name = $value <br />";
        }

        echo "<hr/>";
      }
    ?>

    <!-- note the default action is to submit to itself -->
    <form method="post">
      Please type your name: <input type="text" name="Name" /><br/>
      Please type your surname: <input type="text" name="Surname" /><br/>
      <input type="submit" />
    </form>

  </body>
</html>
