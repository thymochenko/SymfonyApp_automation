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
}

