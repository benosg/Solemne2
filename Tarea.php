<?php
class Tarea{
    private $lista;
    private $elemento;

    public function getLista(){
        return $this->lista;
    }

    public function setLista($lista){
        $this->lista=$lista;
    }

    public function getElemento(){
        return $this->elemento;
    }

    public function setElemento($ele){
        $this->elemento=$ele;
    }

    public function deleteLista($pos){
        unset($this->lista[$pos]);
        $this->lista=array_values($this->lista);
    }

}
?>
