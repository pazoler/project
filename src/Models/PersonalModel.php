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
}