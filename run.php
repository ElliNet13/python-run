<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Python run console</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
</head>

<body>
  <?php
  if (isset($_GET['shell'])) {
      $param = $_GET['shell'];

      if (!empty($param)) {
          echo "<py-script>$param</py-script>";
      } else {
          http_response_code(400);
          echo "Invalid command";
      }
  } else {
      http_response_code(400);
      echo "Shell parameter missing";
  }
  ?>
  <script src="script.js"></script>
  <script defer src="https://pyscript.net/latest/pyscript.js"></script>
</body>

</html>