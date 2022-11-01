<?php 

namespace Data\Location;

abstract class Location {
    public string $name =  "Tangerang";
}

class City extends Location {
    
}

class Province extends Location {

}

class Country extends Location {

}