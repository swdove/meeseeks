<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User View</title>
</head>
<body>
<h1>
<?php
foreach ($result as $object) {
  echo $object->username . "<br>";
}
//echo $result;
 ?>
 </h1>

</body>
</html>
