<?php 

	abstract class Academy {

		protected $kompjuteri;
		protected $casovi;

		public function setKompjuteri($i) {

			$this->kompjuteri = $i;
		}

		public function getKompjuteri($i){

			return $this->kompjuteri;
		}


		public function setCasovi($i) {

			$this->casovi = $i;
		}

		public function getCasovi($i){

			return $this->casovi;
		}


	}

	class WebDesign extends Academy implements iWebandGraphic {

		protected $programiranje;
		protected $databazi;

		public function setProgramiranje($i) {

			$this->programiranje = $i;
		}

		public function getProgramiranje($i){

			return $this->programiranje;
		}

		public function setDatabazi($i) {

			$this->databazi = $i;
		}

		public function getDatabazi($i){

			return $this->databazi;
		}


	}

	class GraphicDesign extends Academy implements iWebandGraphic {

		protected $illustracija;
		protected $grafika;

		public function setIllustracija($i) {

			$this->illustracija = $i;
		}

		public function getIllustracija($i){

			return $this->illustracija;
		}

		public function setGrafika($i) {

			$this->grafika = $i;
		}

		public function getGrafika($i){

			return $this->grafika;
		}

	}

	interface iWebandGraphic {

		public function predavanje();

	}
	

$predavanje = new Predavanje;
$predavanje -> setKompjuteri("HP");
$predavanje -> setIllustracija("Photoshop")
$predavanje -> setProgramiranje("PHP")

echo "<pre>"
print_r($predavanje);
echo "<pre>";

 ?>