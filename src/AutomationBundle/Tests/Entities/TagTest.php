<?php
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use AutomationBundle\Entity\Tag;
use Doctrine\ORM\EntityManager;

class TagTest extends KernelTestCase
{
	/**
	* @var Symfony\Component\HttpKernel\AppKernel
	*/
	protected $myKernel;

	/**
	* @var Doctrine\ORM\EntityManager
	*/
	protected $entityManager;

	/**
	* @var Symfony\Component\DependencyInjection\Container
	*/
	protected $container;
	
	protected $tagRepository;

	public function setUp()
	{
		// Boot the AppKernel in the test environment and with the debug.
		$this->myKernel= new \AppKernel('test', true);
		$this->myKernel->boot();

		// Store the container and the entity manager in test case properties
		$this->container = $this->myKernel->getContainer();
		$this->entityManager = $this->container->get('doctrine')->getManager();
		$this->tagRepository = $this->container->get('doctrine')->getRepository("AutomationBundle:Tag");
		// Build the schema for sqlite
		//$this->generateSchema();


		parent::setUp();
	}

	public function tearDown()
	{
		// Shutdown the kernel.
		$this->myKernel->shutdown();

		parent::tearDown();
	}

	public function testPersist(){
		$tag = new Tag();
		$tag->setDescricao("Direito Administrativo");
		$tag->setDateCreated(new \DateTime());
		$tag->setDateUpdated(new \DateTime());
		$tag->setChild($this->tagRepository->find(501));
		$this->entityManager->persist($tag);
		$this->entityManager->flush();
		$result = $this->tagRepository->findOneBy(['descricao'=>'Direito Administrativo', 'id'=>'901']);
		$this->assertEquals("Direito Administrativo", $result->getDescricao());
	}
	
	public function testUpdate(){
		
	}
	
	public function testDestroy(){
		
	}
}
