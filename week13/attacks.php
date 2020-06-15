<!-- XSS -->
<?php
  $title = "<script>alert(document.cookie)</script>";
  echo "<h1>$title</h1>";
?>


<!-- CSRF -->
<!-- Invisible image inside email or malicious website -->
<img src="https://bank.com/transfer?to=hacker&amount=10000" height="0" width="0">


<!-- SQL Injection -->
<form action="/submit" method="post">
  <label>Name:</label>
  <input type="text" name="name" value="user); DROP TABLE users;">
</form>