<?php


namespace Tabletop\Games\Models;

use Tabletop\Games\Core\DBConnection;

class AdminModel
{   
    const SUCCESS = "Данные добавлены";
    const ERROR = "Ошибка добавления данных";
    
    private $db;
    public function __construct()
    {
        $this->db = DBConnection::getInstance();
    }

    public function addRow (array $data) {
        $date = $data["date"];
        $game = $data["game"];
        $place = $data["place"];

        $sql = "INSERT INTO meeting_games (game, date, place)
 VALUES ( :game, :date, :place)";
        
        $params = [
            "game" => $game,
            "date" => $date,
            "place" => $place
        ];
        $this->db->executeSql($sql, $params);
        
    }

    public function addGame (array $data, $file_name) {
        $pic = $file_name;
        $title = $data["title"];
        $number_players_min = $data["number_min"];
        $number_players_max = $data["number_max"];
        $description = $data["description"];
        $shortdescription = $data["shortdescription"];
        $type = $data["type"];

        $sql = "INSERT INTO product (title, description, pic, shortdescription, number_players_min, number_players_max, type)
 VALUES ( :title, :description, :pic, :shortdescription, :number_players_min, :number_players_max, :type)";
        
        $params = [
            "title" => $title,
            "description" => $description,
            "pic" => $pic,
            "shortdescription" => $shortdescription,
            "number_players_min" => $number_players_min,
            "number_players_max" => $number_players_max,
            "type" => $type
        ];
        $this->db->executeSql($sql, $params);
        
    }

    
}