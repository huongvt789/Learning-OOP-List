<?php 

// Start todo:class Animal
class Animal{
	protected $weight;
	protected $color;
	protected $name;

	public function setData($weight=null,$color=null,$name=null){
		$this->weight=$weight;
		$this->color=$color;
		$this->name=$name;

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
	public function __construct($weight, $color, $name){
				$this->setData($weight, $color, $name);
		}
	private $say="Hello word";
	public function getValue()
	{
		echo $this->weight;
		echo $this->color;
		echo $this->name;
		echo $this->say;
	}
}

// End to do class Animal_dog
// Call
 $animal_dog=new Animal_Dog("100kg","Blue","Dog");
 $animal_dog->getValue();

?>

<!-- Ket luan: Lop con ke thua lop cha thi duoc su dung cac thanh phan cua lop cha. Dac biet la co the mo rong them dac tinh rieng co. -->