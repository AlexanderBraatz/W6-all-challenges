<?php

require __DIR__ . "/vendor/autoload.php";
//Create a class that performs a series of transformations on a string. You can use the get() method to get the final result.

class StringyRedux
{
    private $s;

    public function __construct($string)
    {
        $this->s = $string;
    }

    public function lower()
    {
        $this->s = strtolower($this->s);
        return $this;
    }

    public function repeat($times)
    {
        $this->s = str_repeat("{$this->s}", $times);
        return $this;
    }
    
    public function upper()
    {
        $this->s = strtoupper($this->s);
        return $this;
    }
    
    public function append($append)
    {
        $this->s = "{$this->s}{$append}";
        return $this;
    }
    
    public function get()
    {
        return $this->s;
    }
    
}



// ... your class here

$string1 = new StringyRedux("Oop");
dump($string1->lower()->repeat(2)->get()); // "oopoop"

$string2 = new StringyRedux("Spoon");
dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

$string3 = new StringyRedux("Na");
dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"