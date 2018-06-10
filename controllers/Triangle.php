<?php
class Triangle extends Shape
{
	protected $x;
	protected $y;
	protected $x1;
	protected $y1;
	protected $x2;
	protected $y2;

	function setX($x){$this->x=$x;}
	function setY($y){$this->y=$y;}
	function setX1($x1){$this->x1=$x1;}
	function setY1($y1){$this->y1=$y1;}
	function setX2($x2){$this->x2=$x2;}
	function setY2($y2){$this->y2=$y2;}

	function getX(){return $this->x;}
	function getY(){return $this->y;}
	function getX1(){return $this->x1;}
	function getY1(){return $this->y1;}
	function getX2(){return $this->x2;}
	function getY2(){return $this->y2;}
	
    function draw (Renderer $renderer)
    {
		$renderer->drawTriangle($this->x,$this->y,$this->x1,$this->y1,$this->x2,$this->y2,$this->color);
	}
}