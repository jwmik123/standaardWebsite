<?php

  $sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_result%'";
  $result = $mysqli->query($sql);
  $result = resultToArray($result);

 ?>
