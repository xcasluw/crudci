<?php

/**
 * Created by PhpStorm.
 * User: Lucas Genari
 * Date: 05/10/2017
 * Time: 11:01
 */
class Upload_manager
{


    public $indexinput;
    public $dir;
    private $locationupload = ".../../../../images/uploads/";
    private $tipos = array('image/jpeg','image/jpeg','image/jpg', 'image/png','image/gif');
    private $newname;

    /**
     * @return mixed
     */
    public function getNewname()
    {
        return $this->newname;
    }

    /**
     * @return string
     */
    public function getLocationupload()
    {
        return $this->locationupload;
    }

    public function upload_file($file){

        if(!$this->valid_file($file)) return false;
        if(!$this->valid_location()) return false;
        if(!move_uploaded_file($file['tmp_name'], $this->locationupload.$this->dir.$this->newname)) return false;

        return true;


    }

// Valida se o tipo do arquivo é valido
    private  function valid_file($file){
        $arqType = $file['type'];
        if(array_search($arqType, $this->tipos) === FALSE){
         return false;
        }else {
            $this->duplicate_verify($file);
            return true;
        }


    }

    // verifica se  já existe um arquivo com o mesmo nome e renomeia;
    private function duplicate_verify($file){
        $nwf = $file['name'];
        if (file_exists($this->locationupload.$this->dir.$nwf)){
            $i=1;
            while (file_exists($this->locationupload.$this->dir."[".$i."]".$nwf)){
                $i++;
            }
            $nwf = "[".$i."]".$nwf;
        }
        $this->newname = $nwf;
        return true;
    }

    // valida se o diretorio informado existe
    private function valid_location(){
        return is_dir($this->locationupload.$this->dir);
    }

    //deleta o arquivo existente
    public function remove_file($filename){

        if(file_exists($filename)){
            unlink($filename);
        }else{
            print "$filename não existe";
        }

    }
}
