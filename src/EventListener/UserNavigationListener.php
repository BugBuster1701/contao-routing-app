<?php
// src/AppBundle/EventListener/UserNavigationListener.php
namespace BugBuster\RoutingappBundle\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

class UserNavigationListener
{
    protected $requestStack;
    protected $router;

    public function __construct(RequestStack $requestStack, RouterInterface $router)
    {
        $this->requestStack = $requestStack;
        $this->router = $router;
    }

    public function onGetUserNavigation($arrModules, $blnShowAll)
    {
        $arrModules['content']['modules']['bemain'] = [
            'title' => 'A backend route test module',
            'label' => 'Be Main Test',
            'class' => 'navigation test',
            'href'  => $this->router->generate('backend_maintest')
        ];

        if ($this->requestStack->getCurrentRequest()->attributes->get('_backend_module') === 'bemain') {
            $arrModules['content']['modules']['bemain']['class'] .= ' active';
        }

        return $arrModules;
    }
}
