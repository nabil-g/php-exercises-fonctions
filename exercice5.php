<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

      function test(int $num, string $text)
      {
        return $num . " " . $text;
      }

      echo test(7,"hello");

       ?>
    </p>
  </body>
</html>
