<?php

namespace TShirt;

class LouisVuittonTShirt extends DecoratorTShirt
{
    public function color(): string
    {
        return "Black";
    }
    public function size(): string
    {
        return "L";
    }
    public function cost(): float
    {
        return $this->tShirt->cost() + 100.0;
    }
}
