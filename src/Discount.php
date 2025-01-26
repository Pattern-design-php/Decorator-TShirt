<?php

namespace TShirt;

class Discount extends DecoratorTShirt
{
    public function cost(): float
    {
        return $this->tShirt->cost() - 10.0;
    }
}