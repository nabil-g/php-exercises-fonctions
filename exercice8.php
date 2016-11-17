<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

      function test(int $num1, int $num2, int $num3)
      {
          return $num1 + $num2 + $num3;
      }

      echo test(30,25,3);

       ?>
    </p>
  </body>
</html>
