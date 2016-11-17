<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Untitled</title>
  </head>
  <body>
    <p>
      <?php

      function test(string $nom, string $prenom, int $age)
      {
        return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
      }

      echo test("Abitbol", "Patrick", 35);

       ?>
    </p>
  </body>
</html>
