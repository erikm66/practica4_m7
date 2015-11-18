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
	class Menu{
		private $links=array();
		public function __construct($links){
			$this->links=$links;
		}
		public function show(){
			echo '<nav><ul id="nave">';
			foreach($this->links as $clau => $valor){
				echo '<li><a href="'.$valor.'">'.$clau.'</a></li>';
			}
			echo '</ul></nav>';
		}
		
	}

	
?>