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
        $arrModules['content']['modules']['test'] = [
            'title' => 'A backend route test module',
            'label' => 'Test',
            'class' => 'navigation test',
            'href'  => $this->router->generate('backend_test')
        ];

        if ($this->requestStack->getCurrentRequest()->attributes->get('_backend_module') === 'test') {
            $arrModules['content']['modules']['test']['class'] .= ' active';
        }

        return $arrModules;
    }
}
