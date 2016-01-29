<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application{

  function __construct()
  {
    parent::__construct();
  }

  //-------------------------------------------------------------
  //  The normal pages
  //-------------------------------------------------------------
  function index()
  {
    $this->data['pagebody'] = 'justone';	// this is the view we want shown
    $record = $this->quotes->get(5);
    $this->data = array_merge($this->data, $record);
    $this->render();
  }

}

?>
