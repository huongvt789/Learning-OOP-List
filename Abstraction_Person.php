<?php 

// Start to do: Class Astrach 

abstract class Person{
	public $name;
	public $age;
	public $hobby;

	public function setData($name=null, $age=null, $hobby=null){
		$this->name=$name;
		$this->age=$age;
		$this->hobby=$hobby;
	}

}

// End to do: Class Person

// Start to do: Class Child
class Item_Person extends Person{
	public function __construct($name,$age,$hobby){
		$this->name=$name;
		$this->age=$age;
		$this->hobby=$hobby;
	}
	public function getData(){
		echo $this->name;
		echo $this->age;
		echo $this->hobby;
	}
}

// End to do: Class Item_Person
// Call check

$person=new Item_Person("Viva","20","Play sport");
$person=$person->getData();

?>