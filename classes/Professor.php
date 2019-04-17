<?php
/**
 * Created by PhpStorm.
 * User: alunoces
 * Date: 16/04/2019
 * Time: 21:39
 */

class Professor
{
    private $idProfessor;
    private $nome;
    private $cargo;

    /**
     * @return mixed
     */
    public function getIdProfessor()
    {
        return $this->idProfessor;
    }

    /**
     * @param mixed $idProfessor
     */
    public function setIdProfessor($idProfessor)
    {
        $this->idProfessor = $idProfessor;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function __construct($id, $nome, $cargo)
    {
        $this->cargo = $cargo;
        $this->idProfessor = $id;
        $this->nome = $nome;
    }
}