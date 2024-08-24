<!DOCTYPE html>
<html>
  <head>
    <title>My Php</title>
  </head>
</html>

<php

$mysqli = mysqli_connect("ep-soft-sunset-a478dq9k.us-east-1.pg.koyeb.app", "koyeb-adm", "yQ4Z6bOzjvgP", "koyebdb");

if (mysqli_connect_errno()) {
  printf("Connect failed: $s\n", mysqli_connect_errno());
  exit();
} else {
  $sql = ""; //SQL Commands
  $res = mysqli_query($mysqli, $sql);
  if ($res === TRUE) {
    echo mysqli_get_host_info($mysqli);
  } else {
    printf("Could not perform action: $s\n", mysqli_error($mysqli));
  }
  mysqli_close($mysqli);
}