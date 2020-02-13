<?php 


namespace Tabletop\Games\Controllers;

use Tabletop\Games\Core\Controller;
use Tabletop\Games\Core\Request;
use Tabletop\Games\Models\IndexModel;

class IndexController extends Controller {

	public function index()  {
		$title = "Главная страница";
		$content = "main/main.php";

		$data = [
			'title'=>$title
		];
		return parent::generateResponse($content, $data);
	}	
}