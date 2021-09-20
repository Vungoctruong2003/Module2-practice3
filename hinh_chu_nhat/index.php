<?php

include "rectangle.php";

$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo "chieu rong ". $rectangle->height . "</br>";
echo "chieu dai ".$rectangle->width . "</br>";
echo "chu vi ".$rectangle->getPerimeter() . "</br>";
echo "dien tich ".$rectangle->getArea() . "</br>";
echo "image "."</br>".$rectangle->display();