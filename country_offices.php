<?php

require_once 'classes/database.php';
require_once 'classes/Query.php';
$db = Database::getDb();
$office = new Query();
$list = $office->country_query($db);
$jsoncountry = json_encode($list);
header('Content-Type:Application/json');
echo $jsoncountry;
