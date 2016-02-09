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
    
}