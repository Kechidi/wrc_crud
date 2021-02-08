<?php


namespace wrc;


class entiteCopilote
{
    protected $code_copilote;
    protected $nom_copilote;
    protected $prenom_copilote;


    public function getCodeCopilote(){
      return  $this->code_copilote;
    }

    /**
     * @return mixed
     */
    public function getNomCopilote()
    {
        return $this->nom_copilote;
    }

    /**
     * @return mixed
     */
    public function getPrenomCopilote()
    {
        return $this->prenom_copilote;
    }

    /**
     * @param mixed $code_copilote
     */
    public function setCodeCopilote($code_copilote)
    {
        $this->code_copilote = $code_copilote;
    }

    /**
     * @param mixed $nom_copilote
     */
    public function setNomCopilote($nom_copilote)
    {
        $this->nom_copilote = $nom_copilote;
    }

    /**
     * @param mixed $prenom_copilote
     */
    public function setPrenomCopilote($prenom_copilote)
    {
        $this->prenom_copilote = $prenom_copilote;
    }
public function  {

}

}