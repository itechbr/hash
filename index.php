<html>
  <title>HASH </title>
<body>
<?php
echo "HASH 256";
echo hash('sha256', 'The quick brown fox jumped over the lazy dog.');
echo "<hr />";
echo "HASH 512";
echo hash('sha512', 'The quick brown fox jumped over the lazy dog.');
?>
</body>
</html>
