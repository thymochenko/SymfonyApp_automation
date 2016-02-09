<?php

namespace AutomationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HoraTrabalhada
 *
 * @ORM\Table(name="hora_trabalhada")
 * @ORM\Entity(repositoryClass="AutomationBundle\Repository\HoraTrabalhadaRepository")
 */
class HoraTrabalhada {
	/**
     * @ORM\ManyToOne(targetEntity="tarefa", inversedBy="horaTrabalhadas")
     * @ORM\JoinColumn(name="tarefa_id", referencedColumnName="id")
     */
	private $tarefa;
	
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
     * @ORM\Column(type="text")
     */
	private $quantHoras;
	/** 
	*@ORM\Column(type="datetime") 
	*/
    private $dateCreated;
	/** 
	*@ORM\Column(type="datetime") 
	*/
	private $dateUpdated;
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantHoras
     *
     * @param string $quantHoras
     *
     * @return HoraTrabalhada
     */
    public function setQuantHoras($quantHoras)
    {
        $this->quantHoras = $quantHoras;

        return $this;
    }

    /**
     * Get quantHoras
     *
     * @return string
     */
    public function getQuantHoras()
    {
        return $this->quantHoras;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return HoraTrabalhada
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
     * @return HoraTrabalhada
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
     * Set tarefa
     *
     * @param \AutomationBundle\Entity\tarefa $tarefa
     *
     * @return HoraTrabalhada
     */
    public function setTarefa(\AutomationBundle\Entity\tarefa $tarefa = null)
    {
        $this->tarefa = $tarefa;

        return $this;
    }

    /**
     * Get tarefa
     *
     * @return \AutomationBundle\Entity\tarefa
     */
    public function getTarefa()
    {
        return $this->tarefa;
    }
}
