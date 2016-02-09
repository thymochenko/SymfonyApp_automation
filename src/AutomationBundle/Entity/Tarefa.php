<?php

namespace AutomationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tarefa")
 * @ORM\Entity(repositoryClass="AutomationBundle\Repository\TarefaRepository")
 */
class Tarefa{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="message_seq", initialValue=1, allocationSize=100)
     */
    private $id;
	
	/**
     * @ORM\Column(type="integer")
	 */
    private $status;
	
	/**
     * @ORM\Column(type="text")
     */
	private $descricao;
	/**
     * @ORM\ManyToOne(targetEntity="Tag")
     * @ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     */
	private $Tag;
	
	/**
     * @ORM\Column(type="text")
     */
	private $titulo;
	/** 
	*@ORM\Column(type="datetime") 
	*/
	private $dataDeConclusao;
	/**
     * @ORM\OneToMany(targetEntity="HoraTrabalhada", mappedBy="Tarefa")
     */
	private $horaTrabalhadas;
	/**
     * @ORM\OneToMany(targetEntity="Revisao", mappedBy="Tarefa")
     */
	private $revisao;
	/**
     * @ORM\OneToMany(targetEntity="Arquivo", mappedBy="Tarefa")
     */
	private $arquivo;
	/** 
	*@ORM\Column(type="datetime") 
	*/
	private $quantidadeHorasEstipulada;
	/**
     * @ORM\ManyToOne(targetEntity="Projeto")
     * @ORM\JoinColumn(name="projeto_id", referencedColumnName="id")
     */
	private $projeto;
	/** 
	*@ORM\Column(type="datetime") 
	*/
    private $dateCreated;
	/** 
	*@ORM\Column(type="datetime") 
	*/
	private $dateUpdated;
    
	public function __construct(){
		$this->horaTrabalhadas = ArrayCollection();
		$this->revisao = ArrayCollection();
		$this->arquivo = ArrayCollection();
	}
	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Tag
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Tarefa
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Tarefa
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Tarefa
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set dataDeConclusao
     *
     * @param \DateTime $dataDeConclusao
     *
     * @return Tarefa
     */
    public function setDataDeConclusao($dataDeConclusao)
    {
        $this->dataDeConclusao = $dataDeConclusao;

        return $this;
    }

    /**
     * Get dataDeConclusao
     *
     * @return \DateTime
     */
    public function getDataDeConclusao()
    {
        return $this->dataDeConclusao;
    }

    /**
     * Set quantidadeHorasEstipulada
     *
     * @param \DateTime $quantidadeHorasEstipulada
     *
     * @return Tarefa
     */
    public function setQuantidadeHorasEstipulada($quantidadeHorasEstipulada)
    {
        $this->quantidadeHorasEstipulada = $quantidadeHorasEstipulada;

        return $this;
    }

    /**
     * Get quantidadeHorasEstipulada
     *
     * @return \DateTime
     */
    public function getQuantidadeHorasEstipulada()
    {
        return $this->quantidadeHorasEstipulada;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Tarefa
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     *
     * @return Tarefa
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set tag
     *
     * @param \AutomationBundle\Entity\Tag $tag
     *
     * @return Tarefa
     */
    public function setTag(\AutomationBundle\Entity\Tag $tag = null)
    {
        $this->Tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \AutomationBundle\Entity\Tag
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Add horaTrabalhada
     *
     * @param \AutomationBundle\Entity\HoraTrabalhada $horaTrabalhada
     *
     * @return Tarefa
     */
    public function addHoraTrabalhada(\AutomationBundle\Entity\HoraTrabalhada $horaTrabalhada)
    {
        $this->horaTrabalhadas[] = $horaTrabalhada;

        return $this;
    }

    /**
     * Remove horaTrabalhada
     *
     * @param \AutomationBundle\Entity\HoraTrabalhada $horaTrabalhada
     */
    public function removeHoraTrabalhada(\AutomationBundle\Entity\HoraTrabalhada $horaTrabalhada)
    {
        $this->horaTrabalhadas->removeElement($horaTrabalhada);
    }

    /**
     * Get horaTrabalhadas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHoraTrabalhadas()
    {
        return $this->horaTrabalhadas;
    }

    /**
     * Add revisao
     *
     * @param \AutomationBundle\Entity\Revisao $revisao
     *
     * @return Tarefa
     */
    public function addRevisao(\AutomationBundle\Entity\Revisao $revisao)
    {
        $this->revisao[] = $revisao;

        return $this;
    }

    /**
     * Remove revisao
     *
     * @param \AutomationBundle\Entity\Revisao $revisao
     */
    public function removeRevisao(\AutomationBundle\Entity\Revisao $revisao)
    {
        $this->revisao->removeElement($revisao);
    }

    /**
     * Get revisao
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRevisao()
    {
        return $this->revisao;
    }

    /**
     * Add arquivo
     *
     * @param \AutomationBundle\Entity\Arquivo $arquivo
     *
     * @return Tarefa
     */
    public function addArquivo(\AutomationBundle\Entity\Arquivo $arquivo)
    {
        $this->arquivo[] = $arquivo;

        return $this;
    }

    /**
     * Remove arquivo
     *
     * @param \AutomationBundle\Entity\Arquivo $arquivo
     */
    public function removeArquivo(\AutomationBundle\Entity\Arquivo $arquivo)
    {
        $this->arquivo->removeElement($arquivo);
    }

    /**
     * Get arquivo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArquivo()
    {
        return $this->arquivo;
    }

    /**
     * Set projeto
     *
     * @param \AutomationBundle\Entity\Projeto $projeto
     *
     * @return Tarefa
     */
    public function setProjeto(\AutomationBundle\Entity\Projeto $projeto = null)
    {
        $this->projeto = $projeto;

        return $this;
    }

    /**
     * Get projeto
     *
     * @return \AutomationBundle\Entity\Projeto
     */
    public function getProjeto()
    {
        return $this->projeto;
    }
}
