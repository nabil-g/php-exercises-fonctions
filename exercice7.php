<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

      function test(int $age, string $genre)
      {
        if ($age >= 18) {
          if ($genre == "Homme") {
            return "Vous êtes un homme et vous êtes majeur";
          } else {
            return "Vous êtes une femme et vous êtes majeure";
          }
        }
        else {
          if ($genre == "Homme") {
            return "Vous êtes un homme et vous êtes mineur";
          }
          else {
            return "Vous êtes une femme et vous êtes mineure";
          }
        }
      }

      echo test(24, "Homme");

       ?>
    </p>
  </body>
</html>
