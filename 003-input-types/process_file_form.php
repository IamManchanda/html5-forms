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
        if ($_FILES['file']['error'] > 0)
        {
          echo 'Error: ' . $_FILES['file']['error'];
        }
        else
        {
          echo 'Filename: ' . $_FILES['file']['name'] . '<br />';
          echo 'Type: ' . $_FILES['file']['type'] . '<br />';
          echo 'Size: ' . $_FILES['file']['size'] . ' bytes<br />';
          echo 'Location: ' . $_FILES['file']['tmp_name'];
        }
      ?>
    </p>

  </body>
</html>
