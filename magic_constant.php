<?php

echo __LINE__;

echo "<br>";
//---------------------------------


echo __FILE__;

echo "<br>";
//---------------------------------


echo __DIR__;

echo "<br>";
//---------------------------------


function hello(){
    echo __FUNCTION__;
}
hello();

echo "<br>";
//---------------------------------


class One{
    public $a = __CLASS__;
}
$obj = new One();
echo $obj->a;

echo "<br>";
//----------------------------------


trait Two{
    public $b = __TRAIT__;
}

class Three{
    use Two;
}
$obj2 = new Three();
echo $obj2->b;

echo "<br>";
//------------------------------------


class Four{
    public function WPC(){
        echo __METHOD__;
    }
}
$obj3 = new Four();
$obj3->WPC();
?>