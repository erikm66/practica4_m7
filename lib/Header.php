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
	class Header{
		private $title;
		private $logo;
		private $css;

		public function __construct($title,$logo,$css){
			$this->title=$title;
			$this->logo=$logo;
			$this->css=$css;
		}
		public function show(){
		$html=LAYOUT.$this->css.'</style></head>';
		echo $html;
		echo '<header><div id="cabeza"><h1>'.$this->title.'<h1>';
		echo '<img id="logo" src='.$this->logo.'></div></header>';
	}
	}
?>