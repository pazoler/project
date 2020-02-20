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
		$gamess = $this->table_model->getSideGame();
		$data = [
			'title' => $title,
			'games' => $games,
			'gamess' => $gamess
		];
		return parent::generateResponse($content, $data);
	}

	 public function removeRow(Request $request) {
        $id = $request->params()['id'];
       
        $this->table_model->removeRow($id);
    
        header('Location: /table');
    }  


}