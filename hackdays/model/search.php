<?php
DEFINE('DB_HOST', '127.0.0.1');
DEFINE('DB_NAME', 'dictionnaire');
DEFINE('DB_USER', 'dicoadmin');
DEFINE('DB_PASS', 'dicoadmin');

//$search = filter_input(INPUT_POST, "search", FILTER_SANITIZE_STRING);
//echo "<pre>";
//var_dump(naturalSearch($search));

function getConnexion()
{
     static $db = null;

     if ($db === null) {
          try {
               $connexionString = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '';
               $db = new PDO($connexionString, DB_USER, DB_PASS);
               $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch (PDOException $e) {
               die('Erreur : ' . $e->getMessage());
          }
     }
     return $db;
}

function insertRss($title, $url, $description, $date)
{
     static $ps = null;
     $bool = false;
     $sql = "INSERT INTO `dictionnaire`.`rss` (`idrss`, `title`, `url`, `description`, `date`)
              VALUES (null, :title, :url, :description, :date);";
     if ($ps == null) {
          $ps = getConnexion()->prepare($sql);
     }
     $ps->bindParam(":title", $title, PDO::PARAM_STR);
     $ps->bindParam(":url", $url, PDO::PARAM_STR);
     $ps->bindParam(":description", $description, PDO::PARAM_STR);
     $date = "20200225";
     $ps->bindParam(":date", $date, PDO::PARAM_STR);
     try {
          $bool = $ps->execute();
     } catch (Exception $e) {
          echo 'Exception reçue : ',  $e->getMessage(), "\n";
          $bool = false;
     }
     return $bool;
}

function naturalSearch($search)
{
     $connexion = getConnexion();
     $req = $connexion->prepare("SELECT * FROM francais WHERE MATCH (mot, definition) AGAINST (:search IN NATURAL LANGUAGE MODE) ");
     $req->bindParam(":search", $search, PDO::PARAM_STR);
     $req->execute();
     return $req->fetchAll(PDO::FETCH_ASSOC);
}
