<?php

class ConcreteClass02 extends AbstractClass02{
    public function prefixName($name, $separator = '.'){
        if ($name == 'Pacman') {
            $prefix = "Mr";
        } elseif($name == 'Pacwoman'){
            $prefix = "Mrs";
        } else{
            $prefix = '';
        }
        return "{$prefix}{$separator} {$name}";
    }

}