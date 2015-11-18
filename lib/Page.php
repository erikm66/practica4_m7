<?php 
	/**
	*	Page : generate one web page 
	*
	* @package lib
	* @subpackage constructs
	* @author Erik
	*
	**/
class Page{

	private $header;
	private $menu;
	private $contents;
	private $foot;

	public function __construct($css,$title,$logo,$links,$body=null,$footer=null){
		$this->header=new Header($title,$logo,$css);
		$this->menu=new Menu($links);
		$this->contents=new Contents($body);
		$this->foot=new Foot($footer);
	}
	public function show(){
		$this->header->show();
		$this->menu->show();
		$this->contents->show();
		$this->foot->show();
	}
}

?>