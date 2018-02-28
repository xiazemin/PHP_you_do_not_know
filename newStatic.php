<?php
class Father {

    public function getNewFather() {
        return new self();
    }

    public function getNewCaller() {
        return new static();
    }

}

$f = new Father();

print get_class($f->getNewFather());
print get_class($f->getNewCaller());


class Sun1 extends Father {

}

class Sun2 extends Father {

}

$sun1 = new Sun1();
$sun2 = new Sun2();

print get_class($sun1->getNewFather());
print get_class($sun1->getNewCaller());
print get_class($sun2->getNewFather());
print get_class($sun2->getNewCaller());
