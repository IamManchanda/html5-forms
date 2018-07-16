<!DOCTYPE html>
<html>
  <head>
    <title>Form results</title>
  </head>
  <body>

    <h1>Form results</h1>

    <p>Form method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
    <p>Form action: <?php echo basename($_SERVER['SCRIPT_FILENAME']); ?></p>
    <p>You clicked on the <strong>Publish</strong> button</p>

  </body>
</html>
