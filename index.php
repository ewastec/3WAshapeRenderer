<?php
include 'controllers/Renderer.php';
include 'controllers/Shape.php';
include 'controllers/SVGrenderer.php';
include 'controllers/Triangle.php';

$renderer=new SvgRenderer();
$triangle = new Triangle();
$triangle->setX(100);
$triangle->setY(0);
$triangle->setX1(0);
$triangle->setY1(100);
$triangle->setX2(200);
$triangle->setY2(100);
$triangle->setColor('red');

include 'public/templates/index.phtml'
?>