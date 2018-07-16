<!DOCTYPE html>
<html>
  <head>
    <title>Form results</title>
  </head>
  <body>

    <h1>Form results</h1>

    <p>Form method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>

    <p>
      <?php
        if ($_POST['submit_button'] == 'Save draft')
        {
          echo 'You clicked on the <strong>Save draft</strong> button.';
        }
        elseif ($_POST['submit_button'] == 'Publish')
        {
          echo 'You clicked on the <strong>Publish</strong> button.';
        }
      ?>
    </p>

  </body>
</html>
