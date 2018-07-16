<!DOCTYPE html>
<html>
  <head>
    <title>Form results</title>
  </head>
  <body>

    <h1>Form results</h1>

    <?php
      if ($_POST['form_name'] == 'student')
      {
        echo 'You submitted the first form.';
      }
      elseif ($_POST['form_name'] == 'teacher')
      {
        echo 'You submitted the second form.';
      }
    ?>

  </body>
</html>
