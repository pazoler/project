<?php 


namespace Tabletop\Games\Controllers;

use Tabletop\Games\Core\Controller;
use Tabletop\Games\Core\Request;
use Tabletop\Games\Models\IndexModel;

class IndexController extends Controller {

	private $index_model;
    
    public function __construct()
    {
       
       $this->index_model = new IndexModel();
    }

	public function index()  {
		$title = "Главная страница";
		$content = "main/main.php";
		$games = $this->index_model->getAllGames();
		$slider = $this->index_model->forSlider();
		$data = [
			'title'=>$title,
			'games' => $games,
			'slider'=>$slider
		];
		return parent::generateResponse($content, $data);
	}

	 public function showAction(Request $request) {
        $id = $request->params()['id'];
        $content = 'main/game.php';
        $game = $this->index_model->getGameById($id);
//        
        $data = [
            'page_title' =>$game['title'],
            'game' => $game
//            
        ];
        return $this->generateResponse($content, $data);
    }

    public function removeGame(Request $request) {
        $id = $request->params()['id'];
        $content = 'personal/personal.php';
       $this->index_model->removeGame($id);
       
        $data = [
            'page_title' =>$game['title']           
        ];
        return $this->generateResponse($content, $data);
    }

    public function filterNum2()  {
		$title = "Главная страница";
		$content = "main/main.php";
		$games = $this->index_model->filterNum2();
		$slider = $this->index_model->forSlider();
		$data = [
			'title'=>$title,
			'games' => $games,
			'slider'=>$slider
		];
		return parent::generateResponse($content, $data);
	}

	public function filterNum3()  {
		$title = "Главная страница";
		$content = "main/main.php";
		$games = $this->index_model->filterNum3();
		$slider = $this->index_model->forSlider();
		$data = [
			'title'=>$title,
			'games' => $games,
			'slider'=>$slider
		];
		return parent::generateResponse($content, $data);
	}		
}