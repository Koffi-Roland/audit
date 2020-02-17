<?php
namespace App\Service\Authentification;

use Symfony\Component\Security\Core\Security;

class SecurityService
{
    private $security;

    public function __construct(Security $security)
    {
        // Avoid calling getUser() in the constructor: auth may not
     
        $this->security = $security;
    }

    public function findCurrentUser()
    {
        // returns User object or null if not authenticated
        $user = $this->security->getUser();
    }
}