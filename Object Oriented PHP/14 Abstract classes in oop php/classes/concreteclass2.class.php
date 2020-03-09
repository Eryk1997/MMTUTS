<?php

class ConreteClass2 extends AbstractClass{
    public function getValue(){
        return "ConreteClass2";
    }

    public function prefixValue($prefix){
        return "{$prefix}ConreteClass2";
    }
}