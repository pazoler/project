<?php


namespace Tabletop\Games\Models;

use Tabletop\Games\Core\DBConnection;

class PersonalModel
{   const SUCCESS = "Авторизация прошла успешно";
    const ERROR = "Ошибка авторизации";
    const ERROR_PWD = "Ошибка пароля";
    const USER_EXISTS = 'Пользователь с таким логином уже существует';
    const REGISTRATION_FAILED = 'Вы не были зарегистрированы';
    const REGISTRATION_SUCCESS = 'Регистрация прошла успешно';
    private $db;
    public function __construct()
    {
        $this->db = DBConnection::getInstance();
    }

    public function login(array $formData)
    {
        $login = $formData['login'];
        $pwd = $formData['pwd'];
        $user = $this->isUser($login);
        if(!$user) {
            return self::ERROR;
        }
        if($user["pwd"] !== $pwd) {
        	return self::ERROR;
        }
        $id = $this->idUser($login);
        return self::SUCCESS;
    }

    public function addUser(array $user_data){
        // проверка уникальности логина
        // password_hash();
        // добавление в таблицу user

       
        $login = $user_data['loginR'];
        if ($this->isUser($login)) return self::USER_EXISTS;
        $pwd = $user_data['password'];
       
        $user_sql = "INSERT INTO user (login, pwd) VALUES (:login, :pwd)";

        try{
            // начало транзакции
            $this->db->getConnection()
                ->beginTransaction();
            $user_params = [
                'login' => $login,
                'pwd'=>$pwd
            ];
            $this->db->executeSql($user_sql, $user_params);

            // подтверждение транзакции
            $this->db->getConnection()->commit();
            return self::REGISTRATION_SUCCESS;
        } catch (Exception $e) { // Обработка ошибки
//           // откат транзакции
            $this->db->getConnection()->rollBack();
            return self::REGISTRATION_FAILED;


        }
    }

    private function isUser(string $login){
        $sql = 'SELECT * FROM user WHERE login = :login';
        $user = $this->db->execute($sql,
            ['login'=>$login], false);
        return $user;
    }


     public function addNote (array $data) {
        $date = $data["date"];
        $game = $data["game"];
        $place = $data["place"];
        $id = $this->idUser($_COOKIE['login']);

        $sql = "INSERT INTO user_notes (game, date, place, user_idUser)
 VALUES ( :game, :date, :place, :user_idUser)";
        
        $params = [
            "game" => $game,
            "date" => $date,
            "place" => $place,
            "user_idUser"=> $id
        ];
        if($this->db->executeSql($sql, $params)) {
            return self::SUCCESS;
        } else return self::SUCCESS;
        
    }

    public function userInfo (array $data) {
        $email = $data["email"];
        $phone = $data["tel"];
        $name = $data["name"];
        $surname = $data["surname"];
        $id = $_COOKIE['id'];

        if($this->isId()) {
        	$sql = "UPDATE user_info SET email=:email, phone=:phone, name=:name, surname=:surname WHERE user_idUser=:id";
        	 $params = [
            "email" => $email,
            "phone" => $phone,
            "name" => $name,
            "surname" => $surname,
            "id"=> $id
        ];

        } else {
        	$sql = "INSERT INTO user_info (email, phone, name, surname,  user_idUser)
 VALUES ( :email, :phone, :name, :surname, :user_idUser)";
        
        $params = [
            "email" => $email,
            "phone" => $phone,
            "name" => $name,
            "surname" => $surname,
            "user_idUser"=> $id
        ];
        }
        
        if($this->db->executeSql($sql, $params)) {
            return self::SUCCESS;
        } else return self::SUCCESS;
        
    }

     private function idUser(string $login){
        $sql = 'SELECT iduser FROM user where login=:login';
        $id = $this->db->execute($sql,
            ['login'=>$login], false);
        setcookie('id', $id['iduser']);
        return $id['iduser'];
    }

    private function isId(){
        $id = $_COOKIE['id'];
        $sql = 'SELECT * FROM user_info where user_idUser=:id';
        $user = $this->db->execute($sql,
            ['id'=>$id], false);
        return $user;
      
    }

    public function getAllNotes () {
        $id = $_COOKIE['id'];
        $sql = "SELECT game, date, place FROM user_notes WHERE user_idUser=$id";
        return $this->db->queryAll($sql);
    }

   public function getSideGame(){
        $sql = 'SELECT title, pic, shortdescription, idpurchase  FROM product WHERE idpurchase="33"';
        return $this->db->queryAll($sql);
    }

    public function getUserInfo () {
        $id = $_COOKIE['id'];
        $sql = "SELECT email, phone, name, surname FROM user_info WHERE user_idUser=:id";
        $user_info = $this->db->execute($sql,
            ['id'=>$id], false);
        return $user_info;
    }

    public function regRemove($date) {
    	$id = $_COOKIE['id'];
		$sql = "DELETE FROM user_notes WHERE user_idUser=:id and `date`=:date;";
		$this->db->executeSql($sql, ['id'=>$id, 'date'=>$date], false);
	}
}