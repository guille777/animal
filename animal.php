<?php 
class animal{
	
	public $tipo="perro";
	public $patas=4;
//getters:
	public function gettipo(){
		return $this->tipo;
	}
	public function getpatas(){
		return $this->patas;
	}
//seters:
	public function settipo($tip){
		$this->tipo=$tip;
	}
	public function setpatas($pat){
		$this->patas=$pat;
	}

}
?>