<?php
include "Fan.php";
$fan1 = new Fan();
$fan1->setColor("yellow");
$fan1->setSpeech(fast);
$fan1->setSatus(true);
$fan1->setRadius(10);
 echo  $fan1->toString();
$fan2 = new Fan();
$fan2->setSpeech(medium);
echo  $fan2->toString();