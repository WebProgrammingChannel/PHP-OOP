<?php

class One
{

    private $name = 'htet lin thu';

    public function hello()
    {
        echo $this->name;
        echo "<br>";
        echo 'I am fokky method from One Class';
    }


}

// $obj = new One();
// $obj->hello();

class Two extends One
{
    public function haha(){
        echo $this->name;
    }
}
$obj2 = new Two();
$obj2->haha();

?>