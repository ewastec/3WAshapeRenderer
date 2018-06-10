<?php
class SvgRenderer Implements Renderer
{
	protected $shapes;
    function __construct()
    {
        $this->shapes=[];
    }

    function addShape(Shape $shape)
    {
        $this->shapes[]=$shape;
    }

    function build()
    {
        foreach ($this->shapes as $shape)
        {
            $shape->draw($this);
        }	
    }

    function drawTriangle ($x,$y,$x1,$y1,$x2,$y2,$color)
    {
		echo '<polygon points="'.$x.','.$y.'
								'.$x1.','.$y1.'
								'.$x2.','.$y2.'" 
				fill="'.$color.'" />';
	}
}