<?php 

namespace Tabletop\Games\Models;

use Tabletop\Games\Core\DBConnection;

class IndexModel
{   
    private $db;
    public function __construct()
    {
        $this->db = DBConnection::getInstance();
    }

   public function getAllGames () {
		$sql = 'SELECT title, pic, shortdescription, idpurchase  FROM product';
		return $this->db->queryAll($sql);
	}

	public function forSlider () {
		$sql = 'SELECT title, pic, shortdescription, idpurchase FROM product WHERE idpurchase < 100 ORDER BY idpurchase ASC LIMIT 2';
		return $this->db->queryAll($sql);
	}

	public function getGameById($id) {
		$sql = "SELECT idpurchase, title, pic, description  FROM product WHERE idpurchase = :id;";
		return $this->db->execute($sql, ['id'=>$id], false);
	}

	public function removeGame($id) {
		$sql = "DELETE FROM product WHERE idpurchase=:id;";
		$this->db->executeSql($sql, ['id'=>$id], false);
	}

	 public function filterNum2 () {
		$sql = 'SELECT title, pic, shortdescription, idpurchase  FROM product where number_players_min>1';
		return $this->db->queryAll($sql);
	}

	 public function filterNum3 () {
		$sql = 'SELECT title, pic, shortdescription, idpurchase  FROM product where number_players_min>2';
		return $this->db->queryAll($sql);
	}
}