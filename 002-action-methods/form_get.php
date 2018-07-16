<!DOCTYPE html>
<html>
  <head>
    <title>Form GET example</title>
  </head>
  <body>

    <h1>Form GET example</h1>

    <?php
      // Display the GET values if any sent
      if ( ! empty($_GET))
      {
        echo "You submitted:<br />";

        foreach ($_GET as $name => $value)
        {
          echo "$name = $value<br />";
        }

        echo "<hr/>";
      }
    ?>

    <!-- note the default action is to submit to itself -->
    <form method="get">
      Please type your name: <input type="text" name="Name" /><br/>
      Please type your surname: <input type="text" name="Surname" /><br/>
      <input type="submit" />
    </form>

  </body>
</html>
