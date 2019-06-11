<?php

class ResizeCircle extends  Circles implements Resizeable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function resize($objShape)

    {
        // TODO: Implement resize() method.
        $objShapeRadius = $this->getRadius();
        return "Radius after :" .$radiusThen = $objShapeRadius*rand(0.1,1);
    }

}

