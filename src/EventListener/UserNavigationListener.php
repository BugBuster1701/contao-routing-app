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
        $this->router       = $router;
    }

    /**
     * onGetUserNavigation
     * 
     * @param array $arrModules     The compiled list of back end modules.
     * @param boolean $blnShowAll   Wether to show all modules even if the group is collapsed.
     * @return array                Add your custom modules to the list and return the array of back end modules.
     */
    public function onGetUserNavigation($arrModules, $blnShowAll)
    {
        $arrModules['content']['modules']['bemain'] = [
            'title' => 'A backend route test module',
            'label' => 'Be Main Test',
            'class' => 'navigation bemain',
            'href'  => $this->router->generate('backend_maintest') // backend_maintest = Name der Route
        ];

        if ($this->requestStack->getCurrentRequest()->attributes->get('_backend_module') === 'bemain') 
        {
            $arrModules['content']['modules']['bemain']['class'] .= ' active'; // altes BE Theme
            $arrModules['content']['modules']['bemain']['isActive'] = true;    // neues BE Theme
            
        }
        
        //use app_dev.php to dump
        //dump($arrModules['content']['modules']);
        

        return $arrModules;
    }
}
