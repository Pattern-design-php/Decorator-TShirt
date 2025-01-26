<?php

namespace TShirt;

class DecoratorTShirt implements TShirt
{
    protected $tShirt;
    public function __construct(TShirt $tShirt)
    {
        $this->tShirt = $tShirt;
    }
    public function color(): string
    {
        return $this->tShirt->color();
    }
    public function size(): string
    {
        return $this->tShirt->size();
    }
    public function cost(): float
    {
        return $this->tShirt->cost();
    }
}
