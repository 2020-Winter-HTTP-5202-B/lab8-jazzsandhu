<?php
require_once 'classes/database.php';
require_once 'classes/Query.php';
$db =Database::getDb();
$o = new Query();
$country = $_GET['contry'];
$list = $o->list_query($db, $country);
$jsonlist = json_encode($list);
header('Content-Type:Application/json');
echo $jsonlist;



