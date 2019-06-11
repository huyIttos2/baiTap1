<?php
class ResizeSquare extends Square implements Resizeable
{
    public function __construct($width)
    {
        parent::__construct($width);
    }

    public function resize($objShape)
    {
        // TODO: Implement resize() method.
        $percent = rand(0.1,1);
        return "Width ->resize :" .$this->width*$percent;
    }
}