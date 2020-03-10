<?php

include_once 'abstract/paymenttypes.abstract.php';
include_once 'classes/buyProduct.class.php';

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment() . "<br>";

//1
include_once 'abstract/abstractclass.abstract.php';
include_once 'classes/concreteclass1.class.php';
include_once 'classes/concreteclass2.class.php';

$class1 = new ConreteClass1;
$class1->printOut();
echo $class1->prefixValue("FOO_") . "<br>";

$class2 = new ConreteClass2;
$class2->printOut();
echo $class2->prefixValue("FOO_") . "<br>";

//2
include_once 'abstract/abstractclass02.abstract.php';
include_once 'classes/concreteclass02.class.php';

$class02 = new ConcreteClass02;
echo $class02->prefixName("Pacman") . "<br>";
echo $class02->prefixName("Pacwoman") . "<br>";


//3
include_once 'abstract/averageperson.abstract.php';
include_once 'classes/joe.class.php';
include_once 'classes/bob.class.php';
//include_once 'interfaces/person.interface.php';

$people[] = new Bob();
$people[] = new Joe();

foreach ($people as $person) {
    $person->doWalk('over there');
    $person->talk('PHP rules');
}




interface a{
    public function xd();
}

abstract class eryk implements a{
    public function xd(){
        echo "<br> errrrr";
    }
}

class eryk2 extends eryk{

    public function xd(){
        echo "<br> 2222";
    }
}

$a = new eryk2();
$a->xd();