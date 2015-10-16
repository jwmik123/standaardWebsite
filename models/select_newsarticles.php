<?php


$nr_items_page = NR_ITEMS_PAGE ;
$offset = ($page_nr-1)*$nr_items_page;

$sql = "SELECT * FROM newsarticles LIMIT " . $offset . ", " . 6;

$result = $mysqli->query($sql);

$result = resultToArray($result);
