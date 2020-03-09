<?php
/*
 * Classe permettant de créer une sauvegarde d'une recherche
*/
require_once "./../search.php";

class DBSearch{

    

    #region Create
    /*
     * Method to create a new search
    */
    function Create_search($content, $priority) {
        static $ps = null;
        $bool = false;
        $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `search`(`search`, `priority`, `lastUpdate`) VALUES (:content, :priority, :date)";
        if ($ps == null) {
            $ps = getConnexion()->prepare($sql);
        }
        $ps->bindParam(":content", $content, PDO::PARAM_STR);
        $ps->bindParam(":priority", $content, PDO::PARAM_INT);
        $ps->bindParam(":date", $date, PDO::PARAM_STR);
        try {
            $bool = $ps->execute();
        } catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
            $bool = false;
        }
        return $bool;
    }
    /*
     * Method to create a new search in the delete db
    */
    function Create_searchDel($content) {
        static $ps = null;
        $bool = false;
        $sql = "INSERT INTO `search_del`(`search`) VALUES (:content)";
        if ($ps == null) {
            $ps = getConnexion()->prepare($sql);
        }
        $ps->bindParam(":content", $content, PDO::PARAM_STR);
        try {
            $bool = $ps->execute();
        } catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
            $bool = false;
        }
        return $bool;
    }
    #endregion

    #region Read
    /*
     * Method that will select records that aren't del
    */
    function Read_search($del = false) {
        $connexion = getConnexion();
        $sql = "SELECT `search`.`search`, `search`.`idsearch`
        FROM `journarian`.`search`";
        $sql .= ($del == false) ? " WHERE `isDeleted`= 0" : "" ;
        $req = $connexion->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
     * Method that will select records that aren't del, by the property
    */
    function Read_search_byPriority($priority) {
        $connexion = getConnexion();
        $sql = "SELECT `search`.`search`, `search`.`idsearch`
            FROM `journarian`.`search`
            WHERE `priority` = :priority";
        $req = $connexion->prepare($sql);
        $req->bindParam(":priority", $priority, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
     * Method that will select records that aren't del, by the id
    */
    function Read_search_byId($id) {
        $connexion = getConnexion();
        $sql = "SELECT `search`.`idsearch`, `search`.`search`, `search`.`priority`, `search`.`lastUpdate`
            FROM `journarian`.`search`
            WHERE `idSearch` = :id";
        $req = $connexion->prepare($sql);
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }
    
    /*
     * Method that will select records that aren't del, by the id
    */
    function Read_searchDel_byId($id) {
        $connexion = getConnexion();
        $sql = "SELECT `search_del`.`idsearch`, `search_del`.`search`
            FROM `journarian`.`search_del`
            WHERE `idSearch` = :id";
        $req = $connexion->prepare($sql);
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    #endregion

    #region Update
    /*
     * M
    */
    function Update_search_byId($id, $content){
        $sql = "UPDATE `journarian`.`search` SET `search`.`search`=:content WHERE `idSearch`=:id";
        $query = connect()->prepare($sql);
        $query->execute([
        ':id' => $id,
        ':content' => $content
        ]);
    }
    #endregion

    #region Delete
    /*
     *  switch the data from search table into search_del table
    */
    function Delete_search($idsearch) {
        $data = $this->Read_search_byId($idsearch);
        $bool = false;
        $this->Create_searchDel($data['search']);
        $sql = "DELETE FROM `journarian`.`search` WHERE `idSearch`= :id;";
        $connexion = getConnexion();
        $req = $connexion->prepare($sql);
        $req->bindParam(":id", $idsearch, PDO::PARAM_INT);
        try {
            $bool = $req->execute();
        } catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
            $bool = false;
        }
        return $bool;
    }
    #endregion

    #region Affichage
    function Display_search(){
        $data = $this->Read_search(false);
        $display = "";
        foreach ($data as $num) {
            foreach ($num as $key => $value) {
                $display .= $key . ":" . $value . "\n";
            }
        }
    }
    #endregion
}

$test = new DBSearch();
var_dump($test->Delete_search(3));