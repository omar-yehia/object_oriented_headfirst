<?php

include_once "Device.php";
include_once "Door.php";
include_once "Remote.php";

$door=new Door();
// $device=new Device($door);
// $device->initializeBarks();
// $device->openForBark("sdsdad");

$remote=new  Remote($door);
$remote->msgToClose();
$remote->msgToOpen();
$remote->msgToClose();
