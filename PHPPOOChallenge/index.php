<?php

require_once 'autoload.php';

$Rectangle = new Rectangle(3, 4);
$Rectangle->setName('Rect 1');

echo "Id: ". $Rectangle->getId()."\n";
echo "Name: ". $Rectangle->getName()."\n";
echo "Length: ". $Rectangle->getLength()."\n";
echo "Width: ". $Rectangle->getWidth()."\n";
echo "Area: ". $Rectangle->getArea()."\n\n\n\n\n";

$newRec = $Rectangle->duplicate();
$newRec->setName('Copy of '.$newRec->getName());
echo "Id: ". $newRec->getId()."\n";
echo "Name: ". $newRec->getName()."\n";
echo "Length: ". $newRec->getLength()."\n";
echo "Width: ". $newRec->getWidth()."\n";
echo "Area: ". $newRec->getArea()."\n\n\n\n\n";


$Circle = new Circle(8);
$Circle->setName('Circ 1');
echo "Id: " . $Circle->getId()."\n";
echo "Name: " . $Circle->getName()."\n";
echo "Radius: " . $Circle->getRadius()."\n";
echo "Area: " . $Circle->getArea()."\n\n\n\n\n";

$newCircle = $Circle->duplicate();
$newCircle->setName('Copy of '.$newCircle->getName());
echo "Id: " . $newCircle->getId()."\n";
echo "Name: " . $newCircle->getName()."\n";
echo "Radius: " . $newCircle->getRadius()."\n";
echo "Area: " . $newCircle->getArea()."\n\n\n\n\n";
