<?php
// src/Security/AccessDeniedHandler.php
namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    private $flashBagInterface;

    public function __construct(FlashBagInterface $flashBagInterface)
    {
        $this->flashBagInterface = $flashBagInterface;
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        $this->flashBagInterface->add('error', 'Vous n\'êtes pas autorisés à effectuer cette action !');
        return new RedirectResponse($request->headers->get('referer'));
    }
}
