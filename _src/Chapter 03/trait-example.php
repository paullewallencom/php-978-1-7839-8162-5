<?php

class Animal{

}

trait twoLeggedAnimals{
//behaviors that only apply to fourLeggedAnimals
}


trait fourLeggedAnimals{
//behaviors that only apply to fourLeggedAnimals
}


class Dog extends Animal{
	use fourLeggedAnimals;

}

class Monkey extends Animal{
	use twoLeggedAnimals;

}
?>
