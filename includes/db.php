<?php
$conn = mysqli_connect("localhost", "root", "", "coffeeAndTea");

if (!$conn) {
  echo "connection doesn't occours " . mysqli_connect_error($conn);
}
