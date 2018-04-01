<?php 

// Start todo:class Animal
class Animal{
	protected $weight;
	protected $color;
	protected $name;

	public function __constructor($weight_animal,$color_animal,$name_animal){
		$this->weight=$weight_animal;
		$this->color=$color_animal;
		$this->name=$name_animal;
	}

	public function setWeight($weight)
	{
		$this->weight=$weight;
	}

	public function getWeight()
	{
		echo $this->weight;
	}

	public function setColor($color)
	{
		$this->color=$color;
	}

	public function getColor()
	{
		echo $this->color;
	}

	public function setName($name)
	{
		$this->name=$name;
	}

	public function getName(){
		echo $this->name;
	}
}
 // End todo: class Animal

 // Start todo : child Animal (inheritance) 

class Animal_Dog extends Animal
{
	public function setWeight($weight)
	{
		parent::setWeight();
	}

	public function getWeight(){
		parent::getWeight();
	}
}

// End to do class Animal_dog
// Call Class Child
 $animal_dog=new Animal;
 $animal_dog->setWeight("100kg");
 $animal_dog->getWeight();

?>