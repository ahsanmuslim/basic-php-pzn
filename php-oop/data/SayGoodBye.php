<?php 

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(string $name):void 
    {
        if(is_null($name)) {
            echo "Good bye " . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(string $name):void 
    {
        if(is_null($name)) {
            echo "Hello " . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}


trait CanRun
{   
    public abstract function run():void;
}

trait AllTrait {
    use SayHello, SayGoodBye, HasName, CanRun {
        // goodBye as private;
        // hello as private;
    }
}

class ParentPeople {
    
    public function goodBye(string $name):void 
    {
        echo "Good bye $name in Parent People" . PHP_EOL;
    }

    public function hello(string $name):void 
    {
        echo "Hello $name in Parent People" . PHP_EOL;
    }

}

class People extends ParentPeople {

    use AllTrait;

    public function run():void 
    {
        echo "People $this->name is running" . PHP_EOL;
    }

}

