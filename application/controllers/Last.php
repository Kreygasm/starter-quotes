<?php
	/**
	 * the last page with the rendered quote.
	 *
	 * controllers/First.php
	 *
	 * ------------------------------------------------------------------------
	 */
class Last extends Application {

	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
		$this->data['pagebody'] = 'last'; // The view we want to see.
		$record = $this->quotes->last();
		$this->data = array_merge($this->data, $record);
		$this->render();
	}
}

?>