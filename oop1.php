<?php 


 abstract class MotornoVozilo {

	protected $tip_na_motor;
	protected $broj_na_trkala;
	protected $kw;

}

abstract class Avtomobil extends MotornoVozilo{

	protected $br_vozdushni_pernichinja;
}


interface iAvtomobil{

	public function pali();
}


class BMW extends Avtomobil implements iAvtomobil{

	protected $model;


	public function setTipNaMotor($i){

		$this->tip_na_motor = $i;
	}

	public function getTipNaMotor($i){

		return $this->tip_na_motor;
	}

	public function setBrojNaTrkala($i){

		$this->broj_na_trkala = $i;
	}

	public function getBrojNaTrkala($i){

		return $this->broj_na_trkala;
	}


	public function setkw($i){

		$this->tip_na_motor = $i;
	}

	public function getkw($i){

		return $this->kw;
	}

	public function setBrNaVozdushniPernichinja($i){

		$this->br_vozdushni_pernichinja = $i;
	}

	public function getBrNaVozdushniPernichinja($i){

		return $this->br_vozdushni_pernichinja;
	}

	public function setmodel($i){

		$this->model = $i;
	}

	public function getmodel($i){

		return $this->model;
	}

	public function pali() {

		echo "brm brmm brmmm";
	}

}

// $mv = new MotornoVozilo;
$bmw = new BMW;
$bmw -> setmodel ("X5");
$bmw -> setkw ("400");
$bmw -> pali();

echo "<pre>";
print_r($bmw);
echo "<pre>";



 ?>