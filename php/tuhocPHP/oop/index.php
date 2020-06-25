<?php

abstract class dongVat {
    public $chan = 4;

    abstract function run($chan);

    public function eat() {

    }
}

class conCho extends dongVat {
    public function run($chan){
        echo "Con cho chay bang 4 chan";
    }

}

$conCho = new conCho();
$conCho -> run(4);