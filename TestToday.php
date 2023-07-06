<?php class Employee{
    var $name;
    private $age;
    public $address;
    protected $salary;
    public $position;

    public function __construct($address){
        $this->address = $address;

    }

    public function set($var,$val){
        $this -> $var= $val;
    }

    public function get(){
echo "hello $this->name";
    }

}

$obj1=new Employee();
$obj1->set("");
$obj1->set("");
