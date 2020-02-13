<?php 


namespace Tabletop\Games\Controllers;

use Tabletop\Games\Core\Controller;
use Tabletop\Games\Core\Request;
use Tabletop\Games\Models\TableModel;

class TableController extends Controller {

	private $table_model;
    
    public function __construct()
    {
       
       $this->table_model = new TableModel();
    }

	public function table()  {
		$title = "Запись на игры";
		$content = "table/table.php";
		$games = $this->table_model->getAllRows();
		$data = [
			'title' => $title,
			'games' => $games
		];
		return parent::generateResponse($content, $data);
	}	
}