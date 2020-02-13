<?php 

namespace Tabletop\Games\Controllers;

use Tabletop\Games\Core\Controller;
use Tabletop\Games\Core\Request;
use Tabletop\Games\Models\PersonalModel;

class PersonalController extends Controller {

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
		$title = "Личная страница";
		$content = "personal/personal.php";
		$data = [
			"title" => $title
		];
		return parent::generateResponse($content, $data);
	}

	public function login(Request $request) {
		$formData = $request->post();
        $result = $this->personal_model->login($formData);

        //добавляем сессию
        if ($result == PersonalModel::SUCCESS) {
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

    public function logout() {
        unset($_SESSION['login']);
        $_SESSION = [];
        session_destroy();
        header('Location: /');
    }

}