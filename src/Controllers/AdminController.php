<?php 


namespace Tabletop\Games\Controllers;

use Tabletop\Games\Core\Controller;
use Tabletop\Games\Core\Request;
use Tabletop\Games\Models\AdminModel;
use Tabletop\Games\Core\DBConnection;
use Tabletop\Games\Core\MoveUpload;

class AdminController extends Controller {

	const SUCCESS = "Данные добавлены";
    const ERROR = "Ошибка добавления данных";

	private $admin_model;
    public function __construct()
    {
        $this->admin_model = new AdminModel();
    }
	public function getPage()  {
		if($_SESSION['login'] !== "Admin") {
			header('Location: /');
		}
		$title = "Страница администратора";
		$content = "admin/admin.php";
		$data = [
			'title'=>$title
		];
		return parent::generateResponse($content, $data);
	}

	public function addRow(Request $request){
        $result = $this->admin_model
            ->addRow($request->post());
        $content = 'admin/admin.php';
        $data = [
            'page_title'=>'Зарегистрироваться',
            'result' => $result
        ];
        return $this->generateResponse($content, $data);
    }

    public function addGame(Request $request){
        $file = $request->files();
        $file_name = MoveUpload::uploadImage($file);

        if($file_name) {
        	 $result = $this->admin_model
            ->addGame($request->post(), $file_name);
        }
       
        
        $content = 'admin/admin.php';
        $data = [
            'page_title'=>'Зарегистрироваться',
            'result' => $file

        ];
        return $this->generateResponse($content, $data);
    }
}
