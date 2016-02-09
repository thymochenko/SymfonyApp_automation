<?php

namespace AutomationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HoraTrabalhada
 *
 * @ORM\Table(name="projeto")
 * @ORM\Entity(repositoryClass="AutomationBundle\Repository\ProjetoRepository")
 */
class Projeto {
	
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
	private $nome;
	/**
     * @ORM\Column(type="text")
     */
	private $descricao;
	/** 
	*@ORM\Column(type="datetime") 
	*/
    private $dateCreated;
	/** 
	*@ORM\Column(type="datetime") 
	*/
	private $dateUpdated;
    
}