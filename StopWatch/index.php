<?php
include "StopWatch.php";
$time = new StopWatch();
echo " bat dau luc: ". $time->start()."</br>";
echo "ket thuc luc: " .$time->stop()."</br>";
echo "thoi gian thuc thi la: ". $time->getElapsedTime();