<?php
$cookie_name = "user";
$cookie_value = "Samiksha Magdum";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>