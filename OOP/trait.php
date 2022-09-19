<?php

trait trait1{
    public function msg1()
    {
        echo 'trait1 msg1';
    }
}

trait trait2{
    public function msg2()
    {
        echo 'trait2 msg2';
    }
}

class useTrait{
    use trait1;
    use trait2;
}

$obj = new useTrait();
$obj->msg1();
$obj->msg2();