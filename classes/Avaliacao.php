<?php
class Avaliacao
{
    private $idAvaliacao;
    private $nota1;
    private $nota2;
    private $situacao;
    private $matricula;

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function __construct($idAvaliacao, $matricula, $nota1, $nota2, $notafinal = null)
    {
        $this->idAvaliacao = $idAvaliacao;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->notafinal = $notafinal;
        $this->matricula = $matricula;
        $this->setSituacaoFinal();
    }

    public function setSituacaoFinal()
    {
        $media = ($this->nota1 + $this->nota2)/2;

        if($media >=4 and $media < 7)
        {
            $media = ($media + $this->notafinal)/2;
            $this->situacao = ($media >= 6) ? "Aprovado" : "Reprovado";
        }
        else
        {
            $this->situacao = ($media >= 7) ? "Aprovado" : "Reprovado";
        }
    }

    /**
     * @param mixed $idAvaliacao
     */
    public function setIdAvaliacao($idAvaliacao)
    {
        $this->idAvaliacao = $idAvaliacao;
    }

    /**
     * @param mixed $nota1
     */
    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;
    }

    /**
     * @param mixed $nota2
     */
    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;
    }

    /**
     * @param null $notafinal
     */
    public function setNotafinal($notafinal)
    {
        $this->notafinal = $notafinal;
    }
    private $notafinal;

    /**
     * @return mixed
     */
    public function getIdAvaliacao()
    {
        return $this->idAvaliacao;
    }

    /**
     * @return mixed
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * @return mixed
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * @return null
     */
    public function getNotafinal()
    {
        return $this->notafinal;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }
}
?>