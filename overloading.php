<?php 
class Person{
	private $name;
	private $lastname;
	private $city;
	private $mobile;

		public function __toString() {
			return $this->name. ", ". $this->lastname." ".$this->city." ".$this->mobile."\n";
		}
		public function __construct(){
			$this->name="miguel ";
			$this-> lastname="almanza ";
			$this-> city="barranquilla";
			$this-> mobile		="300"	;
	}
	public function __call($name,$arguments){
		$no_method=true;
		$method_name=substr(strtolower($name), 0,3);
		if ($method_name=="get"){
			$no_method = false;
			$real_name=substr($name,3);
			return $this->$real_name."\n";
		}
		if ($method_name=="set"){
			$no_method = false;
			$real_name=substr($name,3);
			//var_dump($arguments);
			$this->$real_name=$arguments[0];
			echo $this->$real_name;
		}
		if ($no_method){
			throw new Exception("metodo {$name} no encontrado");
		}
	}

}
$person =new person;
echo $person;
echo $person->getname();
echo $person->getlastname();
echo $person->getcity();
$person->setname("ni");

