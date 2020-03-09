<?php
//require_once "../../search.php";
// @todo faire les requêtes SQL pour sauver le contenu de l'upload dans la base
class DBContenu{
    private function ConvertPDF_MD($tmp_path){
        return ".pdf content";
    }

    private function ConvertDOCX_MD($tmp_path){
        return "some .docx content";
    }

    private function ConvertTXT_MD($tmp_path){
        return "some .txt content";
    }

    private function ConvertHTML_MD($tmp_path){
        return "some .html content";
    }

    private function GetExt($path){
        return strrchr($path, '.');
    }

    function Convert($tmp_path) {
        // get ext
        $ext =  strrchr($tmp_path, '.');
        // use the correct convertion method
        switch ($ext) {
            case '.docx':
                # code...
                break;
            
            case '.txt':
                # code...
                break;
            
            case '.md':
                # code...
                break;
            
            case '.html':
                # code...
                break;
            
            default:
                // error
                break;
        }
        return $ext;
    }
    function Create_contenu($contenu){
        static $ps = null;
        $bool = false;
        $sql = "INSERT INTO `journarian`.`contenu`(`contenu`) VALUES (:content)";
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
}

$test = new DBContenu();
echo $test->Convert("\\wsl$\Debian\var\www\html\hackdays\in_progress\hackdays\model\crud.php");