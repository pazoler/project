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
		$sql = 'SELECT game, date, place  FROM meeting_games';
		return $this->db->queryAll($sql);
	}
}