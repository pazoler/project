<?php 

namespace Tabletop\Games\Models;

use Tabletop\Games\Core\DBConnection;

class TableModel
{   
    private $db;
    public function __construct()
    {
        $this->db = DBConnection::getInstance();
    }

   public function getAllRows () {
		$sql = 'SELECT game, date, place, idmeeting_games  FROM meeting_games';
		return $this->db->queryAll($sql);
	}

	public function getSideGame(){
        $sql = 'SELECT title, pic, shortdescription, idpurchase  FROM product WHERE idpurchase="33"';
        return $this->db->queryAll($sql);
    }

    public function removeRow($id) {
        $sql = "DELETE FROM meeting_games WHERE idmeeting_games=:id;";
        $this->db->executeSql($sql, ['id'=>$id], false);
    }
}