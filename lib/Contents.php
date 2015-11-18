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
	class Contents{

		private $body;
		public function __construct($body){
			$this->body=$body;
		}
		public function show(){
		echo '<section><div id="centro"><p id="article">'.$this->body.'</p></div>';
		
	}
	}
	
?>