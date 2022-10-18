<?php

include __DIR__ . "./database.php";

header("content-type: application/json");

echo json_encode($data);

?>