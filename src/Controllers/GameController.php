<?php
namespace Tabletop\Games\Controllers;

use Tabletop\Games\Core\Controller;
use Tabletop\Games\Core\DBConnection;
use Tabletop\Games\Core\Request;
use Tabletop\Games\Models\ArticleModel;

class GameController extends Controller
{
    private $article_model;
    private $db_connection;
    public function __construct()
    {
        $this->db_connection =
            DBConnection::getInstance();
       $this->article_model = new ArticleModel();
    }


    public function indexAction(){
        $content = 'articles/articles.php';
       $articles = $this->article_model->getAllArticles();
        $data = [
            'page_title'=>'Статьи',
            'all_article'=>$articles,
        ];

        return $this->generateResponse($content, $data);
    }

    public function showGame(Request $request) {
        $id = $request->params()['id'];
        $content = 'games/game.php';
        $article = $this->article_model->getArticleById($id);
//        $book = $this->books_model->getById($id);
        $data = [
            'page_title' =>$article['title'],
            'article' => $article
//            'page_title' => $book['title'],
//            'book'=>$book
        ];
        return $this->generateResponse($content, $data);
    }

    public function addAction(Request $request){
        $data = $request->post();
        $sql = "INSERT INTO article (title, article_text, user_iduser)
 VALUES ( :title, :text, :user_iduser)";
        $params = [
            "title" => $data['title'],
            "text" => $data['text'],
            "user_iduser" => $data['user'];
        ];
        $this->db_connection->executeSql($sql, $params);
        header('Location:/account');
    }
}