
<?php
$sql = "SELECT * FROM agenda";

$result = $mysqli->query($sql);

$result = resultToArray($result);

?>
