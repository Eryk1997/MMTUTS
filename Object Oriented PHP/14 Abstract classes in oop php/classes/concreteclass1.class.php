<?php

class ConreteClass1 extends AbstractClass {
    protected function getValue(){
        return "ConreteClass1";
    }

    public function prefixValue($prefix){
        return "{$prefix}ConreteClass1";
    }
}