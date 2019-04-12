<?php

class Dice{

	public $dot1 = '<i class="fas fa-dice-one"></i>';
	public $dot2 = '<i class="fas fa-dice-two"></i>';
	public $dot3 = '<i class="fas fa-dice-three"></i>';
	public $dot4 = '<i class="fas fa-dice-four"></i>' ;
	public $dot5 = '<i class="fas fa-dice-five"></i>';
	public $dot6 = '<i class="fas fa-dice-six"></i>';
	public $randomNumber = 0;


	public function __construct(){
		$this->randomNumber = rand(1,6);
		//echo $this->randomNumber;
		switch ($this->randomNumber) {
			case '1':
				$this->drawDice1Dot();
				break;
			case '2':
				$this->drawDice2Dot();
				break;
			case '3':
				$this->drawDice3Dot();
				break;
			case '4':
				$this->drawDice4Dot();
				break;
			case '5':
				$this->drawDice5Dot();
				break;
			case '6':
				$this->drawDice6Dot();
				break;
		}
	}

	public function drawDice1Dot(){
		echo $this->dot1 . ' ';
	}

	public function drawDice2Dot(){
		echo $this->dot2 . ' ';
	}

	public function drawDice3Dot(){
		echo $this->dot3 . ' ';
	}

	public function drawDice4Dot(){
		echo $this->dot4 . ' ';
	}

	public function drawDice5Dot(){
		echo $this->dot5 . ' ';
	}

	public function drawDice6Dot(){
		echo $this->dot6 . ' ';
	}
}

?>