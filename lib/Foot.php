<?php 
/**
	*
	*	Header: generates the page header
	*
	*	@package lib
	*	@subpackage constructs
	*	@author Erik
	*
	**/
	class Foot{
		private $footer;
		public function __construct($footer){
			$this->footer=$footer;
		}

		public function show(){
		echo '<footer id="foot2">'.$this->footer.'</footer>';
		
	}
	}
	
?>