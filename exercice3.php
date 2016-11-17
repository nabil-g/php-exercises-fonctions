<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

      function test(string $text1, string $text2)
      {
        return $text1 . " " . $text2;
      }

      echo test("hello", "you");

       ?>
    </p>
  </body>
</html>
