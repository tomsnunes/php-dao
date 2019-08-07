<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //idusuario
    public function getId(){
         return $this->idusuario;
    }

    public function setId($value){
        $this->idusuario = $value;
    }

    //deslogin
    public function getDeslogin(){
        return $this->deslogin;
    }

   public function setDeslogin($value){
       $this->deslogin = $value;
    }

   //dessenha
   public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }

    //dtcadastro
    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    //loadById
    public function loadById($id){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

    if (count($results) > 0) {

        $row = $results[0];

        $this->setId($row['idusuario']);
        $this->setDeslogin($row['deslogin']);
        $this->setDessenha($row['dessenha']);
        $this->setDtcadastro(new DateTime($row['dtcadastro']));
    }

    }

    //tostring
    public function __toString(){

        return json_encode(array(
            "idusuario"=>$this->getId(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadasto"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}

?>