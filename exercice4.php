<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

      function test(int $num1, int $num2)
      {
        if ($num1 > $num2) {
          return "Le premier nombre est plus grand";
        } elseif ($num1 == $num2 ) {
          return "Les deux nombres sont identiques";
        }
        else {
          return "Le premier nombre est plus petit";
        }
      }

      echo test(7,3);

       ?>
    </p>
  </body>
</html>
