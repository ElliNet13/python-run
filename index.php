<html>
<head>
  <title>Run Python</title>
  <script>
    function shell() {
      var code = document.getElementById('code').value;
      window.location.href = `run.php?shell=${encodeURIComponent(code)}`;
    }
  </script>
</head>
<body>
  <h1>Python runner</h1>
  <br><button onclick="shell()">Run</button>
  <br><textarea id="code" rows="4" cols="50"></textarea>
</body>
</html>