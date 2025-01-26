<?php 
namespace TShirt;

class SimpleTShirt implements TShirt{
    
    public function color():string{
        return "Red";
    }
    public function size():string{
        return "M";
    }
    public function cost():float{
        return 100.0;
    }
}