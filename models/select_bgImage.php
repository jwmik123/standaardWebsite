<?php
  $sql = "SELECT * FROM newsarticles LIMIT " . $offset . ", " . 6;

  $result = $mysqli->query($sql);
 ?>
