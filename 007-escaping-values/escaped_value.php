<!DOCTYPE html>
<html>
  <head>
    <title>Escaped value</title>
  </head>
  <body>

    <h1>Escaped value</h1>

    <form method="post">  <!-- submitting to itself -->
      
      <label for="forename">Name</label>
      <input type="text" name="forename" id="forename" value="<?php echo htmlspecialchars($_POST['forename']); ?>" />

      <input type="submit" />
    </form>

  </body>
</html>
