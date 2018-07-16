<?php

  // return a message string with what was submitted
  echo "You sent:\n\n";

  if ( ! empty($_POST))
  {
    foreach ($_POST as $name => $value)
    {
      echo "$name = $value\n";
    }
  }

?>
