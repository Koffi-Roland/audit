<?php
namespace App\Service\Query;

use App\Service\Query\ValidationService;

use Doctrine\ORM\EntityManagerInterface;


class ManagerService{

    protected $em;
    private $container;
    private $validateService;

    public function __construct(EntityManagerInterface $entityManager, Container $container,ValidationService $validationService)
    {
	    $this->em = $entityManager;
        $this->container = $container;
        $this->validateService = $validateService;
    }
    
    public function Amaro($entity){

        if($this->validateService->Verificator($entity)){
            $this->em->persist($entity);
            $this->em->flush();
            return true;
        }else false;
        

    }

}