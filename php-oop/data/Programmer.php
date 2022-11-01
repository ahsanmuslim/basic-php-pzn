<?php 

namespace Programmer;

class Programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FrontEndProgrammer extends Programmer {

}

class BackEndProgrammer extends Programmer{

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer){
    if($programmer instanceof BackEndProgrammer){
        echo "Hello Backends programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontEndProgrammer){
        echo "Hello Frontend programmer $programmer->name" . PHP_EOL;
    } else {
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }
}