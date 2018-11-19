<?php

class HomeController extends Controller{

	public function index(){
		$this->set(result,false);
	}

	public function getresults() {
		$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=5b037f66ce6f4595b9533006181911&q=".$_POST['zip']."&format=xml&num_of_days=2");
		$this->set(result,true);
		$this->set($weather,$xml);
	}

}

?>
