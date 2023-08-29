<?php
include "../Instrument.php";
include "../Inventory.php";

$inventroy = new Inventory();
$inventroy->initializeInventory();
$res=$inventroy->search(['prop_A'=>'zzz']);
echo '<pre>';
var_dump($res);