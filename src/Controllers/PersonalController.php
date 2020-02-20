<?php 

namespace Tabletop\Games\Controllers;

use Tabletop\Games\Core\Controller;
use Tabletop\Games\Core\Request;
use Tabletop\Games\Models\PersonalModel;

class PersonalController extends Controller {

    const SUCCESS = "Авторизация прошла успешно";
    const ERROR = "Ошибка авторизации";
	private $personal_model;
    public function __construct()
    {
        $this->personal_model = new PersonalModel();
    }

	public function registration() {
		$title = "Регистрация";
		$content = "personal/registration.php";
		$data = [
			"title" => $title
		];
		return parent::generateResponse($content, $data);
	}

	public function personal() {
        if(!isset($_SESSION['login'])) {
             header('Location: /');
        }
		$title = "Личная страница";
		$content = "personal/personal.php";
        $notes = $this->personal_model->getAllNotes();
        $info = $this->personal_model->getUserInfo();
        $games = $this->personal_model->getSideGame();
		$data = [
			"title" => $title,
            "notes" => $notes,
            "games" => $games,
            "info" => $info
		];
		return parent::generateResponse($content, $data);
	}

	public function login(Request $request) {
		$formData = $request->post();
        
        $result = $this->personal_model->login($formData);

        //добавляем сессию
        if ($result == PersonalModel::SUCCESS) {
            setcookie('login', $formData['login']);
            $_SESSION['login'] = $formData['login'];
        }
        return $this->ajaxResponse($result);
	}

	public function addUser(Request $request){
        $result = $this->personal_model
            ->addUser($request->post());
        $content = 'personal/registration.php';
        $data = [
            'page_title'=>'Зарегистрироваться',
            'result' => $result
        ];
        return $this->generateResponse($content, $data);
    }

    public function userInfo(Request $request){
        $result = $this->personal_model
            ->userInfo($request->post());
        if ($result == PersonalModel::SUCCESS) {
            header('Location: /personal');
        }
    }

    public function logout() {
        unset($_SESSION['login']);
        $_SESSION = [];
        session_destroy();
        header('Location: /');
    }

    public function addNote(Request $request){
        $result = $this->personal_model
            ->addNote($request->post());
        if ($result == PersonalModel::SUCCESS) {
            header('Location: /personal');
        }
    }

     public function regRemove(Request $request) {
        $date = $request->params()['date'];
        $content = 'personal/personal.php';
        $this->personal_model->regRemove($date);
    
        header('Location: /personal');
    }   

}