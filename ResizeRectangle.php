<?php
class ResizeRectangle extends Rectangle implements Resizeable
{
    public function __construct($width, $height)
    {
        parent::__construct($width, $height);
    }

    public function resize($objShape)
    {
        // TODO: Implement resize() method.
        $RecHeight = $this->getHeight();
        $RecWidth = $this-> getWidth();
        return "After Height : " .$RecHeight*rand(0.1,1) . "After Width :" .$RecWidth*rand(0.1,1);
    }
}
